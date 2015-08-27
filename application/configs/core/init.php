<?php 
session_start();

$GLOBALS['config'] = array(
'mysql' =>array(
	'host'=> '127.0.0.1',
	'User_Name'=>'root',
	'Password' => '',
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
spl_autoload_register(function($classname){	
//function autoloadController($classname){
	$filename= '../controllers/' . $classname . '.php';
	
	if(file_exists($filename)){
		require $filename;
		}
	});
	
//spl_autoload_register("autoloadModel");
//spl_autoload_register("autoloadController");
	
	

require_once '/../../controllers/functions/sanitize.php';

if(cookie::exists(config::get('remember/cookie_name')) && !Session::exists(config::get('session/session_name'))){
	
	$hash = cookie::get(config::get('remember/cookie_name'));
	$hashCheck = DB::getInstance()->get('users_sessions',array('hash','=',$hash));
	
	if($hashCheck->count()){
		$user = new User($hashCheck->first()->users_id);
		$user->login();
		}
	}
 