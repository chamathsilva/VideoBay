<?php
require_once '../configs/core/init.php';

if(Input::exists()){
	if(Token::check(Input::get('token'))){
		
		
		//if($validation->passed()){
			$user=new User();
			
			$salt = Hash::salt(32);
			
			try{
				$user->create(array(
				'First_Name'=>Input::get('First_Name'),
				'Last_Name'=>Input::get('Last_Name'),
				'User_Name'=>Input::get('User_Name'),
				'E_mail'=>Input::get('E_mail'),
				'Password'=>Hash::make(Input::get('Password'),$salt),
				'group'=>1,
				'salt'=>$salt
				
				
				));
				
				Session::flash('home','You have been registered and can now log in!');
				redirect::to('index.php');
				
			}catch(Exception $e){
				die($e->getMessage());
			
			}
			}else{
                echo 'Error';
                Die();
					
			}
	}
	//}

?>

      <div class="form-top">
                                <div class="form-top-left">
                                    <h3>Sign up now</h3>
                                    <p>Fill in the form below to get instant access:</p>
                                </div>
                                <div class="form-top-right">
                                    <i class="fa fa-pencil"></i>
                                </div>
                            </div>
                            <div class="form-bottom">
                                <form id = "register-form" role="form" action="" method="post" class="registration-form">

                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">First name</label>
                                        <input type="text" name="First_Name" id="First_Name" placeholder="First name..." class="form-first-name form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-last-name">Last name</label>
                                        <input type="text" name="Last_Name" id="Last_Name" placeholder="Last name..." class="form-last-name form-control" >
                                    </div>
                                    <div class="form-group">
                                        <label class="sr-only" for="form-first-name">User name</label>
                                        <input type="text" name="User_Name" id="User_Name" placeholder="User name..." class="form-first-name form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="text" name="E_mail" id="E_mail" placeholder="Email..." class="form-email form-control" >
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="password" name="Password" id="Password" placeholder="password..." class="form-email form-control" id="password">
                                    </div>

                                    <div class="form-group">
                                        <label class="sr-only" for="form-email">Email</label>
                                        <input type="password" name="password_again" id="password_again" placeholder="password again..." class="form-email form-control" >
                                    </div>
                                    <input type="hidden" name="token" value="<?php echo Token::generate();?>" >

                                   <div class="form-group">
                                        <label>
                                        <input id="terms" name="terms" type="checkbox">
                                            I have read,constat and agree ....
                                        </label>
                                    </div>
                                    <button type="submit" class="btn full">Sign up!</button>
                                </form>
                            </div>