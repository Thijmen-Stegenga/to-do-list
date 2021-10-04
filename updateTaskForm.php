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
			</div>
			<select name="color">
				<option value="red">red (0-30 min)</option>
				<option value="orange">orange (30-60 min)</option>
				<option value="yellow">yellow (60-120 min)
				<option value="green">green (120 of meer min)</option>
				<option value="grey">grey (geen indicatie)</option>
			</select>
			<input type="submit" class="btn btn-info">
		</form>

</body>
</html>