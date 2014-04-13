<?php

    // Create connection to the database
    include('../libraries/constants.php');
    $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT) or die ('Could not connect');

?>
