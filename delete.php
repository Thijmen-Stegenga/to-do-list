<?php
    include('db-connect.php');

    function deleteNames(){
        $conn = databaseConnection();
        $query = $conn->prepare("DELETE FROM `to-do` (name) VALUES (:name) WHERE id = :id ");
        $query->bindParam(":id" , $_POST['id']);
        $query->bindParam(":name", $_POST['name']);
        $query->execute();

        deleteNames();

        //header( "Location: index.php" );
    }
?>