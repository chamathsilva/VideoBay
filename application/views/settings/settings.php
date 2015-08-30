<!DOCTYPE html> 
<html>  
	<head>
		
		<?php include('../includes/docs.php');?>
	
	</head>
	
	<body>
			<?php include ('../user/user_header.php');?>
			
		<div class="row">
			<div class= "container-fluid col-md-offset-8">
				<?php include ('../user/Advertisements.php'); ?>
		
			</div>
			<div class= "container-fluid">
	
						<strong><h3>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<u>GENERAL ACCOUNT SETTINGS</u></h3></strong>
						
					<div class="jumbotron-fluid col-md-offset-1	col-md-7 col-sm-offset-2 col-sm-8 col-xs-offset-3 col-xs-7">
											<br>
											<br>
						<div class="panel-group" id="accordion">
							
							<div class="panel panel-primary">
							  <div class="panel-heading">
								<h3 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#name">Update Name</a>
								</h3>
							  </div>
							  <div id="name" class="panel-collapse collapse">
								<div class="panel-body">
									 <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="fname">Update First Name </label>
									 <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
										
											<input type="text" class="form-control" id="Fname" placeholder="Enter First Name">
											<br>
										</div>
									<label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="lname">Update Last Name </label>
									 <div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
										
											<input type="text" class="form-control" id="Lname" placeholder="Enter Last Name">
											<br>
										</div>
										<button type="button" class="btn btn-primary col-sm-2 col-sm-offset-6 col-xs-11 " style="box-shadow: 2px 2px 10px grey">Confirm</button>
										<button type="button" class="btn btn-primary col-sm-2 col-sm-offset-1 col-xs-11 " style="box-shadow: 2px 2px 10px grey" >Cancel</button>
									
								</div>
							  </div>
							</div>
							
							<div class="panel panel-primary">
							  <div class="panel-heading">
								<h3 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#email">Change Email</a>
								</h3>
							  </div>
							  <div id="email" class="panel-collapse collapse">
								<div class="panel-body">
								
									 <label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="email1">Your current email address </label>
									 <label class="control-label col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1" style="font-weight:normal" for="password3">chamath@gmail.com </label>
									
									<label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="email2"><br>Enter your new email </label>
										<div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
										<br>
											<input type="email" class="form-control" id="email2" placeholder="New Email">
											<br>
										</div>
									<button type="button" class="btn btn-primary col-sm-2 col-sm-offset-6 col-xs-11 " style="box-shadow: 2px 2px 10px grey">Confirm</button>
									<button type="button" class="btn btn-primary col-sm-2 col-sm-offset-1 col-xs-11 " style="box-shadow: 2px 2px 10px grey" >Cancel</button>
								</div>
							</div>
							</div>
							
							<div class="panel panel-primary">
							  <div class="panel-heading">
								<h3 class="panel-title">
								  <a data-toggle="collapse" data-parent="#accordion" href="#password">Change password</a>
								</h3>
							  </div>
							  <div id="password" class="panel-collapse collapse">
								<div class="panel-body">	
									
										<label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="password1">Enter your current password </label>
										<div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
											<input type="password" class="form-control" id="psw1" placeholder="Enter Password">
											<br>
										</div>
											
										<label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="password2">Enter your new password </label>
										<div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
											<input type="password" class="form-control" id="psw2" placeholder="New Password">
											<br>
										</div>
										
										<label class="control-label col-sm-4 col-xs-11" style="font-weight:normal" for="password3">Confirm your new password  </label>
										<div class="col-sm-5 col-sm-offset-3 col-xs-9 col-xs-offset-1">
											<input type="password" class="form-control" id="psw3" placeholder="Re-enter password">
										<br>
										<br>
										</div>
										
										<button type="button" class="btn btn-primary col-sm-2 col-sm-offset-6 col-xs-11 " style="box-shadow: 2px 2px 10px grey">Confirm</button>
										<button type="button" class="btn btn-primary col-sm-2 col-sm-offset-1 col-xs-11 "  style="box-shadow: 2px 2px 10px grey" >Cancel</button>
								</div>
							  </div>
							</div>
						 
						</div> 
					</div>
									
			</div>
			
		</div>	
									
												
									
			
			
			
			
			 <?php include ('../includes/footer.php');?> 
			<?php include('../includes/js.php');?>
			
	
	</body>
	</html>