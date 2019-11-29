// Mandatory, first-to-be-loaded JavaScript
require('./bootstrap');

// Universal loader
require('./loader');

// Custom JavaScript below
$(document).ready(function () {
    require('./messagesSlideshow')
})