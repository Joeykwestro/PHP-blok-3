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
	<title>Er Heerst Paniek</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div id="allcontainer">	
		<h1 id="madlips">Mad Libs</h1>
		<div id="container">	
			<div id="header">		
				<a href="paniek.php"><p>Er heerst paniek</p></a>
				<a href="onkunde.php"><p>Onkunde</p></a>
			</div>
			<div id="formcontainer">	
				<h2>Er heerst paniek...</h2>
				<?php 
					if(!$message){
				?>
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
					<label for="huisdier">Welk dier zou je het liefst als huisdier willen hebben?</label><span style="color: red;">*</span>
					<input type="text" id="huisdier" name="huisdier" required><br><br>	
					<label for="belangrijkste">Wie is de belangrijkste persoon in je leven?</label><span style="color: red;">*</span>
					<input type="text" id="belangrijkste" name="belangrijkste" required><br><br>
					<label for="land">In welk land zou je wilen wonen?</label><span style="color: red;">*</span>
					<input type="text" id="land" name="land" required><br><br>	
					<label for="verveelt">Wat doe je als je je verveelt?</label><span style="color: red;">*</span>
					<input type="text" id="verveelt" name="veveelt" required><br><br>
					<label for="speelgoed">Met welk speelgoed speelde je als kind het meest?</label><span style="color: red;">*</span>
					<input type="text" id="speelgoed" name="speelgoed" required><br><br>	
					<label for="kopen">Als je €100.000,- had, wat zou je dan kopen?</label><span style="color: red;">*</span>
					<input type="text" id="kopen" name="kopen" required><br><br>
					<label for="bezigheid">Wat is je favoriete bezigheid?</label><span style="color: red;">*</span>
					<input type="text" id="bezigheid" name="bezigheid" required><br><br>	
					<input type="submit" value="Verzenden"><br><br>	
				</form>
				<?php 
					}
					else{
				?>



				<?php }	 ?>
			</div>
		</div>
	</div>
	
</body>
</html>