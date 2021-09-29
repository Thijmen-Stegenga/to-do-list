<?php
     include("db-connect.php");

    function updateTasks(){
        $conn = databaseConnection();
        $id = $_GET['id'];
        $name = $_GET['name'];
        $color = $_GET['color'];
        $query = $conn->prepare("UPDATE `tasks` SET  `name` = :name, `color` = :color WHERE id = :id ");
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->bindParam(":color", $color);
        $query->execute();
        
        header( "Location: index.php" );
    }
        updateTasks();

?>

