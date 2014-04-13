<?php
/*
	Title:				Incident Tracker
	Authors' Names: 	Justin Hellsten	http://advanceweb.justinhellsten.com/project2/
						Michael Burnie 	http://comp2068.michaelburnie.com/project2/
	File Name: 			dashboard_header.php
	Description:		This page is included in most pages. It calls the primary CSS files and holds most information
						consistent across pages.  It also manages users' sessions and ensuring all users are logged in.
						It also opens the database for querying.
	Last Modified Date:	2014/04/13
*/
    session_start();

	// Prevent non-registered users from accessing dashboard pages 
    if (!isset($_SESSION['username'])) {
		header('Location: ../');
    }

	// Create connection to the database
	require('../libraries/db_connect.php');

?>
<!DOCTYPE html>
<html>
    <head>
        <title><?php echo $title; ?></title>
        <meta name="description" content="<?php echo $description; ?>">
		<meta name="keywords" content="<?php echo $keywords; ?>">
		<meta name="author" content="<?php echo $author; ?>">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
		
		<!-- GOOGLE FONT API -->
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open Sans">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Josefin Slab">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Arvo">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Lato">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Vollkorn">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Abril Fatface">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Ubuntu">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Old Standard TT">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Droid Sans">
        
        <!-- General Stylesheets -->
        <link rel="stylesheet" type="text/css" href="../css/reset.css">
		<link rel="stylesheet" type="text/css" href="../css/dashboard.css">
	
<?php if (isset($custom_css)) { ?>
		<!-- Custom Stylesheets -->
		<link rel="stylesheet" type="text/css" href="../css/<?php echo $custom_css; ?>">
<?php } ?>

        <script language="javascript" type="text/javascript" src="../js/jquery-1.11.0.min.js"></script>

<body>

<div id="header">
	<div id="header-left-panel">
	<a href="index"><h1>Incident Tracker</h1></a>
	<nav>	
		<a href="view_issues">View Issues</a> |
		<a href="create_issue">Create Issue</a> |
		<a href="account_settings">Account Settings</a> |
		<a href="../web_resources/ims_logout">Log Out</a> 
	</nav>
	</div>
	<div id="header-right-panel">
		<div id="welcome"><?php echo $_SESSION['username']; ?></div>
	</div>
</div>

<div id="content">
