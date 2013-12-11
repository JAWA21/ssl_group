<?php
require_once('models/viewModel.php');
require_once('models/registerModel.php');

$view = new viewModel();
$reg = new registerModel();

if($queryMethod == 'loggedin') {
	$resultMsg = $reg->register($_POST['regName'], $_POST['regPass'], $_POST['regConfirm']);
	$view->getView("loggedin", $resultMsg);

}

switch (strtolower($queryMethod)) {
	case 'loggedin':
		//make sure $_POST has valid info
		if (isset($_POST['regName']) && isset($_POST['regPass']) && isset($_POST['regConfirm'])) {
			//pass user/pass to checklogin method - if returns true, successful login
			if ($register->register($_POST['regName'], $_POST['regPass'], $_POST['regConfirm'])) {
				$queryData="Login successful.";
				$view->getView('login');
			} else {
				//login was NOT successful, send back to login page
				$queryData="Login was not successful, try again.";
				$view->getView('signin');
			}
		} else {
			$queryData="Please enter Username and Password, and try again.";
			$view->getView('signin');
		}
		break;

	case 'signout':
		$login->signout();
		$view->getView('signout');
		break;

	default:	
		if (!isset($_SESSION['userid'])) {
			//if session userid is not set, then user is not logged in
			$view->getView('signin');
		} else {
			echo "user is signed in";
		}
}

