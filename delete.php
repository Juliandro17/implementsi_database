<?php

    include_once("connection.php");

    $id = $_GET['id_obat'];

    $delete = mysqli_query($mysqli, "DELETE FROM obat WHERE id_obat='$id'");

    header("Location:index.php");
?>