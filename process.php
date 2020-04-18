<?php
require_once("include/initialize.php");

$action = (isset($_GET['action']) && $_GET['action'] != '' ) ? $_GET['action'] : '' ;

switch ($action) {
	case 'register':
		doRegister();
		break;
	
	default:
		case 'login':
		doLogin();
		break;
}

function doRegister(){
	global $mydb;
	if (isset($_POST['btnRegister'])) { 
			$birthdate =  $_POST['year'].'-'.$_POST['month'].'-'.$_POST['day'];

			$age = date_diff(date_create($birthdate),date_create('today'))->y;

			if ($age < 20){
			message("Invalid age. 20 years old and above is allowed.", "error");
			redirect("index.php?q=register");

			}else{

			$autonum = New Autonumber();
			$auto = $autonum->set_autonumber('APPLICANT');
			 
			$applicant =New Applicants();
			$applicant->APPLICANTID = date('Y').$auto->AUTO;
			$applicant->FNAME = $_POST['FNAME'];
			$applicant->LNAME = $_POST['LNAME'];
			$applicant->MNAME = $_POST['MNAME'];
			$applicant->ADDRESS = $_POST['ADDRESS'];
			$applicant->SEX = $_POST['optionsRadios'];
			$applicant->CIVILSTATUS = $_POST['CIVILSTATUS'];
			$applicant->BIRTHDATE = $birthdate;
			$applicant->BIRTHPLACE = $_POST['BIRTHPLACE'];
			$applicant->AGE = $age;
			$applicant->USERNAME = $_POST['USERNAME'];
			$applicant->PASS = sha1($_POST['PASS']);
			$applicant->EMAILADDRESS = $_POST['EMAILADDRESS'];
			$applicant->CONTACTNO = $_POST['TELNO'];
			$applicant->DEGREE = $_POST['DEGREE'];
			$applicant->create();


 
			$autonum = New Autonumber();
			$autonum->auto_update('APPLICANT');


			message("You are successfully registered to the site. You can login now!","success");
			redirect("index.php?q=success");
			//header('Location:index.php?q=success');

			
	 }
}
}




// handles login
function doLogin(){
	
	$email = trim($_POST['USERNAME']);
	$upass  = trim($_POST['PASS']);
	$h_upass = sha1($upass);
 
  //it creates a new objects of member
    $applicant = new Applicants();
    //make use of the static function, and we passed to parameters
    $res = $applicant->applicantAuthentication($email, $h_upass);
    if ($res==true) { 

       	message("You are now successfully login!","success");
       
         redirect(web_root."applicant/");
     
    }else{
    	 echo "Account does not exist! Please contact Administrator."; 
    } 
}



?>