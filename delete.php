<?php
     include("db-connect.php");

    function deleteList(){
        $id = $_GET['id'];
        $conn = databaseConnection();
        $query = $conn->prepare("DELETE FROM `to-do` WHERE id = :id ");
        $query->bindParam(':id', $id);
        $query->execute();
        

        header( "Location: index.php" );
    }
        deleteList();
?>
