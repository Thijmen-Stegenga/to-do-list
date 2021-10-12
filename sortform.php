	<?php
		 include('db-connect.php');

		function sortForm(){
			$conn = databaseConnection();
			$query = $conn->prepare(" SELECT * FROM `tasks` ORDER BY color , duration ASC|DESC ");
	        $query->bindParam(":color", $_POST['color']);
	        $query->bindParam(":duration", $_POST['duration']);
	        $query->execute();
		}

		sortForm();
		header( "Location: index.php" );
	?>