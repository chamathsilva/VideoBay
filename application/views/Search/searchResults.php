
<?php
require_once '../../configs/core/init.php';


?>
<html>
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

<?php
include '../../views/includes/navbar_user.php'
?>
<div class="container">
    <div class="mid">
       

<!-- new function -->
<h1 align="center"> SEARCH RESULTS</h1>



            <div class="wrapper" >

                <div class="container">
                    <div class="row">


                        <div class="col-sm-7 text ">

                            



<?php

$keyWord = $_POST['search'];

if(empty($keyWord)) {

	 echo "Enter a keyword";
}

else {
	
	$db = DB::getInstance();
	$data =$db->Search($keyWord);

	while($row = $data->fetch(PDO::FETCH_ASSOC)) {
				echo $row['name']." <br>" ;
	}
	
	
	


}






?>

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
</body>
</html>


</body>
</html>
