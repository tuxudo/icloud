<?php
/**
 * icloud module class
 *
 * @package munkireport
 * @author tuxudo
 **/
class Icloud_controller extends Module_controller
{

    /*** Protect methods with auth! ****/
    public function __construct()
    {
        // Store module path
        $this->module_path = dirname(__FILE__);
    }

    /**
    * Default method
    *
    * @author AvB
    **/
    public function index()
    {
        echo "You've loaded the icloud module!";
    }

    /**
     * Get data for button widget
     *
     * @return void
     * @author tuxudo
     **/
    public function get_button_widget($column)
    {
        // Sanitize input - fix regex pattern
        $column = preg_replace("/[^A-Za-z0-9_\-]+/", '', $column);
        
        // Whitelist allowed columns to prevent column injection (based on actual database boolean columns)
        $allowed_columns = [
            'logged_in', 'is_managed_apple_id', 'primary_email_verified', 'should_configure',
            'clouddesktop_drive_enabled', 'clouddesktop_desktop_enabled', 'clouddesktop_documents_enabled',
            'clouddesktop_declined_upgrade', 'clouddesktop_first_sync_down_complete',
            'mobile_documents_enabled', 'cloud_photo_enabled', 'shared_streams_enabled', 'cloud_photo_only_keep_thumbnail',
            'mail_and_notes_enabled', 'contacts_enabled', 'calendar_enabled', 'reminders_enabled', 
            'bookmarks_enabled', 'notes_enabled', 'keychain_sync_enabled', 'beta',
            'home_enabled', 'news_enabled', 'stocks_enabled', 'siri_enabled',
            'imessage_syncing_enabled', 'imessage_currently_syncing', 'find_my_mac_enabled',
            'family_show_manage_family', 'back_to_my_mac_enabled', 'photo_stream_enabled',
            'mail_and_notes_dot_mac_mail_supported', 'private_relay_enabled'
        ];
        
        if (!in_array($column, $allowed_columns)) {
            jsonView([]);
            return;
        }

        // Safe to use column name since it's whitelisted
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `$column` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `$column` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE ".get_machine_group_filter('');

        $out = [];
        $queryobj = new Icloud_model();
        foreach($queryobj->query($sql)[0] as $label => $value){
                $out[] = ['label' => $label, 'count' => $value];
        }

        jsonView($out);
    }

    /**
    * Retrieve data in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_tab_data($serial_number = '')
    {
        // Sanitize input - fix regex pattern and validate
        $serial_number = preg_replace("/[^A-Za-z0-9_\-]+/", '', $serial_number);

        $obj = new View();

        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
        
        if (empty($serial_number)) {
            $obj->view('json', array('msg' => []));
            return;
        }

        // Use parameterized query to prevent SQL injection
        $sql = "SELECT display_name, account_id, logged_in, account_description, prefpath, account_dsid, account_alternate_dsid, account_uuid, beta, family_show_manage_family, is_managed_apple_id, primary_email_verified, should_configure, clouddesktop_drive_enabled, clouddesktop_desktop_enabled, clouddesktop_documents_enabled, clouddesktop_first_sync_down_complete, clouddesktop_declined_upgrade, mobile_documents_enabled, cloud_photo_enabled, shared_streams_enabled, cloud_photo_only_keep_thumbnail, mail_and_notes_enabled, mail_and_notes_email_address, mail_and_notes_full_user_name, mail_and_notes_username, mail_and_notes_dot_mac_mail_supported, contacts_enabled, calendar_enabled, reminders_enabled, bookmarks_enabled, notes_enabled, keychain_sync_enabled, siri_enabled, home_enabled, news_enabled, stocks_enabled, imessage_syncing_enabled, imessage_currently_syncing, find_my_mac_enabled, private_relay_enabled
                        FROM icloud 
                        LEFT JOIN reportdata USING (serial_number)
                        ".get_machine_group_filter()."
                        AND serial_number = ?";

        $queryobj = new Icloud_model();
        $icloud_tab = $queryobj->query($sql, [$serial_number]);
        $obj->view('json', array('msg' => current(array('msg' => $icloud_tab)))); 
    }
} // End class Icloud_controller