<?php 
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$message = true;
	}
	else{
		$message = false;
	}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Opdracht 3</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="allContainer">
		<?php 
			if(!$message){
		?>
		<div id= container>

			<h1 id= text>Vul hieronder u Naam en Email in.</h1>
		</div>
		<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
			<label for="Name">Naam:</label><span style="color: red;">*</span><br>
			<input type="name" id="Name" name="name" required><br>
			<label for="Email">Email:</label><span style="color: red;">*</span><br>
			<input type="email" id="Email" name="email" required><br><br>
			<input type="submit" value="Submit">
		</form>
		<?php 
			}
			else{

		?>
		<h1>Het Formulier is verzonden.</h1>
		<h1>Naam: <?php echo $_POST["name"]; ?></h1>
		<h1>Email: <?php echo $_POST["email"]; ?></h1>

		<?php 
			}
		?>
	</div>
</body>
</html>