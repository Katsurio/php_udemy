<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  

/*  Step1: Make an if Statement with elseif and else to finally display string saying, I love PHP



	Step 2: Make a forloop  that displays 10 numbers


	Step 3 : Make a switch Statement that test againts one condition with 5 cases

 */
    if(23 > 45) {
        echo "Tis greater than" . "<br>";
    } else if(23 < 45) {
        echo "Tis less than" . "<br>";
    } else {
        echo "Tis undecided";
    }

    for ($index = 1; $index <= 10; $index++) {
        echo "$index" . "<br>";
    }
    $message = "Insert message" . "<br>";
    switch (23) {
        case 45:
            echo $message . "45" . "<br>";
            break;
        case 18:
            echo $message . "18" . "<br>";
            break;
        case 33:
            echo $message . "33" . "<br>";
            break;
        case 23:
            echo $message . "23" . "<br>";
            break;
        default:
            echo $message . "none of the above" . "<br>";
            break;
    }
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>