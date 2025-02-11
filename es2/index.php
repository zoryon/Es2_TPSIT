<?php
header("Content-Type: application/json");

include_once "./Automobile.php";

$automobili = array();

array_push(
    $automobili,
    new Automobile(new Veicolo("gggg", 2025), "FIAT"),
    new Automobile(new Veicolo("ccc", 333), "FIAT"),
    new Automobile(new Veicolo("ggxcc", 33), "FIAT")
);

echo json_encode($automobili);
?>