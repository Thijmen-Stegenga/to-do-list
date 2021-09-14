<?php

   function getList(){
            $conn = databaseConnection();
            $query = $conn->prepare("SELECT * FROM `to-do`");
            $query->execute();
            $list = $query->fetchall();
            return $list;
        }

?>


