<!DOCTYPE html>
<html>
    <head>
        <title>Register Page</title>
        <meta name="description" content="">
        <meta name="keywords" content="">
        <meta name="author" content="">
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

		<link rel="stylesheet" type="text/css" href="css/reset.css">
        <link rel="stylesheet" type="text/css" href="css/register.css">
		
        <script language="javascript" type="text/javascript" src="js/jquery-1.11.0.min.js"></script>
        <script language="javascript" type="text/javascript" src="js/register.js"></script>

	</head>
	<body>
	
	<div id="header">
		<h1>Incident Tracker</h1>
	</div>

	<div id="content">
		<div>
			<form action="web_resources/ims_register" method="POST">
				<h1>Sign Up Now!</h1>
	        	<div class="rp-input">
	            	<input type="text" placeholder="Pick a username" />
	        	</div>
				<div class="rp-input">
					<input type="text" placeholder="Your email" />
				</div>
	        	<div class="rp-input">
	            	<input type="password" placeholder="Create a password" />
	        	</div>
				<div class="rp-input">
					<input type="password" placeholder="Confirm password" />
				</div>
	        	<input class="register-button" type="submit" value="Register" />
    	</form>
		</div>
		<div>
			<form action="web_resources/ims_login" method="POST">	
				<h1>Already Signed up? Log In Now!</h1>
				<div class="rp-input">
					<input type="text" placeholder="Username" />
				</div>
				<div class="rp-input">
					<input type="text" placeholder="Password" />
				</div>
				<input class="register-button" type="submit" value="Log In" />
			</form>
		</div>
	</div>

	<div id="footer">
		<div id="michael-footer">

		</div>
		<div id="justin-footer">

		</div>
		<div id="copyright">
			<p>Copyright © 2014 | <a href="michaelburnie.com" />Michael Burnie</a> & <a href="justinhellsten.com" />Justin Hellsten</a></p>
		</div>
	</div>

	</body>
</html>
