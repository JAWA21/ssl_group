<?php
require_once('models/viewModel.php');
require_once('models/registerModel.php');

$view = new viewModel();
$reg = new registerModel();

if($queryMethod == 'loggedin') {

	$resultMsg = $reg->loggedin($queryData);
	$view->getView("loggedin", $resultMsg);

}

