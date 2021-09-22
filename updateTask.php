<?php
     include("db-connect.php");

    function updateTasks(){
        $conn = databaseConnection();
        $id = $_GET['id'];
        $name = $_GET['name'];
        $query = $conn->prepare("UPDATE `tasks` SET  `name` = :name WHERE id = :id ");
        $query->bindParam(':id', $id);
        $query->bindParam(':name', $name);
        $query->execute();
        

        header( "Location: index.php" );
    }
        updateTasks();

?>