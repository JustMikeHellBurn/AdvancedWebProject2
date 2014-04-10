<?php
	include('../libraries/constants.php');

	$dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT);

if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

?>
