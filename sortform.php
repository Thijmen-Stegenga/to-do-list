	<?php
		function sortStatus($sort){
			$conn = databaseConnection();
			if($_POST['sort'] == "ASC"){
				$query = $conn->prepare(" SELECT * FROM `to-do` left JOIN tasks ON `tasks` .`listid` = `to-do`.`id` ORDER BY `tasks`.`color`ASC ");
			}else{
				$query = $conn->prepare(" SELECT * FROM `to-do` left JOIN tasks ON `tasks` .`listid` = `to-do`.`id` ORDER BY `tasks`.`color`DESC ");
			}
			$query->bindParam(":sort", $_POST['sort']);
	        $query->execute();
	        $sortedList = $query->fetchAll();
        	return $sortedList;
        }


		
		function sortDuration($sort){
			$conn = databaseConnection();
			if($_POST['sort'] == "ASC"){
				$query = $conn->prepare("SELECT * FROM `to-do` left JOIN tasks ON `tasks` .`listid` = `to-do`.`id` ORDER BY `tasks`.`duration` ASC");
			}else{
				$query = $conn->prepare("SELECT * FROM `to-do` left JOIN tasks ON `tasks` .`listid` = `to-do`.`id` ORDER BY `tasks`.`duration` DESC");
			}
			$query->bindParam(':sort', $_POST['sort']);
	        $query->execute();
	        $sortedlist = $query->fetchall();
	        return $sortedlist;
		}		
		
	?>