<?php

class Animale implements JsonSerializable {
  // attributes
  private string $nome;

  // constructors
  public function __construct(string $nome) {
    $this->nome = $nome;
  }

  // getters & setters
  public function getNome(): string {
    return $this->nome;
  }

  // methods
  public function jsonSerialize() : array {
    return [
      "nome" => $this->nome
    ];
  }

  public function verso(): string {
    return "verso generico";
  }
}
?>