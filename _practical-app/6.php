<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

<section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*  Step1: Make a form that submits one value to POST super global */
        if (isset($_POST['user'])) {
            $user = $_POST['user'];
            echo $user;
        }

        ?>
        <form action="/" method="post">
            Username: <input type="text" name="username"><br>
            <input type="submit" value="Submit">
        </form>

    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>