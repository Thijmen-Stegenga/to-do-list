<?php
	 include('db-connect.php');

	function createNames(){
		$conn = databaseConnection();
		$query = $conn->prepare("INSERT INTO `to-do` (name) VALUES (:name)");
        $query->bindParam(":name", $_POST['name']);
        $query->execute();
	}

	createNames();
	header( "Location: index.php" );
?>