<?php
$host = "localhost"; 
$username = "root";  
$password = "";      
$dbname = "ecommerce_db"; 

$mysqli = new mysqli($host, $username, $password, $dbname);

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}

$mysqli->set_charset("utf8");

return $mysqli;
?>
