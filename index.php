<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 12/9/13
 * Time: 5:23 PM
 */ 

if(!session_id()){
	session_start();
}

//index.php - default routing page

	include "models/viewModel.php";
	include "models/blogController.php";

	$view = new viewModel();

	// ----- HEADER ----- \\
	$view->getView("header");


//set Action, Method, and Data passed through querystring
if (isset($_GET['action'])) {
	$queryAction=trim($_GET['action']);
} else {
	//an ACTION has not been returned (root of site)
	//set action to home page
	$queryAction="view";
	$queryMethod="home";
}
if (isset($_GET['method'])) {
	$queryMethod=trim($_GET['method']);
} else {
	if (!isset($queryMethod)){ $queryMethod=""; } 
}
if (isset($_GET['data'])) {
	$queryData=trim($_GET['data']);
} else {
	$queryData="";
}

if (file_exists("controllers/".$queryAction."Controller.php")) {
	include("controllers/".$queryAction."Controller.php");
} else {
	//controller page does not exist, return 404
	include('404.php');
}

// ----- FOOTER ----- \\
$view->getView("footer");
