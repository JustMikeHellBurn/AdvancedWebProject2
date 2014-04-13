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

