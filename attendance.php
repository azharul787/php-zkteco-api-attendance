<!DOCTYPE html>
<html>
<head>
	<title>Access Database </title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<table>
		<thead>
			<tr>
				<th>SL</th>
				<th>USERID</th>
				<th>BaseNumber</th>
				<th>Name</th>
				<th>Phone</th>
				<th>Date</th>
				<th>Time</th>
				<th>DateTIME</th>
				<th>Delete 
					<button type="button" ><a href="all_delete.php">All</a></button>
				</th>
			</tr>
		</thead>
		<thead>
			<?php 
				date_default_timezone_set("Asia/Dhaka");
				require 'local_db.php';
				$mydate = date('Ymd');
				//echo $mydate;
				$sql  = "SELECT u.*,c.* FROM USERINFO u, CHECKINOUT  c  WHERE u.USERID = c.USERID ";
				$sql.= "AND  FORMAT(c.CHECKTIME,'yyyyMMdd') = $mydate";


				$result = $db->query($sql);
				//echo $result;
				//print_r($result->fetch());
				
				$index = 1;
				while ($row = $result->fetch()) {
				    ?>
				  <tr>
				   		<td><?php echo $index++; ?></td>
				   		<td><?php echo $row["USERID"]; ?></td>
				   		<td><?php echo $row["Badgenumber"]; ?></td>
				   		<td><?php echo $row["Name"]; ?></td>
				   		<td><?php echo $row["PAGER"]; ?></td>
				   		<td><?php echo date('d-m-Y',strtotime($row["CHECKTIME"])); ?></td>
				   		<td><?php echo date('h:i:s A',strtotime($row["CHECKTIME"])); ?></td>
				   		<td><?php echo $row["CHECKTIME"]; ?></td>
				   		<td>
				   			<button><a href="delete.php?id=<?php echo $row["USERID"]; ?>" >Delete</a></button>
				   		</td>
				   </tr>
				<?php
					}
			 	?>
		</thead>
	</table>
</body>
</html>