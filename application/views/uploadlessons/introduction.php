
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
                            <i class="fa fa-dashboard"></i>Details
                        </li>
                    </ol>
                    <form class="ad" action="../../models/saveForm.php" method="POST" >
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
                    </form>
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




