<?php

$host = "localhost";
$dbname = "login_db";
$username = "root";
$password = "202131603_Jp";

$mysqli = new mysqli(hostname: $host,
                    username: $username,
                    password: $password,
                    database: $dbname);
                    
if ($mysqli->connect_errno) {
    die("Connection error: " . $mysqli->connect_error);
}

return $mysqli;