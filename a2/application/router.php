<?php
function loadClass($classname) 
{

	$application = 'application/'.strtolower($classname).'.class.php';
	$models = 'application/models/'.strtolower($classname).'.class.php';
	$libs = 'application/libs/'.strtolower($classname).'.class.php';
    $controller = 'application/controllers/'.strtolower($classname).'.class.php';
    
	require_once $application;
	require_once $models;
	require_once $libs;
	require_once $controller;
}
spl_autoload_register('loadClass');

new Controller();

?>

