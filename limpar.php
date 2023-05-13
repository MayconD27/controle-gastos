<?php
    require_once "bd.php";
    $sql = "DELETE FROM contas";
    $resultado = $bd->prepare($sql);
    $resultado->execute();
    header("location:index.php")
?>
    