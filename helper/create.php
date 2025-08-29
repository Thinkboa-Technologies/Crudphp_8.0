<?php
include '../db/db.php';

// error_reporting(E_All);
// ini_set(display, 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];

    $sql = "INSERT INTO users (name, email, age) VALUES ('$name', '$email', '$age')";
    if ($conn->query($sql) === TRUE) { // boolean condition True or False
        echo "User added successfully";
        header("Location: ../index.php"); // redirect to index page after insertion
        exit();
    } else {
        echo "Error: " . $conn->error;
    }
}


?>
