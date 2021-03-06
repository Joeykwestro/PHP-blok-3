<?php 
	$num1 = rand();
	$num2 = rand();
	$ans1 = $num1 * $num2;
	$ans2 = $num1 + $num2;
	$ans3 = $num1 - $num2;
	$ans4 = $num1 / $num2;
?>

<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 2</title>
</head>
<body>
	<h1><?php echo $num1?> × <?php echo $num2?> = <?php echo $ans1?></h1>
	<h1><?php echo $num1?> + <?php echo $num2?> = <?php echo $ans2?></h1>
	<h1><?php echo $num1?> - <?php echo $num2?> = <?php echo $ans3?></h1>
	<h1><?php echo $num1?> ÷ <?php echo $num2?> = <?php echo $ans4?></h1>
</body>
</html>