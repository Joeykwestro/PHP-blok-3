<?php 
	$h2 = "Lerning PHP";
	define("h1", "Hello World!");
	$hello = "Hello";
	$world = "World!";
	$arr = ["Hello", "World!"];
?>

<!DOCTYPE html>
<html>
<head>
	<title>opdracht 1</title>
</head>
<body>
	<h1>Hello World!</h1>
	<h1><?php echo $h2 ?></h1>

	<?php $h2 = h1; 
	?>

	<h1><?php echo $h2 ?></h1>

	<h1><?php echo $hello?> <?php echo $world?></h1>

	<h1><?php echo $arr[0]?> <?php echo $arr[1]?></h1>

</body>
</html>
