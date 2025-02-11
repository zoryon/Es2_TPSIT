<?php
include_once "./Veicolo.php";

class Automobile extends Veicolo {
    // attributes
    private string $modello;

    // constructors
    public function __construct(Veicolo $veicolo, string $modello) {
        $this->modello = $modello;
        parent::__construct($veicolo->getMarca(), $veicolo->getAnno());
    }
}
?>