<?php
	 include('db-connect.php');

	function createTasks(){
		$conn = databaseConnection();
		$query = $conn->prepare("INSERT INTO `tasks` (name, listid) VALUES (:name, :listid)");
        $query->bindParam(":name", $_POST['name']);
        $query->bindParam(":listid", $_POST['listid']);
        $query->execute();
	}

	createTasks();
	header( "Location: index.php" );
?>