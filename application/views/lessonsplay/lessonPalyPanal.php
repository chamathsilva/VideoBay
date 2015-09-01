<!DOCTYPE html>
<html lang="en">

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

    <!-- Color Box -->
    <link rel="stylesheet" href="../../../public/css/colorbox.css" />

</head>

    <body>

        <?php include '../includes/navbar.php' ?>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-6">
                           <p>test video</p>
                            <div class="embed-responsive embed-responsive-16by9">
                                <video id="myVideo" class="embed-responsive-item"  width = "300px" height ="400px" autoplay controls>
                                   <!-- <source src="<?php echo "$temp"?>"> -->
                                    <source src="Aruba_ 19 Miles of Happiness - 4K.mp4">

                                </video>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <p> test slid</p>

                                <!--
                                <img id="xx" class="img-responsive" src="<?php echo$src_path.'1.jpg';?>" alt="Wrong link" width="800px" height="400px" >
                                -->
                                <img id="xx" class="img-responsive" src="<?php echo '1.jpg';?>" alt="Wrong link" min-width="100%" height="auto" >

                            </div>
                        </div>
                    <div class="row slidNavigator">

                        <div class="col-sm-12">
                            hello world

                        </div>

                        <div class="container">



                    </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../../public/js/ucscvideobay.js"></script>
        <script src="../../../public/js/jquery.colorbox.js"></script>
    </body>
</html>