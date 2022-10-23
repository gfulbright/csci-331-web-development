<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>User Listing</title>
</head>
<body>
    <h1 class="display-1">Added</h1>

<!-- 
    NOTE: this is our backend (server side) code. 
    1. User cannot see this code -- unlike HTML/CSS/JavaScript
    2. This is how we will do database opperations (DB is also on server)
-->    

<?php
// DYNAMIC HTML
$firstname = $_GET['apiFirst'];
$lastname = $_GET['apiLast'];
$country = $_GET['apiCountry'];

echo "<h2>Newly Added</h2>";
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
$sql = "INSERT INTO randuser2 VALUES ('$firstname', '$lastname', '$country')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully <br>";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$result = $conn->query("SELECT * FROM randuser2");


echo "<table style='width:100%'">
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Country</th>
</tr>";

while($row = $result->fetch_assoc())
{
echo "<tr>";
echo "<td>" . $row['firstname'] . "</td>";
echo "<td>" . $row['lastname'] . "</td>";
echo "<td>" . $row['country'] . "</td>";
echo "</tr>";
}
echo "</table>";


if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "First Name: " . $row["firstname"]. "<br>";
    echo "Last Name: " . $row["lastname"]. "<br>";
    echo "Country: " . $row["country"]. "<br>";
  }
}


$conn->close();

?>

    <br><br>
    <button onclick="history.back()" type="button" class="btn btn-primary">❮ ❮ Back</button>

</body>

<footer>
  <p class="lead">
    Bootstrap was used to edit the h1 tag, the p tags, and the button to make it "primary" blue color.
  </p>
</footer>
</html>
