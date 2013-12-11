<?php
/**
 * Created by PhpStorm.
 * User: matt
 * Date: 12/9/13
 * Time: 5:22 PM
 */

require_once('models/blogModel.php');
require_once('models/viewModel.php');

$blog = new blogModel();
$view = new viewModel();

$view->getView("views/blogView.php");
$blog->getPosts();
