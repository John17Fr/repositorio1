<?php
define( 'SHORTINIT', true );
require( '../../../../wp-load.php' );
$hoy = date("Y-m-d"); 
global $wpdb;
if (isset($_REQUEST['Enviar'])) {
    //echo $hoy;
    // echo $Nombre = $_REQUEST['name'];
    // echo$correo = $_REQUEST['correo'];
    // echo $proyecto = $_REQUEST['proyecto'];
    // echo  $p1 = $_REQUEST['p1'];
    //  echo $cp1 =$_REQUEST['comentario_p1'];
    //  echo  $p2 = $_REQUEST['p2'];
    //  echo  $cp2 =$_REQUEST['comentario_p2'];
    //  echo  $p3 = $_REQUEST['p3'];
    //  echo  $cp3 =$_REQUEST['comentario_p3'];
    //  echo  $p4 = $_REQUEST['p4'];
    //  echo  $cp4 =$_REQUEST['comentario_p4'];
    //  echo  $p5 = $_REQUEST['p5'];
    //  echo  $cp5 =$_REQUEST['comentario_p5'];
    //  echo   $p6 = $_REQUEST['p6'];
    //  echo   $cp6 =$_REQUEST['comentario_p6'];
    //  echo   $p6 = $_REQUEST['p7'];
    //  echo  $cp7 =$_REQUEST['comentario_p7'];
    //  echo   $comentarios = $_REQUEST['comentarios'];
    //

    $wpdb->insert('encuesta_3_pys_c',
    array('fecha' => $hoy,
    'nombre' =>$_REQUEST['name'],
    'correo'=> $_REQUEST['correo'],
    'proyecto' =>$_REQUEST['proyecto'],
    'p1'=> $_REQUEST['p1'],
    'comentario_p1' => $_REQUEST['comentario_p1'],
    'p2' => $_REQUEST['p2'],
    'comentario_p2' => $_REQUEST['comentario_p2'],
    'p3' => $_REQUEST['p3'],
    'comentario_p3' => $_REQUEST['comentario_p3'],
    'p4' => $_REQUEST['p4'],
    'comentario_p4' => $_REQUEST['comentario_p4'],
    'p5' => $_REQUEST['p5'],
    'comentario_p5' => $_REQUEST['comentario_p5'],
    'p6' => $_REQUEST['p6'],
    'comentario_p6' => $_REQUEST['comentario_p6'],
    'p7'=> $_REQUEST['p7'],
    'comentario_p7'=> $_REQUEST['comentario_p7'],
    'Comentarios' => $_REQUEST['comentarios']));
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
                                    <label for="">Fecha: </label>
                                    <input id="fecha" name="fecha" type="date" class="form-control" value="<?php echo $hoy; ?>" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Nombre del cliente: </label>
                                    <input id="name" name="name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-4">
                                    <label for="">Correo electronico: </label>
                                    <input id="correo" name="correo" type="text" class="form-control">
                                </div>
                                <div class="col-md-4">
                                    <label for="">Proyecto: </label>
                                    <input id="proyecto" name="proyecto" type="text" class="form-control">
                                </div>        
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">5.¿Cuál es su percepción con respecto a la atención recibida por el personal de la unidad de servicios tecnologicos? </label><br>
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
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p1" id="p1" value="5">
                                        <label class="form-check-label" for="inlineRadio5">6</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentario_p1" name="comentario_p1" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">6.¿Cuál es su percepción sobre la solución a las inquietudes expresadas por usted al equipo de trabajo de la Unidad de servicios Tecnologicos durante la presentación de servicios?</label>
                                    <br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p2" id="p2" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p2" id="p2" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p2" id="p2" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p2" id="p2" value="4">
                                        <label class="form-check-label" for="inlineRadio4">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p2" id="p2" value="5">
                                        <label class="form-check-label" for="inlineRadio5">6</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentario_p2" name="comentario_p2" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">7.¿Cuál es su percepción con respecto a los tiempos de respuesta del equipo de trabajo de la Unidad de Servicios tecnologicos?</label>
                                <br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p3" id="p3" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p3" id="p3" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p3" id="p3" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p3" id="p3" value="4">
                                        <label class="form-check-label" for="inlineRadio4">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p3" id="p3" value="5">
                                        <label class="form-check-label" for="inlineRadio5">6</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentario_p3" name="comentario_p3" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">8.¿Cómo es su percepción con respecto al cumplimiento de los requerimientos iniciales del proyecto?</label>
                                <br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p4" id="p4" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p4" id="p4" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p4" id="p4" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p4" id="p4" value="4">
                                        <label class="form-check-label" for="inlineRadio4">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p4" id="p4" value="5">
                                        <label class="form-check-label" for="inlineRadio5">6</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentario_p4" name="comentario_p4" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">9.¿Cuál es su percepción con respecto a la comunicación de la unidad de servicios Tecnologicos durante y despues de la presentación del servicio ?</label>
                                <br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p5" id="p5" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p5" id="p5" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p5" id="p5" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p5" id="p5" value="4">
                                        <label class="form-check-label" for="inlineRadio4">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p5" id="p5" value="5">
                                        <label class="form-check-label" for="inlineRadio5">6</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentario_p5" name="comentario_p5" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">10.¿Qué percepción tiene usted con respecto al valor asignado al costo del proyecto?</label>
                                <br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p6" id="p6" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p6" id="p6" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p6" id="p6" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p6" id="p6" value="4">
                                        <label class="form-check-label" for="inlineRadio4">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p6" id="p6" value="5">
                                        <label class="form-check-label" for="inlineRadio5">6</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentario_p6" name="comentario_p6" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">11.¿Qué percepción tiene usted con respecto al soporte una vez recibido el proyecto?</label>
                                <br><br>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p7" id="p7" value="1">
                                        <label class="form-check-label" for="inlineRadio1">1</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p7" id="p7" value="2">
                                        <label class="form-check-label" for="inlineRadio2">2</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p7" id="p7" value="3">
                                        <label class="form-check-label" for="inlineRadio3">3</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p7" id="p7" value="4">
                                        <label class="form-check-label" for="inlineRadio4">5</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input class="form-check-input" type="radio" name="p7" id="p7" value="5">
                                        <label class="form-check-label" for="inlineRadio5">6</label>
                                    </div>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Observaciones para nuestra mejora...</label>
                                <textarea class="form-control" id="comentario_p7" name="comentario_p7" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">12. Exprese libremente sus comentarios sobre el servicio recibido</label>
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