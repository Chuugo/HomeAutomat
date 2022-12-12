<?php
    $conn = new mysqli("localhost", "phpzsuser", "123", "home_automat");

    if ($conn->connect_errno){
        echo "<br>";
        die("Connection failed! Error description: <br>" . $conn->connect_error . "<br> Error code: <br>" . $conn->connect_errno );
    }
?>