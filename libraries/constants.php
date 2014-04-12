<?php
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
