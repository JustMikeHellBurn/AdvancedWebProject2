<?php
/*
    Title:              Incident Tracker
    Authors' Names:     Justin Hellsten http://advanceweb.justinhellsten.com/project2/
                        Michael Burnie  http://comp2068.michaelburnie.com/project2/
    File Name:          user_types.php
    Description:        Html resource template, creates user types field by getting user types from the database. Database connection required ($dbc)
    Last Modified Date: 2014/04/13
*/
?>
<label>User Types</label> 
       <select name="user_type">
<?php
    // List all user types
    $sql = "SELECT * FROM userTypes";
    $result = mysqli_query($dbc, $sql);
    while ($user_type_row = mysqli_fetch_array($result, MYSQL_NUM)) {
        echo ($selected_user_type == $user_type_row[0]) ? '<option selected>' : '<option>';
        echo $user_type_row[0];
        echo '</option>';
    }
?>
        </select>

