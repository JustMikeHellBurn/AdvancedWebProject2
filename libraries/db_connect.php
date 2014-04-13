<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          db_connect.php
    Description:        This page allows the system to access the database, nothing more nothing less.  
    Last Modified Date: 2014/04/13
*/

    // Create connection to the database
    require('constants.php');
    $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE, PORT) or die ('Could not connect');

?>
