<?php
// Configuration
require_once 'connect.php';

// Store form data in database
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = $_POST["full_name"];
    $email = $_POST["email"];
    $phone_number = $_POST["phone_number"];
    $pincode = $_POST["pincode"];
    $address = $_POST["address"];
    $adopting = $_POST["adopting"];

    // SQL Query
    $sql = "INSERT INTO adoption_form (full_name, email, phone_number, pincode, address, adopting) 
            VALUES ('$full_name', '$email', '$phone_number', '$pincode', '$address', '$adopting')";

    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close the database connection
$conn->close();
?>
