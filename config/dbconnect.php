<?php
require_once "constants.php";

// Create database connection
$dbConn = new mysqli(HOSTNAME, HOSTUSER, HOSTPASS, DBNAME);

// Verify the database connection
if ($dbConn->connect_error) {
    die("Connection failed: " . $dbConn->connect_error);
} else {
    print "Connected successfully!!!:-)";
}
?>