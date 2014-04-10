<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <meta name="description" content="Login Panel for Content Management System">
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
        
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
        
        <!-- Link Stylesheets -->
        <link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/framework.css">
		<link rel="stylesheet" type="text/css" href="css/login.css">

		<!-- Link Javascript -->
		<script language="javascript" type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
		<script language="javascript" type="text/javascript" src="js/login.js"></script>

<body>
	<header>
	</header>
    <div id="page_content">
		<form id="login-form" action="web_resources/ims_login" method="POST">
			<div id="title">
				Incident Tracker
			</div>
			<div class="lp-input">
				<label>Username</label>
				<input type="text" />
			</div>
			<div class="lp-input">
				<label>Password</label>
				<input type="password" />
			</div>
			
			<div class="lp-buttons">
				<a id="login-button" class="button">Log In</a>
				<a id="register-button" class="button" href="register">Register</a>
			</div>

		</form>
    </div>
	<footer>
		Copyright © 2014 | <a  class="footer-link" href="http://justinhellsten.com/">Justin Hellsten</a> & <a class="footer-link" href="http://michaelburnie.com/">Michael Burnie</a>
	</footer>
</body>

</html>

