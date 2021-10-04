<?php
	include('db-connect.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add list</title>
</head>
<body>
	<h1>Voeg een taak toe</h1>
		<form name="create" method="post" action="createTask.php">
			<label for="">task name</label>
			<input type="hidden" name="listid" value="<?= $_GET['id'] ?>">
			<input type="text" name="name" placeholder="Vul naam in"><br>

			<label for="">difficulty</label>
			<select name="color">
				<option value="red">red (0-30 min)</option>
				<option value="orange">orange (30-60 min)</option>
				<option value="yellow">yellow (60-120 min)
				<option value="green">green (120 of meer min)</option>
				<option value="grey">grey (geen indicatie)</option>
			</select>
			<input type="submit">
		</form>
</body>
</html>