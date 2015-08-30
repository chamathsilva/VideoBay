$(document).ready(function(){
    $("#registration").click(function(){
    url = "registration.php";
      $( location ).attr("href", url);
      return false;
        
    });
    $("#show").click(function(){
        $("p").show();
    });

	$(".show-video").colorbox({iframe:true, innerWidth:650, innerHeight:390});

});



(function ($) {
    "use strict";
    var mainApp = {

        main_fun: function () {

            //ADD REMOVE PADDING CLASS ON SCROLL
            $(window).scroll(function () {
                if ($(".navbar").offset().top >50) {
                    $(".navbar-fixed-top").addClass("navbar-pad-original");
                } else {
                    $(".navbar-fixed-top").removeClass("navbar-pad-original");
                }
            });
            //SLIDESHOW SCRIPT
       

        },

        initialization: function () {
            mainApp.main_fun();

        }

    }
    // Initializing ///

    $(document).ready(function () {
        mainApp.main_fun();
    });

}(jQuery));