<<<<<<< HEAD
<html>

<head>

	<title>Example</title>

	<style type="text/css">


		#left,
		#right {
			height: 100%;
			min-height: 100%;
		}
		#wrapper {
			margin: 0 auto; overflow: hidden; width: 960px; // width optional }
		#left {
			background: yellow; float: left; width: 360px; // width optional but recommended }
		#right {
			background: grey;
			margin-left: 360px;
		// must agree with previous width }
	</style>
</head>


<body>
<div id="wrapper">
	<div id="left">
		Left
	</div>

	<div id="right"></div>
</div>
</body>

</html>
=======
<!DOCTYPE html> 
<html>  
	<head>
		
		
		
		<?php include('../includes/docs.php');?>
		
		
 
	
	</head>
	<body>
			<?php include ('../User/user_header.php');?>
			 
			
			
		<div class= "container-fluid" style="padding-top:0px" >
			
				
					<div class="col-md-12" >
						<?php include ('../User/videoname.php');?>
					</div>
					
					<div class="col-md-6">
					<div class="inner1">
						<div class="embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="Aruba_ 19 Miles of Happiness - 4K.mp4" width = "300px" height ="400px" autoplay ="false"> </iframe>
						</div>
					</div>
					</div>	
					<div class="col-md-6 col-xs-12">
						<div class="inner3">
							
						</div>
					</div>
			
			
			
			<div class ="col-md-12">				
				<?php include ('../User/slides_navigator.php');?>
			</div>
			<div class ="col-md-6">
				<?php include ('../User/comments.php');?>
			</div>
		
			<div class ="col-md-6">
				<?php include ('../User/recommendations.php');?>
			</div>
			</div>
			
			<?php include('../includes/js.php');?>
			<?php include ('../includes/footer.php');?>
	</body>
	</html>
>>>>>>> master
