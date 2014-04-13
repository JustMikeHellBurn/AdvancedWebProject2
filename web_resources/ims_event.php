<?php
/*
	Title:				Incident Tracker
	Authors' Names: 	Justin Hellsten	http://advanceweb.justinhellsten.com/project2/
						Michael Burnie 	http://comp2068.michaelburnie.com/project2/
	File Name: 			ims_event.php
	Description:		This page creates an individual event once data is posted from edit_issue.php.
						The data is also validated prior to it being entered into the database.
	Last Modified Date:	2014/04/12
*/
	//get the incident ID from the query string
	$incidentID = $_GET['id'];
	require('../html_resources/dashboard_header.php');

	//set a goto location, for use later. This location returns the user to the incident
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
		
        // Enter comment if validation confirmed. If there is a user assigned to the ticket, add that information as well
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
		
		//If the ticket has been finally closed, enter the resolution into the incidents table
		foreach ($end_status_types as $val)
		{
			if($status == $val)
			{
				$sql = "UPDATE incidents SET resolution='".$comment."' WHERE id=".$incidentID.";";
				$result = mysqli_query($dbc, $sql);
			}
		}
		
		header($location);	//return to the ticket	
	}
	
	mysqli_close($dbc);//close the database connection
?>
