<?php
include_once "./Animale.php";

class Cane extends Animale implements JsonSerializable {
  // attributes
  private string $razza;

  // constructors
  public function __construct(Animale $animale, string $razza) {
    parent::__construct($animale->getNome());
    $this->razza = $razza;
  }

  // methods
  public function jsonSerialize(): array {
    return array_merge(
      parent::jsonSerialize(),
      [
        "razza" => $this->razza
      ]
    );
  }

  #[\Override]
  public function verso(): string {
    return "bau";
  }
}
?>