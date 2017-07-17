<?php

// DB connection
require 'db/connect.php';

// why use this trick?
define('DEFAULT_ROUTE', 'login');

// set file names(pathes)
$route = (string) isset($_REQUEST['r']) ? $_REQUEST['r'] : DEFAULT_ROUTE;
$scriptFilename = 'inc' . DIRECTORY_SEPARATOR . $route . '.php';
$viewFilename = 'view' . DIRECTORY_SEPARATOR . $route . '.phtml';

// check if files exists
if (!file_exists($scriptFilename) || !file_exists($viewFilename)) {
    $route = DEFAULT_ROUTE;
}

// declare var for transfer data from UI to View
$view = array();

// Why use require VS include
require $scriptFilename; //find voulnerability in this code
require_once 'view/header.phtml';
require $viewFilename; //find voulnerability in this code
require_once 'view/footer.phtml';