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
        <title>Register Success Page for Incident Tracker</title>
        <meta name="description" content="Register Success Page for Incident Tracker">
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
        <link rel='stylesheet' type="text/css" media='screen and (min-width: 641px)' href='css/register.css' />
        <link rel='stylesheet' type="text/css" media='screen and (min-width: 321px) and (max-width: 640px)' href='css/register_640.css' />
        <link rel='stylesheet' type="text/css" media='screen and (max-width: 320px)' href='css/register_320.css' />

		<!-- Javascript Includes -->
        <script language="javascript" type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>

	</head>

<body>
	
	<!-- Header Section -->
	<div id="header">
		<h1>Registration Success!</h1>
	</div>
	<!-- Content Section -->
	<div id="content">
		<div>
		<h1>Congratulations!</h1>
		<p>You have successfully registered an account with us as, <?php echo $_GET["username"]; ?>!</p>
		<p>Thank you!</p>
		<a href="dashboard">Continue to Dashboard</a>
		</div>
	</div>
	<!-- Footer Section -->
	<div id="footer">
        <!-- Michael Burnie Social Links -->
        <div id="michael-footer" class="social-links">
            <a href="http://www.michaelburnie.com/"><h3>Michael</h3></a>
            <a href="https://www.facebook.com/michael.burnie.12" class="facebook-32"></a>
            <a href="https://twitter.com/mburnie91" class="twitter-32"></a>
            <a href="http://www.linkedin.com/pub/michael-burnie/52/a69/984" class="linkedin-32"></a>
            <a href="https://github.com/Nyaxite" class="github-32"></a>
        </div>
        <!-- Justin Hellsten Social Links -->
        <div id="justin-footer" class="social-links">
            <a href="http://justinhellsten.com/"><h3>Justin</h3></a>
            <a href="https://www.facebook.com/justin.hellsten" class="facebook-32"></a>
            <a href="https://twitter.com/JustinHellsten" class="twitter-32"></a>
            <a href="http://www.linkedin.com/pub/justin-hellsten/4b/178/436" class="linkedin-32"></a>
            <a href="https://github.com/JustinHue" class="github-32"></a>
        </div>
        <div id="copyright">
            <p>Copyright © 2014 | <a href="http://michaelburnie.com/" />Michael Burnie</a> & <a href="http://justinhellsten.com/" />Justin Hellsten</a></p>
        </div>
	</div>

<!-- Scripts -->
<script language="javascript" type="text/javascript" src="js/footer.js"></script>

<body>

</html>


