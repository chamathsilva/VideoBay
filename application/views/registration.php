<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UCSC VideoBay</title>


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../../library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../library/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../public/css/form-elements.css">
        <link rel="stylesheet" href="../../public/css/ucscvideobay.css">


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>

$(document).ready(function(){
    $("#signup").click(function(){
        $("#login").hide();
        return false;
    });
    $("#signup").click(function(){
        $("#registration").show();
        return false;
    });
});
</script>

    </head>
    <body>

        <?php include 'includes/navbar.php' ?>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text ">
                            <h1><strong>UCSC VideoBay</strong></h1>
                            <div class="description">
                                <p>
                                    Rethink Education
Academic Earth was launched on the premise that
 everyone deserves access to a world-class education. 
 In 2009, we built the first collection of free online 
 college courses from the world’s top universities. The world of 
 open education has exploded since then, so today our curated lists 
 of online courses are hand selected by our staff to show you the
  very best offerings by subject area. We also make sure there is 
  something for everyone: whether you want to explore a new topic or 
  advance in your current field, we bring the amazing world of academia to you for free.
                                </p>

                                <button class="show-video">Watch the Video</button>
                            </div>
                        </div>

                        <div class="col-sm-5 form-box">
                            <?php include 'includes/registrationform.php' ?>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>