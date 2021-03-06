<?php 	

	$arr = ["Goedemorgen!", "Goede Middag!", "Goede Avond!", "Goede Nacht!"];
	$arr2 = ["morning.png", "afternoon.png", "evening.png", "night.png"];
	$time = exec("Time /T");

	if($time >= "06:00" && $time < "12:00"){
		$head = $arr[0];
		$background = $arr2[0];
		$Color = "black";
	}
	elseif($time >= "12:00" && $time < "18:00"){
		$head = $arr[1];
		$background = $arr2[1];
		$Color = "black";
	}
	elseif($time >= "18:00" && $time < "24:00"){
		$head = $arr[2];
		$background = $arr2[2];
		$Color = "black";
	}
	elseif($time >= "00:00" && $time < "06:00"){
		$head = $arr[3];
		$background = $arr2[3];
		$Color = "white";
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dynamische Website</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-image: url(<?php echo $background?>)">
	<div>
		<div id="container">
			<h1 style="color: <?php echo $Color?>"><?php echo $head?></h1>
			<h2 style="color: <?php echo $Color?>">Het is nu <?php echo $time?>.</h2>	
		</div>
	</div>
</body>
</html>