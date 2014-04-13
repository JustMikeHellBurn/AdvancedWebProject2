<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          register_success.php
    Description:        This page is just a register confirmation page. This page will provide a link they will proceed the user to the dashboard.
    Last Modified Date: 2014/04/13
*/
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Register Success Page</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">

		<!-- Google API Fonts -->
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin Slab">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril Fatface">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=PT Sans + PT Serif">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Old Standard TT">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Sans">

		<!-- CSS Includes -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/register_success.css">

	</head>

<body>
	
	<!-- Header Section -->
	<div id="header">
		<h1>Registration Success!</h1>
	</div>
	<!-- Content Section -->
	<div id="content">
		<h2>Congratulations!</h2>
		<p>You have successfully registered an account with us as, <?php echo $_GET["username"]; ?>!</p>
		<p>Thank you!</p>
		<a href="dashboard">Continue to Dashboard</a>
	</div>
	<!-- Footer Section -->
	<div id="footer">

	</div>

<body>

</html>


