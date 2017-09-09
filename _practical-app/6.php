<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

    <section class="content">

    <aside class="col-xs-4">

        <?php Navigation(); ?>

    </aside><!--SIDEBAR-->


    <article class="main-content col-xs-8">


        <?php

        /*  Step1: Make a form that submits one value to POST super global */
        if (isset($_POST['submit'])) {

            $courses = ["math", "science", "geography", "history", "art", "physical education"];

            $minimum = 3;
            $maximum = 33;

            $student = $_POST['student'];
            $course = $_POST['course'];
            $grade = $_POST['grade'];

            if(!in_array($course, $courses)){
                echo "Access Denied!";
            } else {
                if (strlen($student) < $minimum || strlen($student) > $maximum) {
                    echo "Change your name, hippie!!!";
                } else {
                    echo "Welcome:<br>
                          <p style='display: inline-block; margin-right: 15%'>$student</p>
                          <p style='display: inline-block; margin-right: 15%'>$course</p>
                          <p style='display: inline-block'>$grade</p>";
                }
            }
        }

        ?>
        <form action="6.php" method="post">
            Student: <input type="text" name="student"><br>
            Course: <input type="text" name="course"><br>
            Grade: <input type="text" name="grade"><br>
            <input type="submit" name="submit">
        </form>

    </article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>