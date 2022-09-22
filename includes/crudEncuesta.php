<?php
class crudEncuesta{
    public function __construct(){

    }
    public function registrarEncuesta($Nombre,$ficha,$Programa,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$comentarios){
        //Establecer la conexión a la base datos
        global $wpdb;
    
        //Preparar la sentencia sql
        $wpdb->insert('encuesta',
        array('Nombre' =>$Nombre,
        'ficha'=> $ficha,
        'Programa' =>$Programa,
        'p1'=> $p1,
        'p2' =>$p2,
        'p3' =>$p3,
        'p4' =>$p4,
        'p5' =>$p5,
        'p6' =>$p6,
        'p7' =>$p7,
        'comentarios' =>$comentarios));
    }
    














}


?>