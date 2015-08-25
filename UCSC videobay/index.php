<?php 
# Start Session:

session_start();

?>

<?php

	if($_POST){
		$q = "SELECT * FROM users WHERE email = '$_POST[email]' AND password = '$_POST[password]'";
		$r = mysqli_query($dbc, $q);
		$num = mysqli_num_rows($r);
		
		if ($num == 1){
			$_SESSION['username'] = $_POST['email'];
			$data = mysqli_fetch_assoc($r);
			$user_type =  $data['user_type'];
			if($user_type==0){
				header('location: admin/index.php');
			}
			else{
				header('location: front/user_home.php');
			}	
		}
		else{
			echo "User name or password invalid";
		}
	} 

?>

<!DOCTYPE html>
<html>  
	<head>
		
		
		
		<?php include('config/docs.php');?>
		
	
		

	</head>
	<body>
		<?php include ('template/User/home_header.php'); ?>
		
	
		<section class="hero">
			<div class="container-fluid">
			<div class="row">
  				
				<div class="col-md-6">
  					<div class="inner2">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="Aruba_ 19 Miles of Happiness - 4K.mp4" width = "300px" height ="400px" autoplay ="false"> </iframe>
						</div>
					</div>
  				</div>
  				
				<div class="col-md-6 col-xs-12">
  					<div class="inner" width = "300px" height ="400px" ><br>
  						<?php echo 'The difference between school and life? In school, you’re taught a lesson and then given a test. In life, you’re given a test that teaches you a lessons.<br><div class = "pull-right>"<br> -<i>Tom Bodett</></ i><br>'; ?>
						<br>
						<br>
  						<a class="btn btn-large btn-success" data-toggle="modal" data-target="#register"><strong>Register </strong><br> Now</a>
					</div>
						 <?php include('template/Interfaces/registration.php');?>
				</div>
			</div>
			</div>
			
			<div class ="col-md-12">
				<?php include ('template/User/slidesnavigator.php');?>
			</div>
		</section>
		
		
		<?php include ('template/User/footer.php'); ?>
		
		<?php include('config/js.php');?>
		
	</body>
	

	
	
	
</html>