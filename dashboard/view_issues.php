<?php
/*
	Title:				Incident Tracker
	Authors' Names: 	Justin Hellsten	http://advanceweb.justinhellsten.com/project2/
						Michael Burnie 	http://comp2068.michaelburnie.com/project2/
	File Name: 			view_issues.php
	Description:		This is the primary page where users can see all of the incidents in the database in a formatted table.
						Users can select an incident to view or edit by clicking the ID or title of the corresponding incident.
						There is also a checkbox on this page that will hide all "Closed" incidents.
	Last Modified Date:	2014/04/12
*/
    require('../html_resources/dashboard_header.php');//get the header
?>
<h1>View Issues</h1>

<label>Show All Incidents</label>
<input type="checkbox" id="cbx-all-incidents"><label for="cbx-all-incidents"></label>

<table>
<tr>
<th>Incident ID</th><th>Title</th><th>Timestamp</th><th>Status</th><th>Assigned To</th><th>Priority</th>
</tr>
<?php

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}

	//query the database for the incidents
	$result = mysqli_query($dbc,"SELECT id, title, submittedDate, priority FROM incidents ORDER BY id DESC;");
	
	//populate the incidents list
	while($row = mysqli_fetch_array($result))
	{		
		
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
		
		//create each incident row in the table from the gathered data
		$priority = $row['priority'];
		echo '<tr class="row-status-'.$status.'">';
		echo "<td><a href='edit_issue?id=$incidentID'>$incidentID</a></td><td><a href='edit_issue?id=$incidentID'>$title</a></td><td>$date</td><td>$status</td><td>$assignedToUser</td><td>$priority</td>";
		echo '</tr>';
	}
?>
</table>

<script language="javascript" type="text/javascript">   

	//on load, hide closed tickets and uncheck the checkbox
	$(document).ready(function() 
	{
		$(".row-status-Closed").hide();
		$("#cbx-all-incidents").prop("checked",false);
	});	

	//if the checkbox is checked, unhide the closed tickets. Otherwise, hide them
	$("#cbx-all-incidents").click( function(){
		if($(this).prop("checked"))
		{
			$(".row-status-Closed").show();
		}
		else
		{
			$(".row-status-Closed").hide();
		};
	});
		
</script>
<?php
    require('../html_resources/dashboard_footer.php');//call the footer
?>
