<?php
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname ="quiz";

        $connection = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

        if(mysqli_connect_errno()){
            die("Database connection Failed" . mysqli_connect_error() . "(" . mysqli_connect());
        }
?>