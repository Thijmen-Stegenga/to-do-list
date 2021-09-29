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
				<option value="red">red</option>
				<option value="orange">orange</option>
				<option value="green">green</option>
				<option value="grey">grey</option>
			</select>
			<input type="submit">
		</form>
</body>
</html>