<?php
require_once("crudEncuesta.php");

class controladorEncuesta{
    public function __construct(){ 

    }
    public function registrarEncuesta($Nombre,$ficha,$Programa,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$comentarios){
        $crudlevel = new crudEncuesta();
        echo $crudlevel->registrarEncuesta($Nombre,$ficha,$Programa,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$comentarios);
    }













}
?>