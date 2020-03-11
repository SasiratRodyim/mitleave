<?php
        
        $servername = "localhost";
        $username = "root";
        $password = "01234567";
        $dbname = "nezuko";
        //Create connection
        $conn = new mysqli($servername,$username, $password);
        //check connection
        if($conn->connect_error){
                die("Connection failed: ".$conn->connect_error);
        }


        //Connect database
        if(!$conn->select_db($dbname)){
                die("Connection failed: ".$conn->connect_error);
        }
        $conn -> set_charset("utf8");

        
?>