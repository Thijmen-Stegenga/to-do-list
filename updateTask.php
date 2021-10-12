<?php
     include("db-connect.php");

    function updateTasks(){
        $conn = databaseConnection();
        $id = $_GET['id'];
        $name = $_GET['name'];
        $color = $_GET['color'];
        $duration = $_GET['duration'];
        $query = $conn->prepare("UPDATE `tasks` SET  `name` = :name, `color` = :color, `duration` = :duration  WHERE id = :id ");
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->bindParam(':color', $color);
        $query->bindParam(':duration', $duration);
        $query->execute();
        
        header( "Location: index.php" );
    }
        updateTasks();

?>

