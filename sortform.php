	<?php
		function sortStatus(){
			$conn = databaseConnection();
			$query = $conn->prepare(" SELECT * FROM `tasks` ORDER BY :color DESC ");
	        $query->bindParam(":color", $_POST['color']);
	        $query->execute();
		}

		function sortDuration(){
			$conn = databaseConnection();
			$query = $conn->prepare(" SELECT * FROM `tasks` ORDER BY 'duration' :sort ");
	        $query->bindParam(":sort", $_POST['sort']);
	        $query->execute();
	        $sortedlist = $query->fetchall();
	        return $sortedlist;
		}
	?>