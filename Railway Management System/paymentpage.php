<?php
//Connect to the database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "railway";

$conn = mysqli_connect($servername, $username, $password, $dbname);
//Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//Select data from the booking table
$sql = "SELECT * FROM temp";
$result = mysqli_query($conn, $sql);

//Display data in a table
if (mysqli_num_rows($result) > 0) {
    echo '<html>';
    echo '<head>';
    echo '<title> Indian Railways Payment</title>';
    echo '<style>';
    echo 'input[type=submit] {
  width: 40%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  margin-right: 16px
}';
echo 'input[type=Pay]:hover {
  background-color: #45a049;
}';
echo 'input[type=reset] {
  width: 40%;
  background-color: #ff0000;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}';
echo 'input[type=reset]:hover {
  background-color: #f83131;
}';
    echo 'table {
  border-collapse: collapse;
  width: 100%;}';
  echo 'tr:nth-child(even) {background-color: #f2f2f2;}';
  echo 'th, td {
  text-align: left;
  padding: 8px;
}';
    echo 'body { font-family: Arial,sans-serif;}';
    echo '</style>';
    echo '<body>';
    echo '<center>';
    echo '<h1> Payment Details</h1>';
    echo '</center>';
    echo "<table><tr><th>User Name</th><th>Starting Place</th><th>Destination</th><th>Number of Tickets</th></tr>";
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>".$row["name"]."</td><td>".$row["st"]."</td><td>".$row["end"]."</td><td>".$row["tkt"]."</td></tr>";
    }
    echo "</table>";
    echo '<form action="end.html" method="get">';
    echo '<input type="submit" value="Pay"> &nbsp;';
    echo ' <input type="reset" value="Cancel">';
    echo '</form>';
    echo '</body>';
    echo '<html>';
    
} else {
    echo "0 results";
}
$sql1 = "DELETE FROM temp";
mysqli_close($conn);
?>
