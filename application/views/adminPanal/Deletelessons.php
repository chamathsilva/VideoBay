<!--<?php
require_once '../../configs/core/init.php';
echo '<p>You are an administrator!</p> ';
$user =new User();
if($user->isLoggedIn()){
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
    <link rel="stylesheet" href="../../../public/dataTable/css/jquery.dataTables.css">




</head>
<body id="adminbody">
<div id="adminwrapper">

    <?php include '../includes/admin_navbar.php' ?>

    <div id="adminpage-wrapper">

        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header" style="margin:50px 0px 20px">
                        Delete <small>lessons</small>
                    </h1>
                </div>

                <div class="col-md-8 col-md-offset-2">
                    <table class="table" >
                        <thead>
                        <tr>
                            <th class="product-name">id</th>
                            <th class="product-name">Name</th>
                            <th class="product-price">lecture</th>
                            <th class="product-quantity">category</th>
                            <th class="product-quantity">type</th>
                            <th class="product-quantity">Delete</th>
                        </tr>
                        </thead>

                        <tbody id = "delete_lesson" >
                        </tbody>
                    </table>
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
<?php
}else{
    echo "ILLEGAL ENTRYYYYY !!!!!!!!!!!!!!!!!!!!!!";
}

?>

<script>

    $(document).ready(function() {
        $("#delete_lesson").load("../../models/fetch_delete_lessons.php");

    } );
</script>

<script>
    function myFunction(x) {
        var txt;
        var r = confirm("Are you sure!");
        if (r == true) {
            window.location.href = "../../models/delete_lessons.php?id=".concat(x);
        }
    }
</script>












