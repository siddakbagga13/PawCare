<?php
require_once 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Capture form data
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $concern_type = mysqli_real_escape_string($conn, $_POST['concern']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $location = mysqli_real_escape_string($conn, $_POST['location']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $pincode = mysqli_real_escape_string($conn, $_POST['pincode']);
    $reason = mysqli_real_escape_string($conn, $_POST['reason']);

    // SQL query to insert data into the table
    $sql = "INSERT INTO Concerns (name, email, concern_type, phone, location, city, pincode, reason)
            VALUES ('$name', '$email', '$concern_type', '$phone', '$location', '$city', '$pincode', '$reason')";

    // Execute query and check if successful
    if ($conn->query($sql) === TRUE) {
        header("Location: index.html");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close connection
    $conn->close();
}
?>

