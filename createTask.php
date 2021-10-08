<?php
	 include('db-connect.php');

	function createTasks(){
		$conn = databaseConnection();
		$query = $conn->prepare("INSERT INTO `tasks` (name, listid, color) VALUES (:name, :listid, :color)");
        $query->bindParam(":name", $_POST['name']);
        $query->bindParam(":listid", $_POST['listid']);
        $query->bindParam(":color", $_POST['color']);
        $query->execute();

	}

	createTasks();
	header( "Location: index.php" );
?>