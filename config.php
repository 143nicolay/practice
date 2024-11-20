<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVERNAME', "localhost");
define('DB_USERNAME', "nicolay");
define('DB_PASSWORD', "1234");
define('DB_NAME', "demo");
 
/* Attempt to connect to MySQL database */
$conn = new mysqli("DB_SERVERNAME", "DB_USERNAME", "DB_PASSWORD", "DB_NAME");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
