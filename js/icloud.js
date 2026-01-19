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

// Search filters for widgets

/**
 * Logged in filter
 */
var logged_in_filter = function(colNumber, d) {
    if (d.search.value.match(/^logged_in_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^logged_in_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Siri enabled filter
 */
var siri_enabled_filter = function(colNumber, d) {
    if (d.search.value.match(/^siri_enabled_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^siri_enabled_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Stocks enabled filter
 */
var stocks_enabled_filter = function(colNumber, d) {
    if (d.search.value.match(/^stocks_enabled_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^stocks_enabled_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Shared streams filter
 */
var shared_streams_filter = function(colNumber, d) {
    if (d.search.value.match(/^shared_streams_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^shared_streams_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Contacts filter
 */
var contacts_filter = function(colNumber, d) {
    if (d.search.value.match(/^contacts_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^contacts_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Find My Mac filter
 */
var find_my_mac_filter = function(colNumber, d) {
    if (d.search.value.match(/^find_my_mac_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^find_my_mac_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Home filter
 */
var home_filter = function(colNumber, d) {
    if (d.search.value.match(/^home_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^home_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * iMessage syncing filter
 */
var imessage_syncing_filter = function(colNumber, d) {
    if (d.search.value.match(/^imessage_syncing_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^imessage_syncing_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Keychain sync filter
 */
var keychain_sync_filter = function(colNumber, d) {
    if (d.search.value.match(/^keychain_sync_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^keychain_sync_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Mail filter
 */
var mail_filter = function(colNumber, d) {
    if (d.search.value.match(/^mail_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^mail_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * News filter
 */
var news_filter = function(colNumber, d) {
    if (d.search.value.match(/^news_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^news_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Notes filter
 */
var notes_filter = function(colNumber, d) {
    if (d.search.value.match(/^notes_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^notes_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Reminders filter
 */
var reminders_filter = function(colNumber, d) {
    if (d.search.value.match(/^reminders_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^reminders_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Bookmarks filter
 */
var bookmarks_filter = function(colNumber, d) {
    if (d.search.value.match(/^bookmarks_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^bookmarks_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Calendar filter
 */
var calendar_filter = function(colNumber, d) {
    if (d.search.value.match(/^calendar_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^calendar_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Cloud photo filter
 */
var cloud_photo_filter = function(colNumber, d) {
    if (d.search.value.match(/^cloud_photo_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^cloud_photo_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * iCloud Desktop filter
 */
var clouddesktop_desktop_filter = function(colNumber, d) {
    if (d.search.value.match(/^clouddesktop_desktop_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^clouddesktop_desktop_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * iCloud Documents filter
 */
var clouddesktop_documents_filter = function(colNumber, d) {
    if (d.search.value.match(/^clouddesktop_documents_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^clouddesktop_documents_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * iCloud Drive filter
 */
var clouddesktop_drive_filter = function(colNumber, d) {
    if (d.search.value.match(/^clouddesktop_drive_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^clouddesktop_drive_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}

/**
 * Private Relay filter
 */
var private_relay_filter = function(colNumber, d) {
    if (d.search.value.match(/^private_relay_yes$/)) {
        d.columns[colNumber].search.value = '= 1';
        d.search.value = '';
    }
    
    if (d.search.value.match(/^private_relay_no$/)) {
        d.columns[colNumber].search.value = '= 0';
        d.search.value = '';
    }
}