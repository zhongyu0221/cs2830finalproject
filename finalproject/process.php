<?php

$action = empty($_POST['action']) ? false : $_POST['action'];

switch ($action) {
	case 'login':
		$username = empty($_POST['username']) ? '' : $_POST['username'];
		$password = empty($_POST['password']) ? '' : $_POST['password'];
        
		if ($username=='zhongyu' && $password=='pass') {
			setcookie('userid', $username);
			$response = 'Welcome Back! Zhongyu';
		}
		else {
			$response = 'Invalid Username or Password';
		}
        
        
		print $response;
		break;
        
	case 'get':
		$userid = empty($_COOKIE['userid']) ? '' : $_COOKIE['userid'];
		if ($userid=='zhongyu') {
			$response = 'This is a  web for CS2830 final project';
		}
		else {
			$response = "Either there is no content for your userid or you are not logged in.";
		}
		print $response;
		break;
        
        
	case 'logout':
		setcookie('userid', '', 1);
        $response = 'Logged out';
        print $response;
		break;
}
?>
