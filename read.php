<?php

   function getList(){
            $conn = databaseConnection();
            $query = $conn->prepare("SELECT * FROM `to-do`");
            $query->execute();
            $list = $query->fetchall();
            return $list;
        }

   function deleteList(){
            $conn = databaseConnection();
            $query = $conn->prepare("DELETE * FROM `to-do`");
            $query->execute();
            $deletelist = $query->fetchall();
            return $deleteist;
   }

?>


