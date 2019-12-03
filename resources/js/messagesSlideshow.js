var totalMessages = $("#messagesContainer .message").length;
var i = 1;

// Basically, this will only work in the page that shows the messages
if (totalMessages > 0) {
    // "Manually" show the first message
    $(`#${i}`).show();

    // The function that will "slideshow" all messages
    function myLoop() {
        // We set a timeout of 10 seconds
        setTimeout(function() {
            // Hide the previous message
            $(`#${i}`).hide();
            console.log(`Previous message (${i}) hidden...`);
            // Show the current message
            $(`#${i + 1}`).fadeIn();
            console.log(`Current message (${i + 1}) shown!`);

            // Increment the counter
            i++;

            // If the counter is inferior to the total number of messages loaded...
            if (i <= totalMessages) {
                // ... it will repeat the function
                myLoop();
            }
            // Otherwise...
            else {
                // We refresh the page
                location.reload(true);
            }
        }, 10000);
    }

    // The first time we have to call the function "manually"
    myLoop();
}
