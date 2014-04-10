<?php

	include('constants.php');

    // ** PLEASE USE DATABASE CLASS WHEN CONNECTING TO THE DATABASE ** //
    // ALL CRUDE OPERATIONS TO THE DATABASE SHOULD BE AVAILABLE THROUGH THIS CLASS //
    class Database
    {
        var $host     = HOST;
        var $database = DATABASE;
        var $user     = USER;
        var $password = PASSWORD;

        var $dbc = 0;

        public function __construct() {
            $dbc = mysqli_connect(HOST, USER, PASSWORD, DATABASE) or die('Could not connect to database');
        }

        public function query($sql) {
            echo $sql;
            $result = mysqli_query($sql) or die('Query failed');
            return $result;
        }

        // CRUD OPERATIONS
		public function create_member($username, $password) {

		}

		public function check_member($username, $password) {

		}

        public function close() {
            mysqli_close($dbc);
        }

    }

?>
