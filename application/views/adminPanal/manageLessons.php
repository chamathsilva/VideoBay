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
                        Manage <small>lessons</small>
                    </h1>
                </div>

                <div class="col-lg-12">
                    <table id="example" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>

                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <th><input type="checkbox" id="selectAll"></th>
                            <th>Name</th>
                            <th>Position</th>
                            <th>Office</th>

                        </tr>
                        </tfoot>
                    </table>
            </div>







        </div>
    </div>
</div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<script src="../../../library/Jquery/jquery.js"></script>-->
<script src="../../../public/js/ucscvideobay.js"></script>
<script src="../../../public/dataTable/js/jquery.dataTables.js"></script>
</body>
</html>
<?php
}else{
    echo "ILLEGAL ENTRYYYYY !!!!!!!!!!!!!!!!!!!!!!";
}

?>

<script>

    $(document).ready(function() {

        $('#example').DataTable( {



            "ajax": {
                "url": "../../models/fetch_manage_lessons.php",
                "dataSrc": ""
            },
            "columns": [
                { "data": "name" },
                { "data": "name" },
                { "data": "lecture" },
                { "data": "category" }

            ]
        } );


    } );
</script>










