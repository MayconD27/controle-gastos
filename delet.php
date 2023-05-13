<?php
        include_once "bd.php";
        $id = $_POST['id']; 

        $sql = "DELETE FROM contas WHERE id = $id";
        $resultado = $bd->prepare($sql);
        $resultado->execute();
        

?>