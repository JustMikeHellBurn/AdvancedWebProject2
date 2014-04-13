<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          index.php
    Description:        Index page for the dashboard. Nothing interesting here, other than redirecting user to a much more interesting
						page, view_issues.php. 
    Last Modified Date: 2014/04/13
*/
	require('../html_resources/dashboard_header.php');
?>	
<div id="content">
<?php
	header('Location: view_issues');
?>
</div>
<?php
	require('../html_resources/dashboard_footer.php');
?>
