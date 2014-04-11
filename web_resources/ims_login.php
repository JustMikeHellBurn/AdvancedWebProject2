<?php
    include('../libraries/constants.php');

    // Connect to the database
    $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT) or die ('Could not connect');

   	$username = trim(mysql_real_escape_string($_POST['loginusername']));
    $password = trim(mysql_real_escape_string($_POST['loginpassword']));

	// Check if match in the database
    $sql = "SELECT * FROM users WHERE username='$username' and password='$password'";
	$result = mysqli_query($dbc, $sql);
	if (mysqli_num_rows($result) == 1) {
		// Redirect to dashboard if login is successful
        header('Location: ../dashboard/');
    } else {
		header('Location: ../index');
	}

	mysqli_close($dbc);
?>
