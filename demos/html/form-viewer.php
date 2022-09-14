<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Results</title>
</head>
<body>
    <h1>Results: </h1>

<!-- PHP Starts Here -->

<?php

$firstname = $_GET['first'];
$yearborn = $_GET['year'];

echo <<< _END

<p>First name is $firstname </p>
<p>Year born is $yearborn </p>

_END;

?>

</body>
</html>