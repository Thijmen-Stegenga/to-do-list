<?php
	require("db-connect.php"); 
	include("read.php");
	databaseConnection();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="STYLESHEET" href="style.css" type="text/css">
	<script src="https://kit.fontawesome.com/df923f75a1.js" crossorigin="anonymous"></script>
	<title>Document</title>
</head>
<body>
	<nav>
		<h1 class="lijst1"><a href="addList.php">New list</a></h1>
	</nav>
	 <h1 class="lijst2">Your lists</h1>
	 <div class="remy">

	 <?php
	  $list = getList();
	  foreach ($list as $listitem){
            //var_dump($listitem); ?>
            <div class="item">
            	<div class="flex">
	            	<h2 class="listitems"><?php echo $listitem['name'] ?></h2>
		            <a href="updateForm.php?id=<?php echo $listitem['id'] ?> "class="mr"><i class="far fa-edit"></i></i></a>
		            <a href="delete.php?id=<?php echo $listitem['id'] ?> "class="mr"><i class="fas fa-trash-alt"0></i></a>
		            <a href="addTask.php?id=<?php echo $listitem['id'] ?> "class="mr"><i class="fas fa-file-medical"></i></a>
	        	</div>
	        	<div>
		        	<label for="duration">Sort by Duration:</label>
						<select name="duration">
							<option value="sortForm">Time up!</option>
							<option value="sortForm">Time down!</option>
						</select>
		        </div>

	            <?php foreach (getTasks($listitem['id']) as $task){ ?>
	            <div class="task">
	            	<h3 class=""><?php echo $task['name'] ?></h3>
	            	<h4 class="">Minuten :<?php echo $task ['duration'] ?> </h4>
	            	<a href="updateTaskForm.php?id=<?php echo $task['id'] ?> "class="btn btn-dark"><i class="far fa-edit"></i></i></a>
		            <a href="deleteTask.php?id=<?php echo $task['id'] ?> "class="btn btn-dark"><i class="fas fa-trash-alt"0></i></a>
		            <div class="status <?php echo $task['color'] ?>">
		            	
		            </div>
	            </div>
	            <?php
	            }
	             ?>
	            
        	</div>

            <?php
        }

        ?>
	 	</div>
</body>
</html>