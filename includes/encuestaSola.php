<?php
define( 'SHORTINIT', true );
require( '../../../../wp-load.php' );

require_once("controladorEncuesta.php");
$controladorEncuesta = new controladorEncuesta();

if (isset($_REQUEST['Enviar'])) {
    echo $Nombre = $_REQUEST['name'];
    echo $ficha = $_REQUEST['ficha'];
    echo $Programa = $_REQUEST['programa'];
    $p1 = $_REQUEST['p1'];
    $p2 = $_REQUEST['p2'];
    $p3 = $_REQUEST['p3'];
    $p4 = $_REQUEST['p4'];
    $p5 = $_REQUEST['p5'];
    $p6 = $_REQUEST['p6'];
    $p7 = $_REQUEST['p7'];
    $comentarios = $_REQUEST['comentarios'];
    //

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

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<style>
    
</style>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<a href="../../../../encuesta/" class="btn btn-dark">REGRESAR</a>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text header">Encuesta</legend>

                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Ingrese su nombre completo: </label>
                                <input id="name" name="name" type="text" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-4">
                                    <label for="">Ficha: </label>
                                    <input id="ficha" name="ficha" type="text" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Programa: </label>
                                    <input id="programa" name="programa" type="text" class="form-control">
                                </div>        
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">??Cu??l es su percepci??n con respecto a la organizaci??n del evento?</label>
                                <textarea class="form-control" id="p1" name="p1" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">??Cu??l es su percepci??n sobre la soluci??n a las inquietudes expresadas por usted al personal de la Unidad de Servicios Tecnol??gicos?</label>
                                <textarea class="form-control" id="p2" name="p2" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">??Cu??l es su percepci??n con respecto a los temas recibidos en la visita?</label>
                                <textarea class="form-control" id="p3" name="p3" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">??C??mo es su percepci??n con respecto a su experiencia con los equipos usados en la Unidad de Servicios Tecnol??gicos?<b> Si aplica</b>.</label>
                                <textarea class="form-control" id="p4" name="p4" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">??Qu?? percepci??n tiene usted con respecto a la utilidad de los conocimientos recibidos en la Unidad de Serviciso Tecnol??gicos?</label>
                                <textarea class="form-control" id="p5" name="p5" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">??Qu?? percepci??n tiene usted con respecto al aporte pr??ctico y te??rico que esta visita t??cnica le brinda como buena pr??ctica para su Ficha o Centro de Formaci??n?</label>
                                <textarea class="form-control" id="p6" name="p6" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">??Qu?? temas le gustar??a que se dieran en la pr??xima capacitaci??n?</label>
                                <textarea class="form-control" id="p7" name="p7" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Registre ac?? sus comentarios y observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentarios" name="comentarios" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                                <button type="submit" class="btn btn-primary" name="Enviar">Enviar</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>

