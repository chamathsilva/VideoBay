<?php 
session_start();

$GLOBALS['config'] = array(
'mysql' =>array(
	'host'=> 'localhost',// 
	'User_Name'=>'root',
	'Password' => 'root', //
	'db'=> 'database_user'
	),
'remember' => array(
	'cookie_name' =>'hash',
	'cookie_expiry'=> 604800
	),
'session' => array(
	'session_name' => 'user',
	'token_name'=>'token'
	)

);

//spl_autoload_register(function($class){
//	require_once 'classes/' . $class . '.php';
//});

spl_autoload_register(function($classname){
//function autoloadModel($classname){
	
	$filename ='../models/' . $classname .'.php';
	if(file_exists($filename)){
		require $filename;
		}
	});
spl_autoload_register(function($classname11){
//function autoloadModel($classname){
	
	$filename11 ='../controllers/' . $classname11 .'.php';
	if(file_exists($filename11)){
		require $filename11;
		}
	});
spl_autoload_register(function($classname1){
//function autoloadModel($classname){
	
	$filename1 ='../../models/' . $classname1 .'.php';
	if(file_exists($filename1)){
		require $filename1;
		}
	});
spl_autoload_register(function($classname2){	
//function autoloadController($classname){
	$filename2= '../../controllers/' . $classname2 . '.php';
	
	if(file_exists($filename2)){
		require $filename2;
		}
	});
spl_autoload_register(function($classname3){
	$filename3='../views/' . $classname3 . 'php';
	if(file_exists($filename3)){
		require $filename3;
		}
	});
	
//spl_autoload_register("autoloadModel");
//spl_autoload_register("autoloadController");
	
	
//fix path error by chamath
if(file_exists('../controllers/functions/sanitize.php')){
	require_once '../controllers/functions/sanitize.php';
}else{
	require_once '../../controllers/functions/sanitize.php';
}




if(cookie::exists(config::get('remember/cookie_name')) && !Session::exists(config::get('session/session_name'))){
	
	$hash = cookie::get(config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_sessions',array('hash','=',$hash));
	
	if($hashCheck->count()){
		$user = new User($hashCheck->first()->users_id);
		$user->login();
		}
	}
 