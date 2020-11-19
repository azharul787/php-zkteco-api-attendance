<?php 
	require 'local_db.php';
	$sql  = $db->query("DELETE FROM CHECKINOUT");
	if($sql){
		header("Location:attendance.php");
	}
?>