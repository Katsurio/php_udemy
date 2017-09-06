<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 


/*  Step1: Use a pre-built math function here and echo it


	Step 2:  Use a pre-built string function here and echo it


	Step 3:  Use a pre-built Array function here and echo it

 */
    echo rand(-45, 23);

    echo "<br>";

    $str = "I am Henry the Eighth, I am, I am!";

    $strLen = strlen($str);

    echo $strLen;

    echo "<br>";

    $arr = [23, 45, 223, 445, -23, -45, 4523, 2345];

    $sordidArr = sort($arr);

    print_r($sordidArr);

?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>