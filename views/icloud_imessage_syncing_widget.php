<div class="col-lg-4 col-md-6">
    <div class="panel panel-default" id="icloud_imessage_syncing-widget">
        <div id="icloud_imessage_syncing-widget" class="panel-heading" data-container="body">
            <h3 class="panel-title"><i class="fa fa-commenting-o"></i> 
                <span data-i18n="icloud.imessage_syncing_enabled"></span>
                <list-link data-url="/show/listing/icloud/icloud"></list-link>
            </h3>
        </div>
        <div class="panel-body text-center"></div>
    </div><!-- /panel -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

    $.getJSON( appUrl + '/module/icloud/get_imessage_syncing', function( data ) {
        if(data.error){
            //alert(data.error);
            return;
        }

        var panel = $('#icloud_imessage_syncing-widget div.panel-body'),
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
