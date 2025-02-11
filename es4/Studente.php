<?php
include_once "./Persona.php";

class Studente extends Persona implements JsonSerializable {
    // attributes
    private string $matricola;

    // constructors
    public function __construct(Persona $persona, string $matricola) {
        $this->matricola = $matricola;
        parent::__construct($persona->getNome(), $persona->getCognome());
    }

    // methods
    public function jsonSerialize(): array{
        return array_merge(
            parent::jsonSerialize(),
            [
                "matricola" => $this->matricola
            ]
        );
    }
}
?>