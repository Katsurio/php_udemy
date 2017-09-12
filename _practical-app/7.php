<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'pp_seven');

$dbStatus = (function() {
    global $conn;
    if (!$conn) {
        die('DB connect failed: ' . mysqli_error($conn));
    }
})();

function QueryStatus() {
    global $conn;
    $query = "SELECT * FROM users";
    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Query FAILED: " . mysqli_error($conn));
    }

    while($row = mysqli_fetch_assoc($result)){
        $username = $row['username'];
        $password = $row['password'];

        echo "<tr>
                <td>$username</td>
                <td>$password</td>
             </tr> ";
    }
};


?>


<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>


    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*  Step 1 - Create a database in PHPmyadmin

            Step 2 - Create a table like the one from the lecture

            Step 3 - Insert some Data

            Step 4 - Connect to Database and read data

    */
        ?>
        <div class="row">
            <div class="col-sm-12">
                <?= $dbStatus; ?>
                <table class="col-xs-4" border="1">
                    <thead>
                        <tr>
                            <th>Username</th>
                            <th>Password</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php QueryStatus(); ?>
                    </tbody>
                </table>
            </div>
        </div>


    </article><!--MAIN CONTENT-->

    <?php include "includes/footer.php" ?>
