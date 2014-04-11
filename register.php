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
		<script language="javascript" type="text/javascript" src="js/jquery-validation/jquery.js"></script>
        <script language="javascript" type="text/javascript" src="js/jquery-validation/jquery.validate.js"></script>

	</head>
	<body>
	
	<div id="header">
		<a href="index"><h1>Incident Tracker</h1></a>
	</div>

	<div id="content">
		<div>
			<form id="registerform" action="web_resources/ims_register" method="POST">
				<h1>Sign Up Now!</h1>
	        	<div class="rp-input">
					<input name="username" type="text" placeholder="Create your username" />
	        	</div>
				<div class="rp-input">
					<input name="email" type="text" placeholder="Create your email" />
				</div>
				<div class="rp-input">
					<label>User Type</label>
					<select name="user_type">
<?php
    include('libraries/constants.php');

    // Connect to the database
    $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT) or die ('Could not connect');

	// List all user types
	$sql = "SELECT * FROM userTypes";
	$result = mysqli_query($dbc, $sql);
	while ($row = mysqli_fetch_array($result, MYSQL_NUM)) {
		echo '<option>';
		echo $row[0];
		echo '</option>';
	}

	mysqli_close($dbc);
?>
					</select>
				</div>
	        	<div class="rp-input">
	            	<input id="password" type="password" name="password" placeholder="Create a password" />
	        	</div>
				<div class="rp-input">
					<input type="password" name="confirm_password" placeholder="Confirm password" />
				</div>
	        	<input class="register-button" type="submit" value="Create my account" />
    	</form>
		</div>
		<div>
			<form id="loginform" action="web_resources/ims_login" method="POST">	
				<h1>Already Signed up? Report incidents now!</h1>
				<div class="rp-input">
					<input type="text" name="loginusername" placeholder="Enter username" />
				</div>
				<div class="rp-input">
					<input type="password" name="loginpassword" placeholder="Enter password" />
				</div>
				<input class="register-button" type="submit" value="Log In" />
			</form>
		</div>
	</div>

	<div id="footer">
		<div id="michael-footer" class="social-links">
			<a href="http://www.michaelburnie.com/"><h3>Michael</h3></a>
			<a href="https://www.facebook.com/michael.burnie.12" class="facebook-32"></a>
			<a href="https://twitter.com/mburnie91" class="twitter-32"></a>
			<a href="http://www.linkedin.com/pub/michael-burnie/52/a69/984" class="linkedin-32"></a>
			<a href="https://github.com/Nyaxite" class="github-32"></a>
		</div>
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

	</body>

<!-- Scripts -->
<script language="javascript" type="text/javascript" src="js/footer.js"></script>

<script src="jquery.js"></script>
<script src="jquery.validation.js"></script>

<script language="javascript" type="text/javascript">   

    // validate signup form on keyup and submit
    $("#registerform").validate({
        rules: {
            username: { 
				required: true,
				minlength: 2
			},
			email: {
				required: true,
				email: true
			},
			password: {
				required: true,
				minlength: 5
			},
			confirm_password: {
				required: true,
				minlength: 5,
				equalTo: "#password"
			}
        },
        messages: {
            username: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long"
			},
			confirm_password: {
				required: "Please provide a password",
				minlength: "Your password must be at least 5 characters long",
				equalTo: "Please enter the same password as above"
			},
			email: "Please enter a valid email address"
        }
    });

    // validate login form on keyup and submit
    $("#loginform").validate({
		rules: {
            loginusername: { 
                required: true,
                minlength: 2
            },
			loginpassword: {
				required: true,
				minlength: 5
			}
		},
		messages: {
			loginusername: {
				required: "Please enter a username",
				minlength: "Your username must consist of at least 2 characters"
			},
			loginpassword: {
				required: "Please enter a password",
				minlength: "Your password must be at least 4 characters long"
			}
		}
	});

</script>


</html>

<?php
	mysqli_close($dbc);
?>
