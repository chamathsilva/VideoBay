<?php
require_once '../configs/core/init.php';

if(Input::exists()){
	if(Token::check(Input::get('token'))){
		//$validate= new Validate();
		//$validation=$validate->check($_POST,array(
			//'User_Name'=>array('required'=>true),
			//'Password'=>array('required'=>true)
					
			//));
		
		//if($validation->passed()){
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
	//}

?>
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
	
		?>
		
		

 

	


          <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Please sign in</h3>
                                    <p>Fill in the form below to get instant access:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-sign-in"></i>
                                </div>
                            </div>
                            <div id = "sign-up-form"class="form-bottom">
                                <form id = "login-form" role="form" action="" method="post" class="login-form">

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">User name</label>
                                        <input type="text" name="User_Name" id="User_Name" placeholder="User name" class="form-first-name form-control" id="form-first-name">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-last-name">Password</label>
                                        <input type="text" name="Password" id="Password" placeholder="Password" class="form-last-name form-control" id="form-last-name">
                                    </div>

                                    <div class="row">
                                        <div class="col-xs-3 col-sm-4">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" name="remember" id="remember"> Remember me
                                                </label>
                                             </div>
                                        </div>
                                         <div class="col-xs-8 col-sm-6 text-left">
                                                <p class="help-block">( if this is a private computer )</p> 
                                        </div>
                                        
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo Token::generate();?>" >

                                    <div class="row">
                                        <div class="col-xs-6">
                                           <button type="submit" class="btn full">Sign in!</button>
                                        </div>
                                         <div class="col-xs-6 ">
                                         	
                                            <button id = "registration" class="btn full ">Sign up now!</button>
                                        </div>
                                    </div>
                                </form>
                            </div>