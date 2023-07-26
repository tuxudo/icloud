<div class="col-lg-4 col-md-6">
    <div class="card" id="icloud_siri-widget">
        <div id="icloud_siri-widget" class="card-header" data-container="body">
            <i class="fa fa-microphone"></i> 
            <span data-i18n="icloud.siri_widget"></span>
            <a href="/show/listing/icloud/icloud" class="pull-right"><i class="fa fa-list"></i></a>
        </div>
        <div class="card-body text-center"></div>
    </div><!-- /card -->
</div><!-- /col -->

<script>
$(document).on('appUpdate', function(e, lang) {

    $.getJSON( appUrl + '/module/icloud/get_siri', function( data ) {
        if(data.error){
            //alert(data.error);
            return;
        }

        var card = $('#icloud_siri-widget div.card-body'),
        baseUrl = appUrl + '/show/listing/icloud/icloud/';
        card.empty();
        // Set blocks, disable if zero
        if(data.yes != "0"){
            card.append(' <a href="'+baseUrl+'" class="btn btn-danger"><span class="bigger-150">'+data.yes+'</span><br>'+i18n.t('enabled')+'</a>');
        } else {
            card.append(' <a href="'+baseUrl+'" class="btn btn-danger disabled"><span class="bigger-150">'+data.yes+'</span><br>'+i18n.t('enabled')+'</a>');
        }
        if(data.no != "0"){
            card.append(' <a href="'+baseUrl+'" class="btn btn-success"><span class="bigger-150">'+data.no+'</span><br>'+i18n.t('disabled')+'</a>');
        } else {
            card.append(' <a href="'+baseUrl+'" class="btn btn-success disabled"><span class="bigger-150">'+data.no+'</span><br>'+i18n.t('disabled')+'</a>');
        }
    });

});

</script>
