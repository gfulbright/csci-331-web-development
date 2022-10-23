<?php
// DYNAMIC HTML
$firstname = $_GET['apiFirst'];
echo "<p><strong>$firstname</strong> has been added.</p>";


// DATABASE OPERATIONS:
// https://www.w3schools.com/php/php_mysql_insert.asp
$servername = "localhost";
$username = "user18";
$password = "18gael";
$dbname = "db18";

// Create connection (assuming these exist -- we set up the DB on the CLI)
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

// SQL OPERATIONS
$sql = "SELECT * FROM randuser";

$out = $conn-> query($sql);
var_dump($out);


$conn->close();

?>