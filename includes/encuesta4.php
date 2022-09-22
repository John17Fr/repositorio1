<?php
define( 'SHORTINIT', true );
require( '../../../../wp-load.php' );
if (isset($_REQUEST['Enviar'])) {

    // echo $fecha = $_REQUEST['fecha'];
    // echo $hora = $_REQUEST['time'];
    //  $ficha = $_REQUEST['ficha'];
    //  $cantidad = $_REQUEST['cantidad'];
      echo$p1 =$_REQUEST['p1'];
      echo$p2 = $_REQUEST['p2'];
      echo$estimado =$_REQUEST['estimado'];
      echo$objetivo = $_REQUEST['objetivo'];
     echo$name =$_REQUEST['name'];
  echo$cedula = $_REQUEST['cedula'];
    //

    $wpdb->insert('encuesta4',
    array('fecha' => $_REQUEST['fecha'],
    'hora' => $_REQUEST['time'],
    'ficha'=> $_REQUEST['ficha'],
    'cantidad' => $_REQUEST['cantidad'],
    'actividad'=> $_REQUEST['p1'],
    'area' => $_REQUEST['p2'],
    'estimado' => $_REQUEST['estimado'],
    'objetivo' => $_REQUEST['objetivo'],
    'nombre' => $_REQUEST['name'],
    'cedula' => $_REQUEST['cedula']));
}

?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<a href="../../../../encuesta/" class="btn btn-dark">REGRESAR</a>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="well well-sm">
                <form class="form-horizontal" method="POST">
                    <fieldset>
                        <legend class="text header">PERCEPCIÓN Y SATISFACCIÓN DEL CLIENTE</legend>

                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-4">
                                    <label for="">Fecha de la actividad: </label>
                                    <input id="fecha" name="fecha" type="date" class="form-control" >
                                </div>
                                <div class="col-md-4">
                                    <label for="">hora de la activiadad: </label>
                                    <input id="time" name="time" type="time" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-4">
                                    <label for="">ficha: </label>
                                    <input id="ficha" name="ficha" type="text" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Cantidad de aprendices: </label>
                                    <input id="cantidad" name="cantidad" type="text" class="form-control">
                                </div>        
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">5.¿Tipo de actividad a realizar? </label><br>
                                    <br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p1" id="p1" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p1" id="p1" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p1" id="p1" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p1" id="p1" value="4">
                                        <label class="form-check-label" for="inlineRadio4">5</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">6.¿Area de actividad?</label>
                                    <br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p2" id="p2" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p2" id="p2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">7.¿Tiempo estimado de la actividad?</label>
                                <input type="text" name="estimado" id="estimado" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">8.¿Objetivo de la actividad a realizar?</label>
                                    <input type="text" name="objetivo" id="objetivo" class="form-control">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-4">
                                    <label for="">9.¿Nombre del instructor sena?</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">9.¿Cedula del instructor sena?</label>
                                    <input type="text" name="cedula" id="cedula" class="form-control">
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