<?php
define( 'SHORTINIT', true );
require( '../../../../wp-load.php' );
$hoy = date("Y-m-d"); 

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
    $comentarios = $_REQUEST['comentarios'];
    //

    $wpdb->insert('encuesta_2_pys',
    array('fecha' =>$hoy,
    'nombre' =>$Nombre,
    'ficha'=> $ficha,
    'Programa' =>$Programa,
    'p1'=> $p1,
    'p2' =>$p2,
    'p3' =>$p3,
    'p4' =>$p4,
    'p5' =>$p5,
    'p6' =>$p6,
    'comentarios' =>$comentarios));
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
                        <legend class="text header">PERCEPCIÓN Y SATISFACCIÓN - VISITAS TÉCNICAS</legend>

                        <div class="form-group">
                            <div class="row">
                            <div class="col-md-4">
                                    <label for="">Fecha: </label>
                                    <input id="fecha" name="fecha" type="date" class="form-control" value="<?php echo $hoy; ?>" disabled>
                                </div>
                                <div class="col-md-4">
                                    <label for="">Nombre del participante: </label>
                                    <input id="name" name="name" type="text" class="form-control">
                                </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                                <div class="col-md-4">
                                    <label for="">Ficha No: </label>
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
                                <label for="">5.¿Cuál es su percepción con respecto a la organización del evento? </label><br>
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
                                <label for="">6.¿Cuál es su percepción sobre la solución a las inquietudes expresadas por usted al equipo de trabajo?</label>
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
                                <label for="">7.¿Cuál es su percepción con respecto a los temas recibidos en la capacitación?</label>
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
                                <label for="">8.¿Cómo es su percepción con respecto a su experiencia con los equipos usados en el laboratorio?</label>
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
                                <label for="">9.¿Qué percepción tiene usted con respecto a la utilidad de los conocimientos recibidos para su vida profesional?</label>
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
                                <label for="">10.¿Qué temas le gustaría que se dieran en la próxima capacitación?</label>
                                <textarea class="form-control" id="p6" name="p6" rows="2"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">Registre acá sus comentarios y observaciones para nuestra mejora...</label>
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