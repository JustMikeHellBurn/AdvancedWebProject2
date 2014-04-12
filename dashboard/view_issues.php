<?php
    require('../html_resources/dashboard_header.php');

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//query the database for the incidents
	$result = mysqli_query($dbc,"SELECT id, title, submittedDate, priority FROM incidents ORDER BY id DESC;");
	
	echo '<table>';
	echo '<tr>';
	echo '<th>Incident ID</th><th>Title</th><th>Timestamp</th><th>Status</th><th>Assigned To</th><th>Priority</th>';
	echo '</tr>';
	//populate the incidents list
	while($row = mysqli_fetch_array($result))
	{		
		echo '<tr>';
		$incidentID = $row['id'];
		$title = $row['title'];
		$date = $row['submittedDate'];
		
		//get the most recent status and assignedToID, and assign it to the corresponding variable
		$assignedToUser = "";
		$status = "";
		$eventResult = mysqli_query($dbc,"	SELECT status, assignedToID FROM incidentEvents 
											WHERE incidentID=$incidentID ORDER BY id DESC LIMIT 1;");
		while($innerRow = mysqli_fetch_array($eventResult))	
		{
			$status = $innerRow['status'];
			$assignedToID = $innerRow['assignedToID'];
		}
		
		//if the issue was assigned, get the user associated with that ID
		if($assignedToID)
		{
			$eventResult = mysqli_query($dbc,"	SELECT username FROM users INNER JOIN incidentEvents 
										ON users.id = assignedToID
										WHERE incidentID=$incidentID AND assignedToID=$assignedToID ORDER BY incidentEvents.id DESC LIMIT 1;");
			while($innerRow = mysqli_fetch_array($eventResult))	
			{
				$assignedToUser = $innerRow['username'];
			}
		}
		
		$priority = $row['priority'];
		echo "<td><a href='edit_issue?id=$incidentID'>$incidentID</a></td><td><a href='edit_issue?id=$incidentID'>$title</a></td><td>$date</td><td>$status</td><td>$assignedToUser</td><td>$priority</td>";
		echo '</tr>';
	}
	echo '</table>';

    include('../html_resources/dashboard_footer.php');
?>
