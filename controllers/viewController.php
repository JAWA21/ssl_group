<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 12/9/13
 * Time: 5:22 PM
 */ 

require_once('models/viewModel.php');

$view = new viewModel(); 
$view->getView(strtolower($queryMethod));