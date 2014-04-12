<?php
    include('../html_resources/dashboard_header.php');
?>
<div id="content">
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
</div>
<?php
    include('../html_resources/dashboard_footer.php');
?>

