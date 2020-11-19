
<?php 
	// set local date time zone
	date_default_timezone_set("Asia/Dhaka");
	require 'local_db.php';
	$mydate = date('Ymd');
	$sql  = "SELECT u.Badgenumber as ID,c.CHECKTIME as date_time FROM USERINFO u, CHECKINOUT c  WHERE u.USERID = c.USERID AND FORMAT(c.CHECKTIME,'yyyyMMdd') = $mydate";

	$result = $db->query($sql);
	//print_r($result);
	$response = array();
	   
	while($row = $result->fetch()){
			$response[] = $row;
		}
	echo json_encode($response);

?>
