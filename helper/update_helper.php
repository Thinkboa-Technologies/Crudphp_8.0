<?php
include '../db/db.php';

$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$age = $_POST['age'];

$sql = "UPDATE users SET name='$name', email='$email', age='$age' WHERE id=$id";

if ($conn->query($sql) === TRUE) {
    header('Location: ../index.php');
} else {
    echo "Error updating record: " . $conn->error;
}

$conn->close();
?>