<?php
class Persona {
    // attributes
    private string $nome;
    private string $cognome;

    // constructors
    public function __construct(string $nome, string $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    // methods
    public function presentati(): string {
        return "Ciao sono " . $this->nome . $this->cognome;
    }
}
?>