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
    * Retrieve logged_in in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_logged_in()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `logged_in` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `logged_in` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve clouddesktop_desktop_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_clouddesktop_desktop()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `clouddesktop_desktop_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `clouddesktop_desktop_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve cloud_photo_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_cloud_photo()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `cloud_photo_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `cloud_photo_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve photo_stream_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_photo_stream()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `photo_stream_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `photo_stream_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve mail_and_notes_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_mail()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `mail_and_notes_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `mail_and_notes_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve contacts_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_contacts()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `contacts_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `contacts_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve calendar_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_calendar()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `calendar_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `calendar_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve reminders_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_reminders()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `reminders_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `reminders_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
    
    /**
    * Retrieve bookmarks_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_bookmarks()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `bookmarks_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `bookmarks_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
   
    /**
    * Retrieve notes_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_notes()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `notes_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `notes_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
   
    /**
    * Retrieve siri_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_siri()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `siri_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `siri_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
   
    /**
    * Retrieve imessage_syncing_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_imessage_syncing()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `imessage_syncing_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `imessage_syncing_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
   
    /**
    * Retrieve keychain_sync_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_keychain_sync()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `keychain_sync_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `keychain_sync_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
  
    /**
    * Retrieve find_my_mac_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_find_my_mac()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `find_my_mac_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `find_my_mac_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
  
    /**
    * Retrieve home_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_home()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `home_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `home_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
    
    /**
    * Retrieve stocks_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_stocks()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `stocks_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `stocks_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
    
    /**
    * Retrieve news_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_news()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `news_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `news_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }

    /**
    * Retrieve shared_streams_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_shared_streams()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `shared_streams_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `shared_streams_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
         
    /**
    * Retrieve clouddesktop_drive_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_clouddesktop_drive()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `clouddesktop_drive_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `clouddesktop_drive_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
        
    /**
    * Retrieve clouddesktop_documents_enabled in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_clouddesktop_documents()
    {
        $obj = new View();
        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
  
        $queryobj = new Icloud_model();
        $sql = "SELECT COUNT(1) as total,
                        COUNT(CASE WHEN `clouddesktop_documents_enabled` = 1 THEN 1 END) AS 'yes',
                        COUNT(CASE WHEN `clouddesktop_documents_enabled` = 0 THEN 1 END) AS 'no'
                        from icloud
                        LEFT JOIN reportdata USING (serial_number)
                        WHERE
                            ".get_machine_group_filter('');
        $obj->view('json', array('msg' => current($queryobj->query($sql))));
    }
    
    /**
    * Retrieve data in json format
    *
    * @return void
    * @author tuxudo
    **/
    public function get_tab_data($serial_number = '')
    {
        $obj = new View();

        if (! $this->authorized()) {
            $obj->view('json', array('msg' => 'Not authorized'));
            return;
        }
        
        $sql = "SELECT display_name, account_id, logged_in, account_description, prefpath, account_dsid, account_alternate_dsid, account_uuid, beta, family_show_manage_family, is_managed_apple_id, primary_email_verified, should_configure,
        clouddesktop_drive_enabled, clouddesktop_desktop_enabled, clouddesktop_documents_enabled, clouddesktop_first_sync_down_complete, clouddesktop_declined_upgrade, mobile_documents_enabled, cloud_photo_enabled, photo_stream_enabled, shared_streams_enabled, cloud_photo_only_keep_thumbnail, mail_and_notes_enabled, mail_and_notes_email_address, mail_and_notes_full_user_name, mail_and_notes_username, mail_and_notes_dot_mac_mail_supported, contacts_enabled, calendar_enabled, reminders_enabled, bookmarks_enabled, notes_enabled, keychain_sync_enabled, siri_enabled, home_enabled, news_enabled, stocks_enabled, imessage_syncing_enabled, imessage_currently_syncing, find_my_mac_enabled
                        FROM icloud 
                        WHERE serial_number = '$serial_number'";
        
        $queryobj = new Icloud_model();
        $icloud_tab = $queryobj->query($sql);
        $obj->view('json', array('msg' => current(array('msg' => $icloud_tab)))); 
    }
} // End class Icloud_controller