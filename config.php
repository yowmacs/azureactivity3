<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'macasactivity3.mysql.database.azure.com');
define('DB_USERNAME', 'yowmacs@macasactivity3');
define('DB_PASSWORD', 'Rayukapeach16');
define('DB_NAME', 'activity3azure');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
