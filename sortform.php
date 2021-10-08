	<?php
		 include('db-connect.php');

		function sortForm(){
			$conn = databaseConnection();
			$query = $conn->prepare(" SELECT * FROM `tasks` ORDER BY color ASC ");
	        $query->bindParam(":color", $_POST['color']);
	        $query->execute();
		}

		sortForm();
		header( "Location: index.php" );
	?>