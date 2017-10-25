<?php


$isSubmitted = isset($_REQUEST['submit']);

if ($isSubmitted)
{
	echo 'Zoekresultaten voor ' . $_GET['zoekveld'];
}



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Oefening 09</title>
</head>
<body>
	
	<form action="" method="GET">
		<label for="input-user">ZOEKVELD</label>
		<input id="input-user" type="text" name="zoekveld">

		<input type="submit" name="submit">
	</form>
</body>
</html>