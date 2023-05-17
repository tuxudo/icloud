<div class="col-lg-4 col-md-6">
    <div class="card" id="icloud_cloud_photo-widget">
        <div id="icloud_cloud_photo-widget" class="card-heading" data-container="body">
            <i class="fa fa-picture-o"></i> 
            <span data-i18n="icloud.cloud_photo_enabled"></span>
            <a href="/show/listing/icloud/icloud" class="pull-right"><i class="fa fa-list"></i></a>
        </div>
        <div class="card-body text-center"></div>
    </div><!-- /card -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

    $.getJSON( appUrl + '/module/icloud/get_cloud_photo', function( data ) {
        if(data.error){
            //alert(data.error);
            return;
        }

        var panel = $('#icloud_cloud_photo-widget div.card-body'),
        baseUrl = appUrl + '/show/listing/icloud/icloud/';
        panel.empty();
        // Set blocks, disable if zero
        if(data.yes != "0"){
            panel.append(' <a href="'+baseUrl+'" class="btn btn-danger"><span class="bigger-150">'+data.yes+'</span><br>'+i18n.t('enabled')+'</a>');
        } else {
            panel.append(' <a href="'+baseUrl+'" class="btn btn-danger disabled"><span class="bigger-150">'+data.yes+'</span><br>'+i18n.t('enabled')+'</a>');
        }
        if(data.no != "0"){
            panel.append(' <a href="'+baseUrl+'" class="btn btn-success"><span class="bigger-150">'+data.no+'</span><br>'+i18n.t('disabled')+'</a>');
        } else {
            panel.append(' <a href="'+baseUrl+'" class="btn btn-success disabled"><span class="bigger-150">'+data.no+'</span><br>'+i18n.t('disabled')+'</a>');
        }
    });

});

</script>
