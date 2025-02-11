<?php
class Veicolo implements JsonSerializable {
    // attributes
    private string $marca;
    private int $anno;

    // constructors
    public function __construct(string $marca, int $anno) {
        $this->marca = $marca;
        $this->anno = $anno;
    }
    
    // getters & setters
    public function getMarca(): string {
        return $this->marca;
    }

    public function getAnno(): int {
        return $this->anno;
    }

    // methods
    public function jsonSerialize(): array {
        return [
            "marca" => $this->marca,
            "anno" => $this->anno
        ];
    }
}
?>