
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


                    <div class="form-top">
                        <div class="form-top-left">
                            <h3> Details </h3>
                            <p>Details about the Lesson</p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-sign-in"></i>
                        </div>
                    </div>

                    <div id = "addlessonsForm"class="form-bottom">

                    <!--<form class="ad" action="../../models/saveForm.php" method="POST" >
                        <table>

                            <tr><td>Name</td>    <td><input type="text" name="name"></td></tr>
                        <tr><td>Description</td> <td><input type="text" name="description" ></td></tr>
                        <tr><td>Lecture</td>   <td><input type="text" name="lecture"></td></tr>
                        <tr><td>Category</td>   <td><select name="category"><option value="algorithms">Algorithms</option><option value="networking">Networking</option><option value="programming">
                                Programming</option></select></td></tr>
                            <tr>
                        <td><button type="cancel" onclick="window.location='http://localhost/series/ucsc_video_bay/videoBay/upload_lesson.php';return false;">Cancel</button></td>

                        <td><input type="submit" name="next" value="next"></td></tr>

                        </table>
                    </form> -->

                        <form class="form-horizontal" role="form" action="../../models/saveForm.php" method="POST">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email"> Name </label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="email" placeholder="Enter name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email"> Description </label>
                                <div class="col-sm-10">
                                    <input type="text" name="description" class="form-control" id="email" placeholder="Enter Description">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Lecturer</label>
                                <div class="col-sm-10">
                                    <input type="text" name="lecture" class="form-control" id="email" placeholder="Enter email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-sm-2" for="catogary">Catagory</label>
                                <div class="dropdown col-sm-6">
                                    <button class="btn btn-default dropdown-toggle" name="category" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        choose
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Algorithms</a></li>
                                        <li><a href="#">database</a></li>
                                        <li><a href="#">Mathematics</a></li>
                                        <li><a href="#">Software engineearing</a></li>
                                    </ul>
                                </div>
                            </div>




                            <div class="row">

                                <div class="col-xs-3 col-xs-offset-2">
                                    <button  type="cancel" onclick="window.location='http://localhost/series/ucsc_video_bay/videoBay/upload_lesson.php';return false;" class="btn full">Cancel!</button>
                                </div>
                                <div class="col-xs-3">

                                    <button type="submit" name="next" value="next" class="btn full ">Submit</button>
                                </div>
                            </div>
                        </form>
                        </div>

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




