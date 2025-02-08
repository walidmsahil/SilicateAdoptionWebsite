<?php
$servername = "sql109.infinityfree.com"; 
$username = "if0_38274128";
$password = "tXnWUpmDeO ";
$dbname = "if0_38274128_Accounts";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
