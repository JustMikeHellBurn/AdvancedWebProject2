<?php
	
	//setup connection to the database
	$host 		= "localhost"; 		// Host name 
	$username 	= "michaelb_admin"; 	// MySQL username 
	$password 	= "demo1234"; 		// MySQL password 
	$db_name 	= "michaelb_comp2068project2"; 	// Database name 
	//$table_name	= "COMP2068_Admin"; // Table name 
	//session_start();
	// Connect to the server and select database.
	$con = mysqli_connect("$host", "$username", "$password")or die("Cannot connect to database!"); 
	mysqli_select_db($con, "$db_name")or die("Error selecting database!");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//query the database for the business contacts
	$result = mysqli_query($con,"SELECT * FROM incidents INNER JOIN incidentEvents GROUP BY incidentID;");
	
	echo '<table>';
	echo '<tr>';
	echo '<th>Incident ID</th><th>Title</th><th>Timestamp</th><th>Status</th><th>Priority</th>';
	echo '</tr>';
	//populate the business contacts list
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr>';
		$incidentID = $row['incidentID'];
		$title = $row['title'];
		$date = $row['submittedDate'];
		$status = $row['status'];
		$priority = $row['priority'];
		echo "<td><a href='#'>$incidentID</a></td><td>$title</td><td>$date</td><td>$status</td><td>$priority</td>";
		echo '</tr>';
	}
	echo '</table>';
?>