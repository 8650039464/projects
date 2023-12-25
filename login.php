<?php
// Retrieve form data
$username = $_POST['username'];
$password = $_POST['password'];

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
else{
    $stmt = $con->prepare ("select * from users where username= ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt_result= $stmt->get_result();
    if($stmt_result->num_rows >0){
        $data = $stmt_result->fetch_assoc();
    }else{
        echo "<h2>Invalid Email or Password!<h2>";
    }
}


?>