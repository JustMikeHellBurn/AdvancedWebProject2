<?php
	// If the user is already logged in, send them to dashboard
	session_start();
	if (isset($_SESSION['username'])) {
		header('Location: ../dashboard');
	}

    include('../libraries/constants.php');

    // Connect to the database
    $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT) or die ('Could not connect');

    // Username and Password Min/Max Lengths
    $username_minl = 2;
    $username_maxl = 30;
    $password_minl = 5;
    $password_maxl = 30;
    $email_max = 50;

    // Register User if form is submitted
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && !empty($_POST)) {	
        $username = trim(mysql_real_escape_string($_POST['username']));
        $password = trim(mysql_real_escape_string($_POST['password']));
        $confirm_password = trim(mysql_real_escape_string($_POST['confirm_password']));
        $email = trim(mysql_real_escape_string($_POST['email']));
        $user_type = trim(mysql_real_escape_string($_POST['user_type']));

        // Validate Fields (Just in case hacker by passes jquery validation)
        // Stop Script if the fields are bad inputs

		/* Check Username Field */
        $username_length = strlen($username);
        if ($username_length < $username_minl || $username_length > $username_maxl) {
			header('Location: ../register');
        }
		// Check if user is already in the database
		$sql = "SELECT username FROM users WHERE username='$username'";
		$result = mysqli_query($dbc, $sql);
		while ($row = mysqli_fetch_array($result)) {
			if (strcmp($username, $row[0]) == 0) {
				header('Location: ../register');			
			}
		}
		
        $password_length = strlen($password);
        if ($password_length < $password_minl | $password_length > $password_maxl) {
			header('Location: ../register');
        }
		// Check if passwords are the same
		if (strcmp($password, $confirm_password) != 0) {
			header('Location: ../register');
		}

        // Check Email Field
        if (strlen($email) > $email_max && filter_var($email, FILTER_VALIDATE_EMAIL)) {
  			header('Location: ../register');
        }

        // Check User Type Field (Check if user type is in database)
        $user_type_check = false;
        $sql = "SELECT * FROM userTypes";
        $result = mysqli_query($dbc, $sql);
        while ($row = mysqli_fetch_array($result)) {
            if (strcmp($user_type, $row[0]) == 0) {
                $user_type_check = true;
            }
        }
       	if (!$user_type_check) header('Location: ../register');

        // Register user if validation confirmed
			
		$sql = "INSERT INTO users (username, email, password, type) VALUES ('$username', '$email', '$password', '$user_type')";
		$result = mysqli_query($dbc, $sql);
		
		if ($result) {
			// Login in user and send them to register success page
			$_SESSION['username'] = $username;
			header("Location: ../register_success?username=$username");
		} else {
			header('Location: ../register');
		}
			
	}
	
	mysqli_close($dbc);
?>
