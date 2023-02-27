require("./bootstrap");
require("./bootstrap-filestyle.min");
// OverlayScrollBars-Plugin
document.addEventListener("DOMContentLoaded", function () {
    //The first argument are the elements to which the plugin shall be initialized
    //The second argument has to be at least a empty object or a object with your desired options
    OverlayScrollbars(document.querySelectorAll("body"), {
        className: "os-theme-light",
        resize: "both",
        scrollbars: {
            visibility: "auto",
            autoHide: "move",
            autoHideDelay: 500,
        },
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
    removeLabel: "",
    removeIcon: '<i class=" fas fa-times"></i>',
    showCancel: false,
    dropZoneEnabled: false,
    browseLabel: "Browse",
    browseClass: "btn btn-warning",
    // browseIcon: '<i class=" fas fa-file-upload"></i>',
    msgPlaceholder: "Select photo",
});

// add new input

// Select add new input buttons
let newEmailBtn = document.getElementById("new-email");
let newPhoneBtn = document.getElementById("new-phone");

// Assign addNewInput function to the buttons based on click action
newEmailBtn.onclick = addNewInput;
newPhoneBtn.onclick = addNewInput;

// Function to add new input
function addNewInput(e) {
    e.preventDefault();
    // Clone the existing input
    let newInput =
        this.parentElement.previousElementSibling.firstElementChild.cloneNode();
    // Select new input button div container
    let btnParent = this.parentElement;
    // Remove new input value
    newInput.value = "";
    // Append the cloned (new) input after the existing one
    btnParent.previousElementSibling.appendChild(newInput);
    // Remove new input button
    this.classList.add("d-none");
    // Add bootstrap class to add margin top for the new input
    newInput.classList.add("mt-3");
    // Add bootstrap class to expand the new input div container
    newInput.parentElement.className = "col-12";
}
