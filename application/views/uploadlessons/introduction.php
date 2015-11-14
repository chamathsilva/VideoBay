
<html>

<head>

    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
</head>



<body id="adminbody">
<div id="adminwrapper">


    <div class="container-fluid">
<?php include '../includes/admin_navbar.php' ?>

    <div id="adminpage-wrapper">


        <div class="wrapper" >


                <!--
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

                        </div> -->


                    <div class="col-lg-6">

                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Add New Lesson</h3>
                            <p>Fill in the form below </p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-sign-in"></i>
                        </div>
                    </div>

                    <div id = "sign-up-form"class="form-bottom">
                        <form id = "add_new_lesson" role="form" action="#" method="POST" class="login-form">

                            <div class="form-group">
                                <label for="form-last-name">Lesson Title</label>
                                <input type="text" name="name" id="User_Name" placeholder="User name" class="form-first-name form-control" id="form-first-name">
                            </div>

                            <div class="form-group">
                                <label for="form-last-name">Description</label>
                                <textarea  rows="3" type="text" name="description" id="Password" placeholder="Password" class="form-last-name form-control" id="form-last-name"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="form-last-name">Lecture</label>
                                <input type="text" name="lecture" id="User_Name" placeholder="User name" class="form-first-name form-control" id="form-first-name">
                            </div>

                            <div class="form-group">
                                <label for="form-last-name">Category</label>
                                <select class="form-control" name="category">
                                    <option value="">Select Category</option>
                                    <option value="algorithms">Algorithms</option>
                                    <option value="networking">Networking</option>
                                    <option value="programming">Programming</option>
                                    <option value="Enhancement">Enhancement</option>
                                </select>
                            </div>


                            <div class="row">
                                <div class="col-xs-6">
                                    <button id = "Cancel"type="submit" class="btn full">Cancel</button>
                                </div>
                                <div class="col-xs-6 ">
                                    <button id = "" onclick='this.form.action = "../../models/saveForm.php"' class="btn full ">Next</button>
                                </div>
                            </div>
                        </form>
                    </div>


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

<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
<script src="../../../public/js/validation.js"></script>
</body>
</html>




