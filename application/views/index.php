<?php
<<<<<<< HEAD
include("../models/config.inc.php");

$results = mysqli_query($connecDB,"SELECT COUNT(*) FROM lesson");
$get_total_rows = mysqli_fetch_array($results); //total records

//break total records into pages
$pages = ceil($get_total_rows[0]/$item_per_page);

?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>UCSC VideoBay</title>


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="../../library/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../library/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="../../public/css/form-elements.css">
        <link rel="stylesheet" href="../../public/css/ucscvideobay.css">

         <!-- Color Box -->
        <!--<link rel="stylesheet" href="../../public/css/colorbox.css" />-->
    </head>
    <body>
    <div class="wrapper" >
        <?php include 'includes/navbar.php' ?>
        <!-- Top content -->
        <div class="top-content">
            <div class="inner-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-7 text ">
                            <h1><strong>UCSC VideoBay</strong></h1>
                            <div class="description">
                                <p>
UCSS VideoBay is a web based system which creates a learning environment for the students and lecturers and it also creates a virtual bridge to link students and lectures. 
  
                                </p>

                                <!--<button class="show-video" href="http://www.youtube.com/embed/VOJyrQa_WR4?rel=0&amp;wmode=transparent">Watch the Video</button>-->
                                <button class="show-video" href="../../data/IEEE-R10-Video-trailler.mp4">Watch the Video</button>

                              
                            </div>
                        </div>

                        <div class="col-sm-5 form-box2">
                            <?php include 'includes/loginform.php' ?>
                        </div>
                        </div>
                    </div>

                    <!--end of the basic page -->
                  

                </div>
            </div>
<!--
  <div class="container-fluid">
      <div class="container-scroll">
          <div class="Middle">
              <div class="container">
                  <div class="col-lg-12 text2">
                    <h1 >Lesson Gallery</h1>
                  </div>
                  <div id="results"></div>
                  <div class="pagination"></div>
              </div>
          </div>
      </div>
  </div>
  -->


        <div class="container">
            <div class="row row-centered">
                <div class="col-md-12 text2">
                    <h1 >Lesson Gallery</h1>
                    <div id="results"></div>
                </div>
                <div class="col-md-12 " style="text-align: center">
                    <div class="pagination" ></div>
                </div>
            </div>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <script src="../../public/js/ucscvideobay.js"></script>
        <!--<script src="../../public/js/jquery.colorbox.js"></script>-->

        
        <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.0/jquery.validate.min.js"></script>
        <script src="../../public/js/validation.js"></script>


        <script type="text/javascript" src="../../public/js/jquery.bootpag.min.js"></script>


        <script type="text/javascript">
            $(document).ready(function() {
                $("#results").load("../models/fetch_pages.php");  //initial page number to load
                $(".pagination").bootpag({
                    total: <?php echo $pages; ?>,
                    page: 1,
                    maxVisible: 5
                }).on("page", function(e, num){
                    e.preventDefault();
                    $("#results").prepend('<div class="loading-indication"><img src="ajax-loader.gif" /> Loading...</div>');
                    $("#results").load("../models/fetch_pages.php", {'page':num});
                });

            });
        </script>



<footer class="footer"> 
    <div class="container text-center">
        <h5>Copyright &copy; UCSC VideoBay 2015</h5>
        <p class="orga">Developed by Group-21</p>
    </div>
</footer>
        </div>


    </body>
</html>
=======
require_once '../configs/core/init.php';

if(Input::exists()){
	if(Token::check(Input::get('token'))){
		$validate= new Validate();
		$validation=$validate->check($_POST,array(
			'User_Name'=>array('required'=>true),
			'Password'=>array('required'=>true)
					
			));
		
		if($validation->passed()){
			$user=new User();
			
			$remember = (Input::get('remember')==='on') ? true : false;
			
			$login=$user->login(Input::get('User_Name'),Input::get('Password'),$remember);
			
			if($login){
				redirect::to('index.php');
				}else{
					echo '<p> Sorry logging in failed.</p>';
					}
		}else{
			foreach($validation->errors() as $error){
				echo $error,'<br>';
				
				}
				
				}
		}
	}

?>




<form action="" method="post">
	<div class="field">
    	<lable for="User_Name">Username</lable>
        <input type="text" name="User_Nssame" id="User_Name" autocomplete="off"  >
        
    </div>
    
    <div class="field">
    	<lable for="Password">Password</lable>
        <input type="password" name="Password" id="Password" autocomplete="off"  >
        
    </div>
    
    <div class="field">
    	<lable for = "remember">
        	<input type ="checkbox" name="remember" id="remember" /> Remember </label>
    </div>
    
    <input type="hidden" name="token" value="<?php echo Token::generate();?>" >
    <input type="submit" value="Log in" >
    
</form>
    
        
    
    

<?php

if(Session::exists('home')){
	
	echo '<p>' . Session::flash('home') . '</p>';
	}
	
$user =new User();
if($user->isLoggedIn()){
	$name =  escape($user->data()->User_Name);	
	
	

	if($user->hasPermission('admin')){
		redirect::to('user/adminhome.php?name='.$name);
		}else{
			redirect::to('user/userhome.php?name='.$name);

			}

	}
	else{
		?>
		
		

 <?php
		echo '<p>You need to <a href="user/register.php">register</a></p';
		}
		?>


	
>>>>>>> master
