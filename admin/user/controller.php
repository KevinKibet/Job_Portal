<?php

require_once("../../include/initialize.php");

$action = (isset($_GET['action']) && $_GET['action']!='') ? $_GET['action'] : '' ;


switch ($action ) {
	case 'add':
		doInsert();
		break;
	
	default:
		# code...
		break;
}







function doInsert(){
		if(isset($_POST['save'])){


		if ($_POST['U_NAME'] == "" OR $_POST['U_USERNAME'] == "" OR $_POST['U_PASS'] == "") {
			$messageStats = false;
			message("All field is required!","error");
			redirect('index.php?view=add');
		}else{	
			$user = New User();
			$user->USERID 			= $_POST['user_id'];
			$user->FULLNAME 		= $_POST['U_NAME'];
			$user->USERNAME			= $_POST['U_USERNAME'];
			$user->PASS				=sha1($_POST['U_PASS']);
			$user->ROLE				=  $_POST['U_ROLE'];
			$user->create();

						$autonum = New Autonumber(); 
						$autonum->auto_update('userid');

			message("The account [". $_POST['U_NAME'] ."] created successfully!", "success");
			redirect("index.php");
			
		}
		}

	}




?>