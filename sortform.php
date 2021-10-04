<?php
	 include('db-connect.php');

	function sortForm(){
		$conn = databaseConnection();
		$query = $conn->prepare(" SELECT * FROM `tasks` (name, listid, color) VALUES (:name, :listid, :color) ORDER BY ASC");
        $query->bindParam(":name", $_POST['name']);
        $query->bindParam(":listid", $_POST['listid']);
        $query->bindParam(":color", $_POST['color']);
        $query->execute();
	}

	sortForm();
	header( "Location: index.php" );
?>