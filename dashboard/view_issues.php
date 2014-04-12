<?php
<<<<<<< HEAD
    include('../html_resources/dashboard_header.php');
?>
<?php
	
	//setup connection to the database
	$host 		= "localhost"; 		// Host name 
	$username 	= "michaelb_admin"; 	// MySQL username 
	$password 	= "demo1234"; 		// MySQL password 
	$db_name 	= "michaelb_comp2068project2"; 	// Database name 
=======
    require('../html_resources/dashboard_header.php');
>>>>>>> 476b482... Version 0.3

	//$table_name	= "COMP2068_Admin"; // Table name 
	//session_start();
	// Connect to the server and select database.
	//mysqli_select_db($dbc, "$db_name")or die("Error selecting database!");

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

<<<<<<< HEAD
	//query the database for the business contacts
	$result = mysqli_query($dbc,"SELECT * FROM incidents INNER JOIN incidentEvents GROUP BY incidentID;");
=======
	//query the database for the incidents
	$result = mysqli_query($dbc,"SELECT * FROM incidents;");
>>>>>>> 476b482... Version 0.3
	
	echo '<table>';
	echo '<tr>';
	echo '<th>Incident ID</th><th>Title</th><th>Timestamp</th><th>Status</th><th>Assigned To</th><th>Priority</th>';
	echo '</tr>';
	//populate the business contacts list
	while($row = mysqli_fetch_array($result))
	{		
		echo '<tr>';
		$incidentID = $row['id'];
		$title = $row['title'];
		$date = $row['submittedDate'];
		//get the most recent status and assignedToUser, and assign it to the corresponding variable
		$eventResult = mysqli_query($dbc,"	SELECT status, username as assignedToUser FROM incidentEvents INNER JOIN users
											WHERE incidentEvents.assignedToID = users.id AND incidentID=1 ORDER BY incidentEvents.id DESC LIMIT 1");
		while($innerRow = mysqli_fetch_array($eventResult))	
		{
			$status = $innerRow['status'];
			$assignedToUser = $innerRow['assignedToUser'];
		}	
	
		$priority = $row['priority'];
<<<<<<< HEAD
		echo "<td><a href='edit_issue.php?id=$incidentID'>$incidentID</a></td><td><a href='edit_issue.php?id=$incidentID'>$title</a></td><td>$date</td><td>$status</td><td>$priority</td>";
=======
		echo "<td><a href='edit_issue?id=$incidentID'>$incidentID</a></td><td><a href='edit_issue?id=$incidentID'>$title</a></td><td>$date</td><td>$status</td><td>$assignedToUser</td><td>$priority</td>";
>>>>>>> 476b482... Version 0.3
		echo '</tr>';
	}
	echo '</table>';

    include('../html_resources/dashboard_footer.php');
?>
