	<?php
		function sortStatus(){
			$conn = databaseConnection();
			$query = $conn->prepare(" SELECT * FROM `to-do` left JOIN tasks on `tasks` .`listid` = `to-do`.`id` ORDER BY `color` ");
	        $query->execute();
		}
		
		function sortDuration(){
			$conn = databaseConnection();
			$query = $conn->prepare("SELECT * FROM `to-do` left JOIN tasks on `tasks` .`listid` = `to-do`.`id` ORDER BY `duration` ");
	        $query->execute();
	        $sortedlist = $query->fetchall();
	        return $sortedlist;
		}		
		
	?>