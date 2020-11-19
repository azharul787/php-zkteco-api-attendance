<!DOCTYPE html>
<html>
<head>
	<title>Access Database </title>
</head>
<body>
	<table border="1">
		<thead>
			<tr>
				<th>SL</th>
				<th>User Id</th>
				<th>BaseNumber</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Date</th>
				<th>Time</th>
			</tr>
		</thead>
		<thead>
			<?php 
				require 'local_db.php';
				//$mydate = date('Y-m-d');
				//$sql  = "SELECT * FROM CHECKINOUT";
				$sql  = "SELECT u.*,c.* FROM USERINFO u, CHECKINOUT  c  WHERE u.USERID = c.USERID";
				//$sql.= "AND CHECKINOUT.CHECKTIME = $mydate";

				$result = $db->query($sql);
				//print_r($result);
				$index = 1;
				while ($row = $result->fetch()) {
				    ?>
				  <tr>
				   		<td><?php echo $index++; ?></td>
				   		<td><?php echo $row["USERID"]; ?></td>
				   		<td><?php echo $row["Badgenumber"]; ?></td>
				   		<td><?php echo $row["Name"]; ?></td>
				   		<td><?php echo $row["CHECKTIME"]; ?></td>
				   		<td><?php echo date('h:i:s A',strtotime($row["CHECKTIME"])); ?></td>
				   </tr>
				<?php
					}
			 	?>
		</thead>
	</table>
</body>
</html>