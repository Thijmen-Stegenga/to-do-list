<?php
	 include('db-connect.php');

	function createTasks(){
		$conn = databaseConnection();
		$query = $conn->prepare("INSERT INTO `tasks` (name, listid, color, duration) VALUES (:name, :listid, :color, :duration)");
        $query->bindParam(":name", $_POST['name']);
        $query->bindParam(":listid", $_POST['listid']);
        $query->bindParam(":color", $_POST['color']);
        $query->bindParam(":duration", $_POST['duration']);
        $query->execute();
	}

	createTasks();
	header( "Location: index.php" );
?>