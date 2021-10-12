<?php
	include('db-connect.php'); 
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Add task</title>
</head>
<body>
	<h1>Voeg een taak toe</h1>
		<form name="create" method="post" action="createTask.php">
			<label for="">task name</label>
			<input type="hidden" name="listid" value="<?= $_GET['id'] ?>">
			<input type="text" name="name" placeholder="Vul naam in"><br><br>
			<label for="">Duration</label>
			<input type="text" name="duration" placeholder="Vul tijd in (min)"><br><br>

			<label for="">difficulty</label>
			<select name="color">
				<option value="red">red (going to begin)</option>
				<option value="orange">orange (almost done)</option>
				<option value="green">(finished ready to check)</option>
			</select>
			

			<br><input type="submit">
		</form>
</body>
</html>