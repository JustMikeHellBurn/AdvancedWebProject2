<?php
	$incidentID = $_GET['id'];
	require('../html_resources/dashboard_header.php');

	$location = 'Location: ../dashboard/edit_issue?id='.$incidentID;

    // Create an event if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {	
        $status = trim(mysqli_real_escape_string($dbc, $_POST['status']));
		$assignedToUser = trim(mysqli_real_escape_string($dbc, $_POST['assignToUser']));
        $comment = trim(mysqli_real_escape_string($dbc, $_POST['comment']));

		//get the user ID of the person who was assigned to the incident
		$sql = "SELECT id FROM users WHERE username='".$assignedToUser."'";
		$assignedToID = 0;
		$result = mysqli_query($dbc, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$assignedToID = $row['id'];
		}
		
		//get the user ID who created the event
		$sql = "SELECT id FROM users WHERE username='".$_SESSION['username']."'";
		$result = mysqli_query($dbc, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$userID = $row['id'];
		}

        // Validate Fields (Just in case hacker by passes jquery validation)
        // Stop Script if the fields are bad inputs

		/* Check Comment Field */
        if ($comment == null) {
			header($location);
        }
		
        // Enter comment if validation confirmed
		if($assignedToID != 0)
		{
			$sql = "INSERT INTO incidentEvents (incidentID, status, comment, assignedToID, changedByID) 
				VALUES (".$incidentID.", '".$status."', '".$comment."', ".$assignedToID.", ".$userID.");";
		}
		else
		{	
			$sql = "INSERT INTO incidentEvents (incidentID, status, comment, changedByID) 
				VALUES (".$incidentID.", '".$status."', '".$comment."', ".$userID.");";
		}
		$result = mysqli_query($dbc, $sql);
		
		header($location);		
	}
	
	mysqli_close($dbc);
?>
