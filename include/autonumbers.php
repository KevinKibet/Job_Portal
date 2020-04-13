<?php
require_once(LIB_PATH.DS.'database.php');

class Autonumber{


	protected static  $tblname = "tblautonumbers";

	function dbfields () {
		global $mydb;
		return $mydb->getfieldsononetable(self::$tblname);

	}


	public function auto_update($id="") {
	  global $mydb;
		$sql = "UPDATE ".self::$tblname." SET ";
		$sql .= "AutoEnd = AutoEnd + AutoInc";
		$sql .= " WHERE AUTOKEY='{$id}'";
	  $mydb->setQuery($sql);
	 	if(!$mydb->executeQuery())  return false; 	
		
	}



	function set_autonumber($Autokey){
			global $mydb;
			$mydb->setQuery("SELECT concat(`AUTOSTART`, `AUTOEND`) AS 'AUTO' FROM ".self::$tblname." 
				Where AUTOKEY= '{$Autokey}' LIMIT 1");
			$cur = $mydb->loadSingleResult();
			return $cur;
	} 
}




?>