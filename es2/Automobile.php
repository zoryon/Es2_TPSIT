<?php
include_once "./Veicolo.php";

class Automobile extends Veicolo {
    // attributes
    private string $modello;

    // constructors
    public function __construct(string $marca, int $anno, string $modello) {
        $this->modello = $modello;
        parent::__construct($marca, $anno);
    }
}
?>