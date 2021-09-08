<?php
	require("db-connect.php"); 
	require("read.php");
	databaseConnection();
?> 


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="STYLESHEET" href="style.css" type="text/css">
	<title>Document</title>
</head>
<body>
	<nav>
		<h1 class="lijst1"><a href="addTask.php">New list</a></h1>
	</nav>
	 <h1 class="lijst2">Your lists</h1>


	 <?php
	  $list = getList();
	  foreach ($list as $listitem){
            //var_dump($listitem); ?>
            <h2><?php echo $listitem['name'] ?></h2>
            <?php
        }
        ?>
	 	
</body>
</html>