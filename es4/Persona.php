<?php
class Persona implements JsonSerializable {
    // attributes
    private string $nome;
    private string $cognome;

    // constructors
    public function __construct(string $nome, string $cognome) {
        $this->nome = $nome;
        $this->cognome = $cognome;
    }

    // getters & setters
    public function getNome(): string {
        return $this->nome;
    }

    public function getCognome(): string {
        return $this->cognome;
    }

    // methods
    public function jsonSerialize(): array{
        return [
            "nome" => $this->nome,
            "cognome" => $this->cognome
        ];
    }

    public function presentati(): string {
        return "Ciao sono " . $this->nome . $this->cognome;
    }
}
?>