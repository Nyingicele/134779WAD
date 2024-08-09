<?php

$servername = "localhost"; 
$username = "root"; 
$password = "";
$dbname = "webapp";
        // Creates connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Checks connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    echo "Connected successfully";
?>

