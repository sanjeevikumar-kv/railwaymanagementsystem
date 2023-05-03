<?php

// Database connection parameters
$host = "localhost";
$user = "root";
$password = "";
$database = "railway";

// Create connection
$conn = mysqli_connect($host, $user, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the input values from the login form
$uname1 = $_POST["uname1"];
$upswd1= $_POST["upswd1"];

// Query to check if the username and password combination exists in the register table
$sql = "SELECT * From register Where uname1='$uname1' AND upswd1='$upswd1'";

$result = mysqli_query($conn, $sql);

// Check if the query returned any rows
if (mysqli_num_rows($result) > 0) {
    echo "Login successful";
    header("Location:aindex.html");
} else {
    echo "Invalid username or password";
}

// Close connection
mysqli_close($conn);

?>