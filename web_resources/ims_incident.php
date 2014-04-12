<?php
	require('../html_resources/dashboard_header.php');

	$returnLocation = 'Location: ../dashboard/create_issue';

    // Create an incident if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {	
        $title = trim(mysqli_real_escape_string($dbc, $_POST['title']));
		$description = trim(mysqli_real_escape_string($dbc, $_POST['desc']));
        $priority = trim(mysqli_real_escape_string($dbc, $_POST['priority']));
		
		//get the user ID who created the incident
		$sql = "SELECT id FROM users WHERE username='".$_SESSION['username']."'";
		$result = mysqli_query($dbc, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$userID = $row['id'];
		}

        // Validate Fields (Just in case hacker by passes jquery validation)
        // Stop Script if the fields are bad inputs

		/* Check all fields for nulls */
        if ($title == null OR $description == null) {
			header($returnLocation);
        }
		
        // Enter incident if validation confirmed
			
		$sql = "INSERT INTO incidents (title, description, priority) 
				VALUES ('".$title."', '".$description."', ".$priority.");";
		$result = mysqli_query($dbc, $sql);
		
		//get the new incident ID 
		$sql = "SELECT id FROM incidents WHERE title='".$title."' ORDER BY id DESC LIMIT 1";
		$result = mysqli_query($dbc, $sql);
		while ($row = mysqli_fetch_array($result)) {
			$incidentID = $row['id'];
		}
		
		$sql = "INSERT INTO incidentEvents (incidentID, comment, changedByID) 
				VALUES (".$incidentID.", 'Issue created', ".$userID.");";
		$result = mysqli_query($dbc, $sql);
		
		header('Location: ../dashboard/edit_issue?id='.$incidentID);
	}
	
	mysqli_close($dbc);
?>