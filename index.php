<?php
	$custom_css = "login.css";
	include('html_resources/header.php');
?>
<div id="page_content">
<form action="" method="POST">
		<div id="title">
			Incident Management System
		</div>
		<div class="lp-input">
			<label>Username</label>
			<input type="text" />
		</div>
		<div class="lp-input">
			<label>Password</label>
			<input type="password" />
		</div>
		<input class="login-button" type="submit" value="Log in" />
		<a href="register">Register</a>
	</form>
</div>

<?php
	include('html_resources/footer.php');
?>
