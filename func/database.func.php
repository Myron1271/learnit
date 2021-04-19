<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "learnit";

$conn = new mysqli($servername, $username,$password, $dbname);

if(!$conn)
{
    die("Connection failed: " .mysqli_error());
}
?>