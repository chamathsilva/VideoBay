



<html>
<head>

    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">




</head>
<body id="adminbody">
<div id="adminwrapper">

    <?php include '../includes/admin_navbar.php' ?>

    <div id="adminpage-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="admin page-header" style="margin:50px 0px 20px">
                        Dashboard <small>Add Lessons</small>
                    </h1>
                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Upload Video
                        </li>
                    </ol>

                    <div class="form-top">
                        <div class="form-top-left">
                            <h3> Upload Video </h3>
                            <p>add Video here </p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-sign-in"></i>
                        </div>
                    </div>
                    <div id = "uploadVideo" class="form-bottom">
                        <form action="../controllers/savelessons/saveVideo.php" method="POST" enctype="multipart/form-data">
                            <label class="control-label col-sm-2" for="fileselect">Upload Video File : </label>
                            <div class="col-sm-10">

                                <input type="file" name="files[]" id="file" multiple="multiple" ></div>
                                <button type="submit" value="upload" name="upload" class="btn btn-default">Upload</button>
                            <!--<input type="submit" value="upload" name="upload"><br><br>-->

                        </form>



                    </div>



                    <!--<form action="../controllers/savelessons/saveVideo.php" method="POST" enctype="multipart/form-data">
                        <label for="fileselect">upload video files </label>
                        <input type="file" name="files[]" id="file" multiple="multiple">
                        <input type="submit" value="upload" name="upload"><br><br>

                    </form>-->

                </div>
            </div>






        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<script src="../../../library/Jquery/jquery.js"></script>-->
<script src="../../../public/js/ucscvideobay.js"></script>
</body>
</html>







