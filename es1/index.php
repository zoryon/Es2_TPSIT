<?php
include_once "./Alunno.php";

$alunni = array();

array_push(
    $alunni,
    new Alunno("gioele", "spata", 18), 
    new Alunno("alessio", "rivera", 17), 
    new Alunno("dante", "vettori", 18), 
);

foreach($alunni as $alunno) {
    $alunno->toString();
}

?>