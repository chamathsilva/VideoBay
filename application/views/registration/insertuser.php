<?php
  
require_once '/../../configs/core/init.php';
function insertUser($datalist=array()){
	
				$First_Name = $datalist[0] ;
				$Last_Name  =$datalist[1];
				$User_Name =$datalist[2];
				$E_mail   =$datalist[3];
				$Password  =$datalist[4];
				$usertype =$datalist[5];
				
		
	$user=new User();
			
			$salt = Hash::salt(32);
			
			try{
				$user->create(array(
				'First_Name'=>$First_Name,
				'Last_Name'=>$Last_Name,
				'User_Name'=>$User_Name,
				'E_mail'=>$E_mail,
				'Password'=>Hash::make(Input::get($Password),$salt),
				'group'=>$usertype,
				'salt'=>$salt
				
				
				));
				
				
				
			}catch(Exception $e){
				die($e->getMessage());
			
			}
	}


?>