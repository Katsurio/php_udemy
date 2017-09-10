<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<?php
$conn = mysqli_connect('localhost', 'root', 'root', 'pp_seven');

$status = (function ()
{
    global $conn;
    if (!$conn) {
        return die('DB connect failed: ' . mysqli_error($conn));
    }
})();
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
                <?= $status; ?>
                <pre>

                </pre>

            </div>
        </div>


    </article><!--MAIN CONTENT-->

    <?php include "includes/footer.php" ?>
