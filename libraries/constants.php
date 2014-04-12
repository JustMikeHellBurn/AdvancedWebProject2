<?php
	DEFINE("BASE_DIR", "/"); 
	DEFINE("CSS_DIR", BASE_DIR . "css");
	DEFINE("IMG_DIR", BASE_DIR . "imgs");

	DEFINE("HOST", "localhost");
	DEFINE("DATABASE", "michaelb_comp2068project2");
	DEFINE("USER", "michaelb_admin");
	DEFINE("PASSWORD", "demo1234");
	DEFINE("PORT", "3306");

	$user_types = array('user', 'admin');
	$status_types = array('NEW', 'Assigned', 'In progress', 'Need Information', 'Resolved', 'Closed');
?>
