<?php

// Connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Retrieve data from the form
$name = $_POST['name'];
$st  = $_POST['st'];
$end = $_POST['end'];
$Tr = $_POST['Tr'];
$tkt = $_POST['tkt'];
$date = $_POST['date'];
$Tn = $_POST['Tn'];

// Prepare SQL statement
$sql = "INSERT INTO booking (name,st,end,Tr,tkt,date,Tn) VALUES ('$name', '$st', '$end','$Tr','$tkt','$date','$Tn')";
$sql1 = "INSERT INTO temp(name,st,end,Tr,tkt,date,Tn) VALUES ('$name', '$st', '$end','$Tr','$tkt','$date','$Tn')";

// Execute query
if (mysqli_query($conn, $sql)&& mysqli_query($conn,$sql1)) {
    echo "Data stored successfully.";
    header("Location:paymentpage.php");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

?>

