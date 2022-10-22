<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>User Listing</title>
</head>
<body>
    <h1>Added</h1>

<!-- 
    NOTE: this is our backend (server side) code. 
    1. User cannot see this code -- unlike HTML/CSS/JavaScript
    2. This is how we will do database operations (DB is also on server)
-->    

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
$sql = "INSERT INTO randuser VALUES ('$firstname')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

// $result = $conn->query("SELECT firstname FROM randuser")
// // output data of each row
// while($row = $result->fetch_assoc()) {
//   echo "First Name: " . $row["firstname"]. "<br>";
// }


$conn->close();

?>

    <br><br>
    <button onclick="history.back()">Back</button>

</body>

<footer>
  <p>
    Bootstrap was used here in some capacity. G Fulbright. 20 October 2022.
  </p>
</footer>
</html>