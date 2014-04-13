<?php
/*
	Title:				Incident Tracker
	Authors' Names: 	Justin Hellsten	http://advanceweb.justinhellsten.com/project2/
					Michael Burnie 	http://comp2068.michaelburnie.com/project2/
	File Name: 			constants.php
	Description:		This page contains the constants used throughout the system, such as database credentials and strings that are used in more than one place.
						It also provides some validation.
	Last Modified Date:	2014/04/12
*/
	DEFINE("BASE_DIR", "/"); 
	DEFINE("CSS_DIR", BASE_DIR . "css");
	DEFINE("IMG_DIR", BASE_DIR . "imgs");

	DEFINE("HOST", "justinhellsten.com");
	DEFINE("DATABASE", "hellsten_project2");
	DEFINE("USER", "hellsten_user");
	DEFINE("PASSWORD", "hMCrq3P-c2KG");
	DEFINE("PORT", "3306");

	$user_types = array('user', 'admin');
	$status_types = array('NEW', 'Assigned', 'In progress', 'Need Information', 'Resolved', 'Closed');
	$end_status_types = array('Closed','Resolved');
	$priorities = array(1, 2, 3);

?>
