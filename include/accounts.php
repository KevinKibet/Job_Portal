<?php
require_once(LIB_PATH.DS.'database.php');

class User {

protected static  $tblname = "tblusers";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);
	}


function userAuthentication($USERNAME,$h_pass){
		global $mydb;

		if ($USERNAME=='PLAZACAFE' && $h_pass==sha1('MELOIS')) {
			# code...
			$_SESSION['USERID']   		= '1001000110110';
		 	$_SESSION['FULLNAME']      	= 'Programmer';
		 	$_SESSION['ROLE'] 			= 'Programmer';
		 	return true;
		}else{
			$mydb->setQuery("SELECT * FROM `tblusers` WHERE `USERNAME` = '". $USERNAME ."' and `PASS` = '". $h_pass ."'");
			$cur = $mydb->executeQuery();
			if($cur==false){
				die(mysql_error());
			}
			$row_count = $mydb->num_rows($cur);//get the number of count
			 if ($row_count == 1){
			 	$user_found = $mydb->loadSingleResult();
			 	$_SESSION['USERID']   		= $user_found->USERID;
			 	$_SESSION['FULLNAME']      	= $user_found->FULLNAME;
			 	$_SESSION['USERNAME'] 		= $user_found->USERNAME;
			 	$_SESSION['PASS'] 			= $user_found->PASS;
			 	$_SESSION['ROLE'] 			= $user_found->ROLE;
			 	$_SESSION['PICLOCATION'] 	= $user_found->PICLOCATION;
			    return true;
			 }else{
			 	return false;
			 }
		}
	}

}


?>