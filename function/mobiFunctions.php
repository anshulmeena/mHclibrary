<?php 
function mobiAnnouncements(){
	require('../../includes/connections.php');
	$db = NewADOConnection($config['db_type']);
	$db->Connect($config['db_host'], $config['db_login'], $config['db_password'], $config['db_database']);
	
	//$start_date = date("y-m-d h:m:s");
	$start_date = "2011-11-11 00:05:00";
	//$end_date = date("y-m-d h:m:s");
	$end_date = date("y-m-d h:m:s");
	
	$query = "Select * from announcements where start_date >= '$start_date'";
	
	$result = $db->Execute($query);
	
	//$return_string;
	
	//foreach($result as $row){
		//$return_string = $row["title"]."<br />";
		//$return_string .=$row["body"]."<br />";
	//}
	
	return $result;
}
?>