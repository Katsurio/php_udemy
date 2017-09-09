<?php

$conn = mysqli_connect('localhost', 'root', 'root', 'login_app');

if ($conn) {
    echo "We're connected!";
} else {
    die("Database connection failed");
}

$query = "SELECT * FROM users";

$result = mysqli_query($conn, $query);

if (!$result) {

    die('Query FAILED' . mysqli_error());
}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Read</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css"
          integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
</head>
<body>
<div class="container">

    <div class="col-sm-6">

        <?php

        while ($row = mysqli_fetch_assoc($result)) {
            ?>

            <pre>
                <?php print_r($row); ?>
            </pre>

            <?php
        }
        ?>

    </div>

</div>
</body>
</html>
