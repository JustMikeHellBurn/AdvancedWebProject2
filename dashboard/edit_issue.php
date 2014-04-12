<?php 
	$incidentID = $_GET['id'];

    require('../html_resources/dashboard_header.php');

	if (mysqli_connect_errno())
	{
		echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	
	//get the most recent status and assignedToID, and assign it to the corresponding variable
	$eventResult = mysqli_query($dbc,"	SELECT status, assignedToID FROM incidentEvents 
										WHERE incidentID=$incidentID ORDER BY id DESC LIMIT 1;");
	while($row = mysqli_fetch_array($eventResult))	
	{
		$status = $row['status'];
		$assignedToID = $row['assignedToID'];
	}	
	
	//query the database for the incidents
	$result = mysqli_query($dbc,"	SELECT title, submittedDate, priority, description, resolution
									FROM incidents WHERE id=$incidentID;");
		
	//create the heading of the incident
	while($row = mysqli_fetch_array($result))
	{
		$title = $row['title'];
		$submittedDate = $row['submittedDate'];
		$priority = $row['priority'];
		$description = $row['description'];
		$resolution = $row['resolution'];
		
		echo 	'<h1>'.$title.'</h1>
				<table id="incident-details">
					<tr><td>Date Submitted:</td>	<td>'.$submittedDate.'</td></tr>
					<tr><td>Status:</td>			<td id="current-status">'.$status.'</td></tr>
					<tr><td>Priority:</td>			<td>'.$priority.'</td></tr>
					<tr><td>Description:</td>		<td>'.$description.'</td></tr>
					<tr id="row-resolution"><td>Resolution:</td>		<td>'.$resolution.'</td></tr>
				</table>';
	}
	
	//The user can create a new event from this form
	echo '<form id="newEventForm" action="../web_resources/ims_event?id='.$incidentID.'" method="POST">'
?>
		<h1>Create a new Event</h1>
		<div class="ei-input">
			<label>Assign To:</label>
			<select name="assignToUser">
			<option>(nobody)</option>
			<?php
				//query the database for the users
				$result = mysqli_query($dbc,"	SELECT id, username FROM users;");
					
				while($row = mysqli_fetch_array($result))
				{
					echo '<option';
					if($row['id'] == $assignedToID) echo ' selected';
					echo '>'.$row['username'].'</option>';
				}
			?>
			</select>
		</div>
		<div class="ei-input">
			<label>Status:</label>
			<select name="status" id="select-status">
				<?php
				foreach ($status_types as $val)
				{
					echo '<option';
					if($val == $status) echo ' selected';
					echo '>'.$val.'</option>';
				}
				?>
			</select>
		</div>
		<div class="ei-input">
			<textarea name="comment" id="textarea-comment" cols="50" placeholder="Enter a comment..."></textarea>
		</div>
		<input class="create-event-button" type="submit" value="Submit" />
    </form>
	
	<script src="../js/jquery-validation/jquery.js"></script>
	<script src="../js/jquery-validation/jquery.validate.js"></script>
	<script language="javascript" type="text/javascript">   

		$(document).ready(function() 
		{
			if($("#current-status").text() == "Closed" || $("#current-status").text() == "Resolved")
			{
				$("#newEventForm").hide();
				$("#row-resolution").show();
			}
			else
			{
				$("#newEventForm").show();
				$("#row-resolution").hide();
			}
		});
		
		// validate event form on keyup and submit
		$("#newEventForm").validate({
			rules: {
				comment: {
					required: true
				}
			},
			messages: {
				comment: {
					required: "Please enter your changes here",
				}
			}
		});
		
		$("#select-status").change(function() 
		{
			var selectedStatus = $("#select-status").find(":selected").text();
			if(selectedStatus == "Closed" || selectedStatus == "Resolved")
			{
				$("#textarea-comment").attr("placeholder","Enter a resolution to this incident...");
			}
		});
		
	</script>
<?php	
	//query the database for the incident events
	$result = mysqli_query($dbc,"	SELECT incidentEvents.id as id, status, comment, eventDate, username as changedByUser
									FROM incidentEvents INNER JOIN users 
									WHERE incidentEvents.changedByID=users.id
									AND incidentID=$incidentID 
									ORDER BY incidentEvents.id DESC");
		
	echo '<h1>Event List for Incident '. $incidentID .'</h1>';
	echo '<table>';
	echo '<tr>';
	echo '<th>Event ID</th><th>Status</th><th>Comment</th><th>Timestamp</th><th>Assigned to</th><th>Changed by</th>';
	echo '</tr>';
	
	//populate the incident events list
	while($row = mysqli_fetch_array($result))
	{
		echo '<tr>';
		$eventID = $row['id'];
		$status = $row['status'];
		$comment = $row['comment'];
		$timestamp = $row['eventDate'];
		$submittedByUser = $row['changedByUser'];
		$assignedToUser = "";
		$innerResult = mysqli_query($dbc,"	SELECT username as assignedToUser
								FROM incidentEvents INNER JOIN users 
								WHERE incidentEvents.assignedToID=users.id
								AND incidentEvents.id=$eventID");
		while($innerRow = mysqli_fetch_array($innerResult))
		{
			$assignedToUser = $innerRow['assignedToUser'];
		}
		echo '	<td>'.$eventID.'</td>
				<td>'.$status.'</td>
				<td>'.$comment.'</td>
				<td>'.$timestamp.'</td>
				<td>'.$assignedToUser.'</td>
				<td>'.$submittedByUser.'</td>';
		echo '</tr>';
	}
	echo '</table>';

    include('../html_resources/dashboard_footer.php');
?>
