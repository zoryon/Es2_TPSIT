<?php
header("Content-Type: application/json");

include_once "./Studente.php";

$studenti = array();

array_push(
    $studenti,
    new Studente(new Persona("Mario", "Rossi"), "12345"),
    new Studente(new Persona("Luca", "Bianchi"), "67890"),
    new Studente(new Persona("Giuseppe", "Verdi"), "54321")
);

echo json_encode($studenti);
?>