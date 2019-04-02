<?php $this->view('partials/head', array(
	"scripts" => array(
		"clients/client_list.js"
	)
)); ?>

<div class="container">

  <div class="row">
      <?php $widget->view($this, 'icloud_logged_in'); ?>
      <?php $widget->view($this, 'icloud_find_my_mac'); ?>
      <?php $widget->view($this, 'icloud_back_to_my_mac'); ?>
  </div> <!-- /row -->

  <div class="row">
    <?php $widget->view($this, 'icloud_clouddesktop_desktop'); ?>
    <?php $widget->view($this, 'icloud_clouddesktop_documents'); ?>
    <?php $widget->view($this, 'icloud_clouddesktop_drive'); ?>
  </div> <!-- /row -->

  <div class="row">
    <?php $widget->view($this, 'icloud_mail'); ?>
    <?php $widget->view($this, 'icloud_contacts'); ?>
    <?php $widget->view($this, 'icloud_calendar'); ?>
  </div> <!-- /row -->

  <div class="row">
      <?php $widget->view($this, 'icloud_cloud_photo'); ?>
      <?php $widget->view($this, 'icloud_photo_stream'); ?>
      <?php $widget->view($this, 'icloud_shared_streams'); ?>
  </div> <!-- /row -->

  <div class="row">
      <?php $widget->view($this, 'icloud_imessage_syncing'); ?>
      <?php $widget->view($this, 'icloud_keychain_sync'); ?>
      <?php $widget->view($this, 'icloud_siri'); ?>
  </div> <!-- /row -->

  <div class="row">
      <?php $widget->view($this, 'icloud_bookmarks'); ?>
      <?php $widget->view($this, 'icloud_notes'); ?>
      <?php $widget->view($this, 'icloud_reminders'); ?>
  </div> <!-- /row -->

  <div class="row">
      <?php $widget->view($this, 'icloud_home'); ?>
      <?php $widget->view($this, 'icloud_news'); ?>
      <?php $widget->view($this, 'icloud_stocks'); ?>
  </div> <!-- /row -->

</div>  <!-- /container -->

<script src="<?php echo conf('subdirectory'); ?>assets/js/munkireport.autoupdate.js"></script>

<?php $this->view('partials/foot'); ?>
