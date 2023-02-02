<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'enrolment-system');

// Connecting to server
$server = mysqli_connect(DB_HOST, DB_USER, DB_PASS);

/*
if (!$server) {
    die("Connection failed: " . mysqli_connect_error());
} else {
  echo "Server Connected";
}
*/
?>
