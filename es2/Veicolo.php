<?php
class Veicolo {
    // attributes
    private string $marca;
    private int $anno;
    
    // getters & setters
    public function getMarca(): string {
        return $this->marca;
    }

    public function getAnno(): int {
        return $this->anno;
    }
}
?>