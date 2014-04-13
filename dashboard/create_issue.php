<?php
/*
	Title:				Incident Tracker
	Authors' Names: 	Justin Hellsten	http://advanceweb.justinhellsten.com/project2/
						Michael Burnie 	http://comp2068.michaelburnie.com/project2/
	File Name: 			create_issue.php
	Description:		On this page, users can create a new incident/issue by providing the title, description, and priority. 
						There is some minor validation on the fields, then the data is sent to ims_incident.php.
						The information provided by the user on this page cannot be edited once submitted.
	Last Modified Date:	2014/04/12
*/
    require('../html_resources/dashboard_header.php');
?>
<h1>Create Issue</h1>
<form id="newIncidentForm" action="../web_resources/ims_incident" method="POST">
<div class="inc-input">
	<label>Title:</label>
	<input type="text" name="title">
</div>
<div class="inc-input">
	<label>Description:</label>
	<textarea name="desc" placeholder="Describe your issue..."></textarea>
</div>
<div class="inc-input">
	<label>Priority:</label>
	<select name="priority">
	<?php
		foreach ($priorities as $val)
		{
			echo '<option>'.$val.'</option>';
		}
	?>
	</select>
</div>
<input class="create-incident-button" type="submit" value="Submit" />
</form>

	<script src="../js/jquery-validation/jquery.js"></script>
	<script src="../js/jquery-validation/jquery.validate.js"></script>
	<script language="javascript" type="text/javascript">   

		// validate event form on keyup and submit
		$("#newIncidentForm").validate({
			rules: {
				title: {
					required: true
				},
				desc: {
					required: true
				}
			},
			messages: {
				title: {
					required: "Please enter a title",
				},
				desc: {
					required: "Please enter a description",
				}
			}
		});

	</script>
<?php
    require('../html_resources/dashboard_footer.php');
?>

