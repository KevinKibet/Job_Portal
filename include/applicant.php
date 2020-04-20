<?php
require_once(LIB_PATH.DS.'database.php');
class Applicants{
protected static  $tblname = "tblapplicants";


function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);//rem in php functions are not case sensitive

	}

protected function attributes() { 
		// return an array of attribute names and their values
	  global $mydb;
	  $attributes = array();
	  foreach($this->dbfields() as $field) {
	    if(property_exists($this, $field)) {
			$attributes[$field] = $this->$field;
		}
	  }
	  return $attributes;
	}


protected function sanitized_attributes() {
	  global $mydb;
	  $clean_attributes = array();
	  // sanitize the values before submitting
	  // Note: does not alter the actual value of each attribute
	  foreach($this->attributes() as $key => $value){
	    $clean_attributes[$key] = $mydb->escape_value($value);
	  }
	  return $clean_attributes;
	}




public function create() {
		global $mydb;
		// Don't forget your SQL syntax and good habits:
		// - INSERT INTO table (key, key) VALUES ('value', 'value')
		// - single-quotes around all values
		// - escape all values to prevent SQL injection
		$attributes = $this->sanitized_attributes();
		$sql = "INSERT INTO ".self::$tblname." (";
		$sql .= join(", ", array_keys($attributes));
		$sql .= ") VALUES ('";
		$sql .= join("', '", array_values($attributes));
		$sql .= "')";
	echo $mydb->setQuery($sql);
	
	 if($mydb->executeQuery()) {
	    $this->id = $mydb->insert_id();
	    return true;
	  } else {
	    return false;
	  }
	}

//authentication during login
function applicantAuthentication($U_USERNAME,$h_pass){
		global $mydb;
		$mydb->setQuery("SELECT * FROM `tblapplicants` WHERE `USERNAME`='".$U_USERNAME."' AND `PASS`='".$h_pass."'");
		$cur = $mydb->executeQuery();
		if($cur==false){
			die(mysql_error());
		}
		$row_count = $mydb->num_rows($cur);//get the number of count
		 if ($row_count == 1){
		 $emp_found = $mydb->loadSingleResult(); 
		 	$_SESSION['APPLICANTID']   		= $emp_found->APPLICANTID; 
		 	$_SESSION['USERNAME'] 			= $emp_found->USERNAME;  
		   return true;
		 }else{
		 	return false;
		 }
	}
    

}

?>