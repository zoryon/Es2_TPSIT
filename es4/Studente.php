<?php
include_once "./Persona.php";

class Studente extends Persona {
    // attributes
    private string $matricola;

    // constructors
    public function __construct(string $nome, string $cognome, string $matricola) {
        $this->matricola = $matricola;
        parent::__construct($nome, $cognome);
    }
}
?>