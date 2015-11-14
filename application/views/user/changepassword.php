<?php
require_once '../../configs/core/init.php';
$user =new User();
if(!$user->isLoggedIn()){
	redirect::to('../index.php');
	}
if(Input::exists()){
	if(Token::check(Input::get('token'))){
		$validate =new Validate();
		$validation =$validate->check($_POST,array(
			'password_current'=>array(
				'required'=>true,
				'min'=>6
				),
			'newpassword'=>array(
				'required'=>true,
				'min'=>6
			),
			'newpassword_again'=>array(
				'required'=>true,
				'min'=>6,
				'matches'=>'newpassword'
				)
		));
		
		if($validation->passed()){
			if(Hash::make(Input::get('password_current'),$user->data()->salt) !==$user->data()->Password){
				echo 'Your current password is wrong';
				
				}else{
					$salt = Hash::salt(32);
					$user->update(array(
						'Password'=>Hash::make(Input::get('newpassword'),$salt),
						'salt'=>$salt
					
					));
					Session::flash('home','Your password has been changed!');
					redirect::to('../index.php');
					}
				
			
			}else{
				foreach($validation->errors() as $error){
					echo $error,'<br>';
					}
				
				}
		
		}
	}
?>







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

        <div class="form-top">
            <div class="form-top-left">
                <h3> Details </h3>
                <p>Details about the Lesson</p>
            </div>
            <div class="form-top-right">
                <i class="fa fa-sign-in"></i>
            </div>
        </div>

        <div id = "addlessonsForm"class="form-bottom">

        <form action ="" method="post">
            <div class ="field">
                <label for ="password_current"> Current password</label>
                <input type="password" name="password_current" id="password_current">
            </div>

            <div class ="field">
                <label for ="newpassword"> Newpassword</label>
                <input type="password" name="newpassword" id="newpassword">
            </div>

            <div class ="field">
                <label for ="newpassword_again"> Newpassword again</label>
                <input type="password" name="newpassword_again" id="newpassword_again">
            </div>

            <input type="submit" value="change">
            <input type="hidden" name="token" value="<?php echo Token::generate();?>">
        </form>

    </div>
</div>

    </div>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
<!--<script src="../../../library/Jquery/jquery.js"></script>-->
<script src="../../../public/js/ucscvideobay.js"></script>
</body>
</html>