<?php

    session_start();

	// Prevent non-registered users from accessing dashboard pages 
    if (!isset($_SESSION['username'])) {
		header('Location: ../');
    }

	// Create connection to the database
    include('../libraries/constants.php');
    $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT) or die ('Could not connect');


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
		<a href="view_issues">View Issues</a>
		<a href="create_issue">Create Issue</a>
		<a href="account_settings">Account Settings</a>
		<a href="../web_resources/ims_logout">Log Out</a>
	</nav>
	</div>
	<div id="header-right-panel">
		<div id="welcome"><?php echo $_SESSION['username']; ?></div>
	</div>
</div>

<div id="content">
