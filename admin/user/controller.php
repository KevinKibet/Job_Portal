<?php

require_once("../../include/initialize.php");

$action = (isset($_GET['action']) && $_GET['action']!='') ? $_GET['action'] : '' ;


switch ($action ) {
	case 'add':
		doInsert();
		break;
	
    case 'edit':
		doEdit();
		break;


     case 'delete':
		doDelete();
		break;

	default:
		# code...
		break;
}





function doEdit(){
	if(isset($_POST['save'])){


			$user = New User(); 
			$user->FULLNAME 		= $_POST['U_NAME'];
			$user->USERNAME			= $_POST['U_USERNAME'];
			$user->PASS				=sha1($_POST['U_PASS']);
			$user->ROLE				= $_POST['U_ROLE'];
			$user->update($_POST['USERID']);

			


			if (isset($_GET['view'])) {
				# code...
				  message("Profile has been updated!", "success");
				redirect("index.php?view=view");
			}else{ 
				message("[". $_POST['U_NAME'] ."] has been updated!", "success");
				redirect("index.php");
			}
		}
	}





function doDelete(){
		
		
		$id = 	$_GET['id'];

	    $user = New User();
	 	$user->delete($id);
			 
		message("User has been deleted!","info");
		redirect('index.php');
	

		
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