var icloud_enabled_disabled = function(colNumber, row){
    var col = $('td:eq('+colNumber+')', row),
        colvar = col.text();
    if (colvar == "0"){
        colvar = '<span class="label label-success">'+i18n.t('disabled')+'</span>'
    } else if (colvar == "1"){
        colvar = '<span class="label label-danger">'+i18n.t('enabled')+'</span>'
    } else {
        colvar = colvar
    }
    col.html(colvar)
}

var icloud_yes_no = function(colNumber, row){
    var col = $('td:eq('+colNumber+')', row),
        colvar = col.text();
    if (colvar == "0"){
        colvar = '<span class="label label-success">'+i18n.t('no')+'</span>'
    } else if (colvar == "1"){
        colvar = '<span class="label label-danger">'+i18n.t('yes')+'</span>'
    } else {
        colvar = colvar
    }
    col.html(colvar)
}