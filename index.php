<?php
$servername = "macasactivity3.mysql.database.azure.com";
$username = "yowmacs@macasactivity3";
$password = "Rayukapeach16";
$dbname = "activity3azure";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, description, count FROM inventory";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Product: " . $row["description"]. " - Count " . $row["count"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
