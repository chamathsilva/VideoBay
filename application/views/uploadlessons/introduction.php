
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


        <div class="wrapper" >

            <div class="container">
                <div class="row">
                    <div class="col-sm-7 text ">
                        <br><br>
                        <form action="../../models/saveForm.php" method="POST" >
                        Name    <input type="text" name="name"><br><br>
                        Description <input type="text" name="description" ><br><br>
                        Lecture   <input type="text" name="lecture"><br><br>
                        Category   <select name="category"><option value="algorithms">Algorithms</option><option value="networking">Networking</option><option value="programming">
                        Programming</option></select><br><br>
                        <button type="cancel" onclick="window.location='http://localhost/series/ucsc_video_bay/videoBay/upload_lesson.php';return false;">Cancel</button>

                        <input type="submit" name="next" value="next">
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


</body>
</html>




