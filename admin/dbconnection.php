<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "smc_bca4th2024";

$conn = new mysqli($servername, $username, $password, $dbname);

if(!$conn)
{
    die("Connection failed: " . mysqli_connect_error());
}