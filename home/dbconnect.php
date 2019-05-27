<?php

$servername = "localhost";
$username = "khabaria_auto";
$password = "Guj@3031!";
$dbname = "khabaria_home";

// Create connection
$conn = mysqli_connect($servername,$username ,$password , $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>