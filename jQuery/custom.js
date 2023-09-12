  jQuery(document).ready(function() {
    var videoContainer = jQuery(".food-menu"); // Access the video container
    var video = videoContainer.find("video")[0]; // Find the video element inside the container
    var videoIcon = jQuery(".video-icon");

    // Attach a click event handler to the video icon
    videoIcon.click(function() {
        if (video.paused) {
            video.play(); // Call the play() method on the video element
            videoIcon.hide();
        } else  {
            video.pause(); // Pause the video if it's already playing
            videoIcon.show();
        }
    });
});




