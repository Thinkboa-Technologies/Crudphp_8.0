<?php
$servername = "localhost"; //Server Name
$username = "root"; // datbase user or server user name
$password = "";// datbase or server user password
$database = "Cruddb";// databasename

$conn = new mysqli($servername, $username, $password, $database); // connection varriable passes values in the aruguments, eg database and user credentials

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>
