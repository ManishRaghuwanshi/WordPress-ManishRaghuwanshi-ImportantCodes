jQuery(document).ready(function () {
  /* Scroll Function */
  jQuery(window).scroll(function () {
    /*--------------------------- Value Focus --------------------------------------- */
    jQuery(document).on(
      "change",
      ".wpcf7-form input, .wpcf7-form textarea, .wpcf7-form select",
      function () {
        var data = jQuery(this).val();
        if (data == "") {
          jQuery(this).parent().parent().removeClass("value_focus");
        } else {
          jQuery(this).parent().parent().addClass("value_focus");
        }
      }
    );

    jQuery(".wpcf7-form input, .wpcf7-form textarea, .wpcf7-form select")
      .focusin(function () {
        jQuery(this).parent().parent().addClass("input_focus");
      })
      .focusout(function () {
        jQuery(this).parents().parent().removeClass("input_focus");
      });

    document.addEventListener(
      "wpcf7mailsent",
      function (event) {
        jQuery(".wpcf7-response-output").addClass("success-msg");
        jQuery(".contact-form div").removeClass("value_focus");
        jQuery(
          "form select, .wpcf7-textarea, .wpcf7-form input[type='text'], .wpcf7-form input[type='email'], .wpcf7-form input[type='number']"
        )
          .parent()
          .parent()
          .removeClass("value_focus");
      },
      false
    );




    /*--------------------------- Sticky Header --------------------------------------- */
    if (jQuery(document).scrollTop() > 0) {
      jQuery(".header").addClass("sticky");
      jQuery(".btn-top").show();
    } else {
      jQuery(".header").removeClass("sticky");
      jQuery(".btn-top").hide();
    }
  });

  /*--------------------------- Back to Top Button --------------------------------------- */
  jQuery("a.to-top").hide();
  jQuery(window).scroll(function () {
    if (jQuery(document).scrollTop() > 250) {
      jQuery("#masthead").addClass("sticky");
      jQuery("a.to-top").show();
    } else {
      jQuery("#masthead").removeClass("sticky");
      jQuery("a.to-top").hide();
    }
  });

  jQuery("a.to-top").click(function () {
    jQuery("html, body").animate(
      {
        scrollTop: 0,
      },
      800
    );
    return false;
  });

  /*--------------------------- Owl Carousel Initialization --------------------------------------- */
  if (jQuery(window).width() <= 767) {
    jQuery(".our-kitchen-images")
      .owlCarousel({
        margin: 20,
        items: 1,
        
      })
      .addClass("owl-carousel");
  }

  /*--------------------------- Add Class to Body Based on Page ID --------------------------------------- */
  if ($('body').hasClass('page-id-20')) {
    $('body').addClass('kazems-body-catering');
  }

  if ($('body').hasClass('page-id-24')) {
    $('body').addClass('kazems-body-franchise');
  }

  if ($('body').hasClass('page-id-26')) {
    $('body').addClass('kazems-body-contactus');
  }




});
  /*------------------------------------*hide video icon--------------------------------*/
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


