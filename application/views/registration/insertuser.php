<?php
  
require_once '/../../configs/core/init.php';
function insertUser($datalist=array()){
	$flag=0;
				$First_Name = $datalist[0] ;
				$Last_Name  =$datalist[1];
				$User_Name =$datalist[2];
				$E_mail   =$datalist[3];
				$Password  =$datalist[4];
				$usertype =$datalist[5];
		
	if ($usertype==4){
					
					$flag=5;
					
					
					//return $flag;
					
					}
					
	else if($usertype==3){
		
					$flag=5;
					
					//return $flag;
					
		
		}
		
	else {
		
			$flag=2;
			
			//return $flag;
				}
				
				
	//return $flag;
	
	
	//}

//function insertUser($datalist=array()){
	
	
				
	

	if($flag==5){	
				
		
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
	else if ($flag==2){
		//echo "error";
		}

//}
}


?>