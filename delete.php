<?php 
	require 'local_db.php';
	$id = $_GET['id'];
	$sql  = $db->query("DELETE FROM CHECKINOUT WHERE USERID = $id");
	if($sql){
		header("Location:attendance.php");
	}
?>