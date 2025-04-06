<?php
require_once 'connect.php';

// Get form data
$firstName = $_POST["firstName"];
$lastName = $_POST["lastName"];
$phoneNumber = $_POST["phoneNumber"];
$email = $_POST["email"];
$message = $_POST["message"];

// Prepare and execute SQL statement
$sql = "INSERT INTO contact_form (firstName, lastName, phoneNumber, email, message)
VALUES ('$firstName', '$lastName', '$phoneNumber', '$email', '$message')";

if ($conn->query($sql) === TRUE) {
  header("Location: home.html");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>