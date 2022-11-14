<?php

$servername = "localhost";

$username = "root"; 

$password = ""; 

$dbname = "employees";

$portname ="3360";

$conn = new mysqli($servername, $username, $password, $dbname, $portname);

if ($conn->connect_error) {

    die("Connection failed: " . $conn->connect_error);

}

?> 