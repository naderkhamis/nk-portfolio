require('./bootstrap');
require('./bootstrap-filestyle.min');
// OverlayScrollBars-Plugin
document.addEventListener("DOMContentLoaded", function() {
    //The first argument are the elements to which the plugin shall be initialized
    //The second argument has to be at least a empty object or a object with your desired options
    OverlayScrollbars(document.querySelectorAll('body'), {
        className: "os-theme-light",
        resize: "both",
        scrollbars: {
            visibility: "auto",
            autoHide: "move",
            autoHideDelay: 500,
        }
    });
});
// /OverlayScrollBars-Plugin

// Optional setup: bootstrap library version will be auto-detected based on the 
// loaded bootstrap JS library bootstrap.min.js. But if you wish to override the 
// bootstrap version yourself, then you can set the following property before
// the plugin init script (available since plugin release v5.2.5)

$.fn.fileinputBsVersion = "3.3.7"; // if not set, this will be auto-derived


// with plugin options
$("#image").fileinput({
    showCaption: true,
    focusCaptionOnBrowse: false,
    focusCaptionOnClear: false,
    showPreview: false,
    showUpload: false,
    // showRemove: true,
    removeLabel: '',
    removeIcon: '<i class=" fas fa-times"></i>',
    showCancel: false,
    dropZoneEnabled: false,
    browseLabel: 'Browse',
    browseClass: 'btn btn-warning',
    // browseIcon: '<i class=" fas fa-file-upload"></i>',
    msgPlaceholder: 'Select photo'
});