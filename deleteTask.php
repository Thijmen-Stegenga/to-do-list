<?php
     include("db-connect.php");

    function deleteTasks(){
        $id = $_GET['id'];
        $conn = databaseConnection();
        $query = $conn->prepare("DELETE FROM `tasks` WHERE id = :id ");
        $query->bindParam(':id', $id);
        $query->execute();
        

        header( "Location: index.php" );
    }
        deleteTasks()
?>
