<?php
header("Content-Type: application/json");

include_once "./Cane.php";

$cani = array();

array_push(
    $cani,
    new Cane(new Animale("Germanico"), "Pastore tedesco"),
    new Cane(new Animale("Germanico2"), "Pastore tedesco2")
);

echo json_encode($cani);
?>