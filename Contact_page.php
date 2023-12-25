<?php


// Connect to the database
$servername = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "mydatabase";

$conn = new mysqli($servername, $db_username, $db_password, $db_name);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Retrieve form data
$name = $_POST['name'];
$email = $_POST['email'];
$Message = $_POST['Message'];

// Insert user data into the database
$sql = "INSERT INTO contact (name, email, Message) VALUES ('$name', '$email', '$Message')";

if ($conn->query($sql) === TRUE) {
    echo "Message successful!";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
