<?php
// MEka ain karala ba meka oni ain kare DB eke awl yana nisa
/*
require_once '../../configs/core/init.php';
$user =new User();

	if(!($user->isLoggedIn())){
		redirect::to('../index.php');
	}
*/
?>

<?php

    //FUNCTION HADANNA DB EKEN MEWA GANNA PULUWAN VENNA

    $item_per_page = 4; //need to put this configuration file
    require("../../models/Db.class.php");
    $db = new Db();
    $get_total_rows = 0;

    $lessons = $db->query("SELECT COUNT(*) FROM lesson");

    $get_total_rows = $lessons[0]["COUNT(*)"];
    //break total records into pages
    $total_pages = ceil($get_total_rows/$item_per_page);


?>

<html>
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UCSC VideoBay</title>


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../../public/css/form-elements.css">
        <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
        <link rel="stylesheet" href="../../../public/css/navbaruser.css">
        <!--<link rel="stylesheet" type="text/css" href="../../../public/slick/slick.css"/>
        <link rel="stylesheet" type="text/css" href="../../../public/slick/slick-theme.css"/>

        <!-- Color Box -->
        <link rel="stylesheet" href="../../../public/css/colorbox.css" />

        <link rel="stylesheet" href="../../../public/css/animate.css">





    </head>

<body>
    <div class="wrapper">
        <div class="box">
            <div class="row row-offcanvas row-offcanvas-left">
                <div class="column col-sm-2 col-xs-1 sidebar-offcanvas" id="sidebar">
                <!-- side bar -->
                <?php
                    include '../../views/includes/sidebar.php'
                ?>
                </div>
                <!-- main right col -->
                <div class="column col-sm-10 col-xs-11" id="main">

                    <?php
                        include '../../views/includes/navbaruser_new.php'
                    ?>

                    <!-- new function -->
                    <div class="full">

                        <div id="feedback"> </div>

                        <div class="col-sm-12 text">
                            <h3 id="topic">Recent view</h3>
                            <div id="recentLesson"></div>
                        </div>


                        <!--current lessons -->
                        <div class="col-sm-12 text" id="result_wrap">
                            <h3>Current lessons</h3>
                            <!-- all lessons load by AJAX to results div -->
                            <div id="results"></div>
                        </div>

                        <div class="col-sm-12 text " id="loadmore" style="margin-bottom: 20px;">
                            <!--comment: methanat scroll venna hadanna sunimal -->

                        </div>
                        <!--end of currrent lessons-->






                    </div>
                </div>
            </div>
        </div>
    </div>





<script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<script src="../../../public/js/ucscvideobay.js"></script>
<script src="../../../public/js/userhome.js"></script>


<script src="../../../public/js/validation_core.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="../../../public/js/bootstrap-notify.min.js"></script>
<!--<script type="text/javascript" src="../../../public/slick/slick.min.js"></script>






<!--<script src="../../../../../UCSCpresent/new/js/scripts.js"></script>-->


<script type="text/javascript">
    $(document).ready(function() {


        //load more buttuon passe add karanne
        $("#loadmore").html('<div align="center"><button class="load_more" id="load_more_button">load More</button> <div class="animation_image" style="display:none;"><img src="ajax-loader.gif"> Loading...</div> </div>');

        // This part replace with load more
        //load all the results to home page when load the page.
        //$("#results").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
        //$("#results").load("../../models/fetch_lessons.php");


        //load recent lesson to home page when load the page.
        $("#recentLesson").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
        $("#recentLesson").load("../../models/fetch_last_lesson.php");





        // this is for enter press , this call on click event
        $('#search-form').submit(function(e) {
            var $this = $(this);
            e.preventDefault(); // Prevents the form from submitting regularly
            $("#serchbut").click();

        });

        // this is for mouse click event
        $("#serchbut").click(function(){
            $("#results").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
            var search_keyword = document.getElementById("srch-term").value;
            $("#results").load("../Search/searchResults.php",{'srch-term':search_keyword});

        });


        //load  watch later to the watch_later.
        //$("#watch_later").prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
       // $("#watch_later").load("../../models/fetch_watch_later.php");

    });
</script>


<script>

    function send_request(){
        $( "#send_request" ).click();
        //confirm("Are you sure !");
        //$("#comment").html("Watch Later")


    }

    function loadWatchLater(){
        var recent = $("#recentLesson");
        recent.empty();
        $("#loadmore").empty();
        $("#result_wrap").empty();
        $("#topic").html("Watch Later");
        recent.prepend('<div class="loading-indication"><img src="../ajax-loader.gif" /> Loading...</div>');
        recent.load("../../models/fetch_watch_later.php");
    }


    function deleteWatchLater(id){
        var r = confirm("Are you sure !" + id);
        if (r == true) {
            var m_data = new FormData();
            m_data.append('id', id);

            $("#results").html("chamath");
            //Ajax post data to server
            $.ajax({
                url: '../../models/delete_watch_later.php',
                data: m_data,
                processData: false,
                contentType: false,
                type: 'POST',
                dataType: 'json',
                success: function (response) {
                    //load json data from server and output message
                    if (response.type == "text") {
                        $("#feedback").html(response.text);
                    } else {
                        $("#feedback").html(response.text);

                    }
                    loadWatchLater()
                }
            });
        }

    }

</script>

    <script type="text/javascript">
        $(document).ready(function() {

            var track_click = 0; //track user click on "load more" button, righ now it is 0 click

            var total_pages = <?php echo $total_pages; ?>;
            $('#results').load("../../models/fetch_lessons2.php", {'page':track_click}, function() {track_click++;}); //initial data to load

            $(".load_more").click(function (e) { //user clicks on button

                $(this).hide(); //hide load more button on click
                $('.animation_image').show(); //show loading image

                if(track_click <= total_pages) //make sure user clicks are still less than total pages
                {
                    //post page number and load returned data into result element
                    $.post('../../models/fetch_lessons2.php',{'page': track_click}, function(data) {

                        $(".load_more").show(); //bring back load more button

                        $("#results").append(data); //append data received from server

                        //scroll page to button element
                        $("html, body").animate({scrollTop: $("#load_more_button").offset().top},500);

                        //hide loading image
                        $('.animation_image').hide(); //hide loading image once data is received

                        track_click++; //user click increment on load button

                    }).fail(function(xhr, ajaxOptions, thrownError) {
                        alert(thrownError); //alert any HTTP error
                        $(".load_more").show(); //bring back load more button
                        $('.animation_image').hide(); //hide loading image once data is received
                    });


                    if(track_click >= total_pages-1)
                    {
                        //reached end of the page yet? disable load button
                        $(".load_more").attr("disabled", "disabled");
                        $(".load_more").html("<div class='all_loaded'>No More Content to Load</div>");

                    }

                }

            });
        });
    </script>

<script>
    $(document).ready(function() {

        $("#send_request").click(function() {

            $("#request_form").validate({
            rules:{
                topic:{
                    required: true

                },
                comment: {
                    required: true
                }

            },


            //if form is valid do this
            submitHandler: function(form) {

                //get input field values data to be sent to server
                var m_data = new FormData();
                m_data.append( 'topic',  document.getElementById("topic" ).value);
                m_data.append( 'comment', document.getElementById("comment").value);

                document.getElementById("request_form").reset();

                //Ajax post data to server
                $.ajax({
                    url: '../../models/send_request.php',
                    data: m_data,
                    processData: false,
                    contentType: false,
                    type: 'POST',
                    dataType:'json',
                    success: function (response) {
                        //load json data from server and output message
                        if (response.type == "text") {
                            //$("#feedback").html(response.text);
                            $.notify({
                                    icon: 'glyphicon glyphicon-star',
                                    message: "Your massege has send"},
                                {// settings
                                    type: "success",
                                    delay: 3000,
                                    animate: {
                                        enter: 'animated fadeInDown',
                                        exit: 'animated fadeOutUp'
                                    }

                                });

                        } else {
                            //$("#feedback").html(response.text);
                            $.notify({
                                    icon: 'glyphicon glyphicon-star',
                                    message: "Thank you your feedback! Massage has not send "},
                                {
                                    // settings
                                    type: "danger",
                                    delay: 3000,
                                    animate: {
                                        enter: 'animated fadeInDown',
                                        exit: 'animated fadeOutUp'
                                    }

                                });

                        }
                        $('#myModalrequest').modal('hide')

                    }
                });

            }
        });

        });


    });
</script>



</body>
</html>

