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

    <div class="wrapper" >
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
 UCSS VideoBay is a web based system which creates a learning environment for the students and lecturers and it also creates a virtual bridge to link students and lectures. 
  
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




        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../public/js/ucscvideobay.js"></script>
        <script src="../../public/js/jquery.colorbox.js"></script>

        
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <script src="../../public/js/validation.js"></script>


 
    </div>


    </body>
</html>