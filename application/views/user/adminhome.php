<!--<?php
require_once '../../configs/core/init.php';
echo '<p>You are an administrator!</p> ';
$user =new User();
	if(!($user->isLoggedIn())){
		redirect::to('../index.php');
	}
	?>
?>
<p>Hello <a href="profile.php?user=<?php echo$_GET['name'] ; ?>"><?php echo$_GET['name'] ; ?></a>!</p>
    <u1>
    	<li><a href="logout.php">Log out</a></li>
        <li><a href="update.php"> Update details</a></li>
        <li><a href="changepassword.php">Change password</a></li>
    
    </u1>


-->
<?php
/**
 * Created by PhpStorm.
 * User: Smalkakulage
 * Date: 9/1/15
 * Time: 11:56 PM
 */ ?>


<html>
<head>

    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="../../../library/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../../library/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../public/css/ucscvideobay.css">
    <link rel="stylesheet" href="../../../public/css/animate.css">  <!-- meke wadak nathi ewa makala danna -->





</head>
<body id="adminbody">
<div id="adminwrapper">

    <?php include '../includes/admin_navbar.php' ?>

    <div id="adminpage-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin:50px 0px 20px">
                        Dashboard <small>Statistics Overview</small>
                    </h1>




                    <ol class="breadcrumb">
                        <li class="active">
                            <i class="fa fa-dashboard"></i> Dashboard
                        </li>
                    </ol>

                    <div class="col-sm-12">
                        <div id="graph">
                            <img style="margin-left:30px;" src="../ajax-loader.gif">
                            Loading...
                        </div>
                    </div>
                    <!--
                    <u1>
                        <li><a href="logout.php">Log out</a></li>
                        <li><a href="update.php"> Update details</a></li>
                        <li><a href="changepassword.php">Change password</a></li>

                    </u1>
                    -->



                </div>
            </div>







        </div>
    </div>
</div>

<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<script src="../../../library/Jquery/jquery.js"></script>-->
<script src="../../../public/js/ucscvideobay.js"></script>
<script src="../../../public/js/bootstrap-notify.min.js"></script>

<!--graph -->
<script src="http://code.highcharts.com/highcharts.js"></script>
<script src="http://code.highcharts.com/modules/exporting.js"></script>


<script>

   $("#graph").load("../../models/graph_data.php");

    function loadfeedback(){
        $("#feedback_dropdown").empty();
        $("#feedback_dropdown").prepend('<li class="message-footer"><img style="margin-left:30px;" src="../ajax-loader.gif" /> Loading...</div></li>');
        $("#feedback_dropdown").load("../../models/fetch_feedback.php");
    }


</script>


</body>
</html>











