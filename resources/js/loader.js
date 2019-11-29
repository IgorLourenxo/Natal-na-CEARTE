// When the document is ready, the loader gets to halfway the page
$(document).ready(function () {
    console.log('Ready!');
    $('#loader').css("width", "50vw");
})

// When all images are loaded, the loader gets to the end of the page and eventually fades out
$(window).on("load", function () {
    console.log('Loaded!');
    $('#loader').css("width", "100vw").delay(500).fadeOut(500);
});