


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
				<h2>Onkunde</h2>
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
					<label for="kunnen">Wat zou je graag willen kunnen?</label><span style="color: red;">*</span>
					<input type="text" id="kunnen" name="kunnen" required><br><br>	
					<label for="persoon">Met welke persoon kan je goed opschieten?</label><span style="color: red;">*</span>
					<input type="text" id="persoon" name="persoon" required><br><br>
					<label for="getal">Wat is je favoriete getal?</label><span style="color: red;">*</span>
					<input type="text" id="getal" name="getal" required><br><br>	
					<label for="vakantie">Wat heb je altijd bij je als je op vakantie gaat?</label><span style="color: red;">*</span>
					<input type="text" id="vakantie" name="vakantie" required><br><br>
					<label for="beste">Wat is je beste persoonlijke eigenschap?</label><span style="color: red;">*</span>
					<input type="text" id="beste" name="beste" required><br><br>	
					<label for="slechtste">Wat is je slechtste persoonlijke eigenschap?</label><span style="color: red;">*</span>
					<input type="text" id="slechtste" name="slechtste" required><br><br>
					<label for="overkomen">Wat is het ergste wat je kan overkomen?</label><span style="color: red;">*</span>
					<input type="text" id="overkomen" name="overkomen" required><br><br>	
					<input type="submit" value="Verzenden"><br><br>	
				</form>
			</div>
		</div>
	</div>
	
</body>
</html>