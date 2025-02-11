<?php
class Alunno {
    // attributes
    protected $nome;
    protected $cognome;
    protected $eta;

    // constructors
    function __construct(string $nome, string $cognome, int $eta) {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->eta = $eta;
    }

    // getters & setters
    public function getNome(): string {
        return $this->nome;
    }

    public function setNome(string $nome) {
        $this->nome = $nome;
    }

    public function getCognome(): string {
        return $this->cognome;
    }

    public function setCognome(string $cognome) {
        $this->cognome = $cognome;
    }

    public function getEta(): int {
        return $this->eta;
    }

    public function setEta(int $eta) {
        $this->eta = $eta;
    }

    // methods
    public function toString() {
        echo "[\n Nome: " . $this->nome 
        . "\n Cognome: " . $this->cognome 
        . "\n Età: " . $this->eta 
        . "\n]\n";
    }
}
?>