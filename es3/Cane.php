<?php
include_once "./Animale.php";

class Cane extends Animale {
  // attributes
  private string $razza;

  // constructors
  public function __construct(string $razza) {
    $this->razza = $razza;
    parent::__construct();
  }

  // methods
  #[\Override]
  public function verso(): string {
    return "bau";
  }
}
?>