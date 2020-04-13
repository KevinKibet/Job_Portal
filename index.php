<?php 
require_once("include/initialize.php"); 
$content='home.php';
$view = (isset($_GET['q']) && $_GET['q'] != '') ? $_GET['q'] : '';
switch ($view) { 
	
	case 'success' :
        $title="Success";	
		$content='success.php';		
		break;
	case 'Register' :
        $title="Register New Member";	
		$content='register.php';		
		break;
					
	default :
	    $active_home='active';
	    $title="Home";	
		$content ='home.php';		
}
require_once("templates/templates.php");
?>