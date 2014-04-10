<?php
	$title = "Register Page";
	$custom_css = "register.css";

    include('html_resources/header.php');
?>

<div class="row centered">
	<div class="col-4">
	<form action="register" method="POST">
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
</div>

<?php
    include('html_resources/footer.php');
?>

