<?php
header("Content-Type: application/json");

$automobili = array();

array_push(
    $automobili,
    new Automobile(new Veicolo("FIAT", 2025), "FIAT"),
    new Automobile(new Veicolo("ccc", 333), "FIAT"),
    new Automobile(new Veicolo("ggxcc", 33), "FIAT")
);

json_encode($automobili);
?>