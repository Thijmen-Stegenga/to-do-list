<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Update List</title>
</head>
<body>
		<form name="update" method="get" action="updateTask.php">
			<div class="form-group d-flex justify-content-center">
				<input type="hidden" name="id" value="<?=$_GET['id'] ?>"/>
				<label for="">Edit Task name</label>
				<input class="form-control w-50 " type="text" name="name" placeholder="Vul naam in" required><br>
				<label for="">Duration</label>
				<input type="text" name="duration"  placeholder="Vul tijd in (min)"><br><br>
			</div>
			<select name="color">
				<option value="red">red (going to begin)</option>
				<option value="orange">orange (almost done)</option>
				<option value="green">(finished ready to check)</option>
			</select>
			
			<input type="submit">
		</form>

</body>
</html>