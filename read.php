<?php

   function getList(){
            $conn = databaseConnection();
            $query = $conn->prepare("SELECT * FROM `to-do`");
            $query->execute();
            $list = $query->fetchall();
            return $list;
        }

    function getTasks($id){
            $conn = databaseConnection();
            $query = $conn->prepare("SELECT * FROM `tasks` WHERE listid = :listid ");
            $query->bindParam(":listid", $id);
            $query->execute();
            $tasks = $query->fetchall();
            return $tasks;
        }

?>


