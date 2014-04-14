<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          create_issue.php
    Description:        On this page, users can create a new incident/issue by providing the title, description, and priority. 
                        There is some minor validation on the fields, then the data is sent to ims_incident.php.
                        The information provided by the user on this page cannot be edited once submitted.
    Last Modified Date: 2014/04/13
*/

	$title = "Dashboard - Account Settings";
	$description = "Account Settings for Incident Tracker";

    require('../html_resources/dashboard_header.php');

	// Get Username (Saved in the session), Password, Email, User Type and Password
	$sql = "SELECT email, password, type FROM users WHERE username='" . $_SESSION['username'] . "'";
	$result = mysqli_query($dbc, $sql);
	$row = mysqli_fetch_array($result, MYSQL_NUM);
	$selected_user_type = $row[2];

?>
<h1>Account Settings</h1>
<form action="../web_resources/ims_update_account" method="POST">

	<div class="finput">
		<label>Username</label>
		<input name="username" type="text" value="<?php echo $_SESSION['username']; ?>"/>
	</div>

	<div class="finput">
		<label>Email</label>
		<input name="email" type="text" value="<?php echo $row[0]; ?>" />
	</div>

	<div class="finput">
		<?php require('../html_resources/user_types.php'); ?>
	</div>

	<div class="finput">
		<label>Old password</label>
		<input name="old_password" type="password" />
	</div>

	<div class="finput">
		<label>New password</label>
		<input name="new_password" type="password" />
	</div>

	<div class="finput">
		<label>Confirm password</label>
		<input name="confirm_password" type="password" />
	</div>

	<input type="submit" value="Update profile" />
</form>
<?php
   	require('../html_resources/dashboard_footer.php');
?>


