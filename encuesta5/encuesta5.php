<?php
define( 'SHORTINIT', true );
require( '../../../../wp-load.php' );
if (isset($_REQUEST['enviar'])) {
      //echo $p1 =$_REQUEST['fecha1'];

    $wpdb->insert('encuesta_5_ss',
    array('sesion' => $_REQUEST['sesion1'],
    'fecha1' => $_REQUEST['fecha1']));
}
else if (isset($_REQUEST['enviar2'])) {
    // echo $p1 =$_REQUEST['fecha1'];
    // echo $p2 =$_REQUEST['fecha2'];

  $wpdb->insert('encuesta_5_ss',
  array('sesion' => $_REQUEST['sesion1'],
  'fecha1' => $_REQUEST['fecha1'],
  'fecha2' => $_REQUEST['fecha2']));
}
else if (isset($_REQUEST['enviar3'])) {
    //echo $p1 =$_REQUEST['fecha1'];

  $wpdb->insert('encuesta_5_ss',
  array('sesion' => $_REQUEST['sesion1'],
  'fecha1' => $_REQUEST['fecha1'],
  'fecha2' => $_REQUEST['fecha2'],
  'fecha3' => $_REQUEST['fecha3']));
}
else if (isset($_REQUEST['enviar4'])) {
    //echo $p1 =$_REQUEST['fecha1'];

    $wpdb->insert('encuesta_5_ss',
    array('sesion' => $_REQUEST['sesion1'],
    'fecha1' => $_REQUEST['fecha1'],
    'fecha2' => $_REQUEST['fecha2'],
    'fecha3' => $_REQUEST['fecha3'],
    'fecha4' => $_REQUEST['fecha4']));
}
else if (isset($_REQUEST['enviar5'])) {
    //echo $p1 =$_REQUEST['fecha1'];

    $wpdb->insert('encuesta_5_ss',
    array('sesion' => $_REQUEST['sesion1'],
    'fecha1' => $_REQUEST['fecha1'],
    'fecha2' => $_REQUEST['fecha2'],
    'fecha3' => $_REQUEST['fecha3'],
    'fecha4' => $_REQUEST['fecha4'],
    'fecha5' => $_REQUEST['fecha5']));
}
else if (isset($_REQUEST['enviar6'])) {
    //echo $p1 =$_REQUEST['fecha1'];

    $wpdb->insert('encuesta_5_ss',
    array('sesion' => $_REQUEST['sesion1'],
    'fecha1' => $_REQUEST['fecha1'],
    'fecha2' => $_REQUEST['fecha2'],
    'fecha3' => $_REQUEST['fecha3'],
    'fecha4' => $_REQUEST['fecha4'],
    'fecha5' => $_REQUEST['fecha5'],
    'fecha6' => $_REQUEST['fecha6']));
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
                <h1 style="text-align:center;">SOLICITUD DE SERVICIOS-UNIDAD DE SERVICIOS TECNOLOGICOS-CONTENIDOS DIGITALES</h1>
                        <h2 style="text-align:center;">Por favor solicitar con una semana de anticipacion</h2>
                        <div class="sesion">
                            <h2>Cantidad de sesiones a realizar</h2>
                            <label for="">A continuacion seleccione la cantidad de sesiones a realizar y realice la asignacion de fechas correspondientes a la actividad</label><br>
                            <script src="https://code.jquery.com/jquery-2.2.2.min.js"></script>
                            <input type="radio" name="sesion" value="1">1 sesión <br>
                            <input type="radio" name="sesion" value="2">2 sesiones <br>
                            <input type="radio" name="sesion" value="3">3 sesiones <br>
                            <input type="radio" name="sesion" value="4">4 sesiones <br>
                            <input type="radio" name="sesion" value="5">5 sesiones <br>
                            <input type="radio" name="sesion" value="6">6 sesiones <br>
                        </div>
                        
                        <div id="sesion1" style="margin-top:3%;">
                            <h4>Una sesión</h4>

                            A continuacion se mencionan las actividades que ofrece contenidos Digitales

                            <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                                Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                                Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                            </p>
                            <form method="POST">
                                <h5>2. Fecha de la actividad</h5>
                                <input type="date" name="fecha1" required><br>
                                <input type="hidden" name="sesion1" value="1">
                                <div class="btn" style="margin-top:5%;">
                                    <button type="submit" name="enviar">Agendar</button>
                                </div>
                            </form>
                            
                        </div>
                        <div id="sesion2" style="margin-top:3%;">
                            <h4>Dos sesiones</h4>

                            <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                            <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                            Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                            Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                            </p>
                            <form method="POST">
                            <input type="hidden" name="sesion1" value="2">
                                <h5>3. Primera fecha de la actividad</h5>
                                <input type="date" name="fecha1" required>
                                <h5>4. Primera fecha de la actividad</h5>
                                <input type="date" name="fecha2" required>
                                <br>
                                <div class="btn" style="margin-top:5%;">
                                    <button type="submit" name="enviar2">Agendar</button>
                                </div>
                            </form>

                        </div>
                        
                        <div id="sesion3" style="margin-top:3%;">
                            <h4>Tres sesiones</h4>
                            <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>
                            <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                                Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                                Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                            </p>
                            <form method="POST">
                            <input type="hidden" name="sesion1" value="3">
                                <h5>5. Primera fecha de la actividad</h5>
                                <input type="date" name="fecha1" required>
                                <h5>6. segunda fecha de la actividad</h5>
                                <input type="date" name="fecha2" required>
                                <h5>7. Tercera fecha de la actividad</h5>
                                <input type="date" name="fecha3" required>
                                <br>
                                <div class="btn" style="margin-top:5%;">
                                    <button type="submit" name="enviar3">Agendar</button>
                                </div>
                            </form>
                        </div>
                         
                        <div id="sesion4" style="margin-top:3%;">
                            <h4>Cuatro sesiones</h4>
                            <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                            <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                                Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                                Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                            </p>
                            <form method="POST">
                            <input type="hidden" name="sesion1" value="4">
                                <h5>8. Primera fecha de la actividad</h5>
                                <input type="date" name="fecha1" required>
                                <h5>9. segunda fecha de la actividad</h5>
                                <input type="date" name="fecha2" required>
                                <h5>10. Tercera fecha de la actividad</h5>
                                <input type="date" name="fecha3" required>
                                <h5>11. Cuarta fecha de la actividad</h5>
                                <input type="date" name="fecha4" required>
                                <br>
                                <div class="btn" style="margin-top:5%;">
                                    <button type="submit" name="enviar4">Agendar</button>
                                </div>
                            </form>
                        </div>
                        
                        <div id="sesion5" style="margin-top:3%;">
                            <h4>Cinco sesiones</h4>
                            <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                            <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                                Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                                Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                            </p>
                            <form method="POST">
                            <input type="hidden" name="sesion1" value="5">
                                <h5>12. Primera fecha de la actividad</h5>
                                <input type="date" name="fecha1" required>
                                <h5>13. segunda fecha de la actividad</h5>
                                <input type="date" name="fecha2" required>
                                <h5>14. Tercera fecha de la actividad</h5>
                                <input type="date" name="fecha3" required>
                                <h5>15. Cuarta fecha de la actividad</h5>
                                <input type="date" name="fecha4" required>
                                <h5>16. Quinta fecha de la actividad</h5>
                                <input type="date" name="fecha5" required><br>
                                <div class="btn" style="margin-top:5%;">
                                    <button type="submit" name="enviar5">Agendar</button>
                                </div>

                            </form>
                        </div>
                        
                        <div id="sesion6" style="margin-top:3%;">
                            <h4>Seis sesiones</h4>

                            <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                            <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                                Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                                Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                            </p>
                            <form method="POST">
                            <input type="hidden" name="sesion1" value="6">
                                <h5>17. Primera fecha de la actividad</h5>
                                <input type="date" name="fecha1" required>
                                <h5>18. segunda fecha de la actividad</h5>
                                <input type="date" name="fecha2" required>
                                <h5>19. Tercera fecha de la actividad</h5>
                                <input type="date" name="fecha3" required>
                                <h5>20. Cuarta fecha de la actividad</h5>
                                <input type="date" name="fecha4" required>
                                <h5>21. Quinta fecha de la actividad</h5>
                                <input type="date" name="fecha5" required>
                                <h5>22. Sexta fecha de la actividad</h5>
                                <input type="date" name="fecha6" required>
                                <br>
                                <div class="btn" style="margin-top:5%;">
                                    <button type="submit" name="enviar6">Agendar</button>
                                </div>
                            </form>
                        </div>
                        <br><br><br>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
                    $("#sesion1").hide();
                    $("#sesion2").hide();
                    $("#sesion3").hide();
                    $("#sesion4").hide();
                    $("#sesion5").hide();
                    $("#sesion6").hide();
            $("input[type=radio]").click(function(event){
                var valor = 0;
                var valor = $(event.target).val();
                if(valor =="1"){
                    $("#sesion1").show();
                    $("#sesion2").hide();
                    $("#sesion3").hide();
                    $("#sesion4").hide();
                    $("#sesion5").hide();
                    $("#sesion6").hide();
                } else if (valor == "2") {
                    $("#sesion1").hide();
                    $("#sesion2").show();
                    $("#sesion3").hide();
                    $("#sesion4").hide();
                    $("#sesion5").hide();
                    $("#sesion6").hide();
                } else if (valor == "3") { 
                    // Otra cosa
                    $("#sesion1").hide();
                    $("#sesion2").hide();
                    $("#sesion3").show();
                    $("#sesion4").hide();
                    $("#sesion5").hide();
                    $("#sesion6").hide();
                }else if (valor == "4") { 
                    // Otra cosa
                    $("#sesion1").hide();
                    $("#sesion2").hide();
                    $("#sesion3").hide();
                    $("#sesion4").show();
                    $("#sesion5").hide();
                    $("#sesion6").hide();
                }else if (valor == "5") { 
                    // Otra cosa
                    $("#sesion1").hide();
                    $("#sesion2").hide();
                    $("#sesion3").hide();
                    $("#sesion4").hide();
                    $("#sesion5").show();
                    $("#sesion6").hide();
                }else if(valor == "6"){
                    //otra cosa
                    $("#sesion1").hide();
                    $("#sesion2").hide();
                    $("#sesion3").hide();
                    $("#sesion4").hide();
                    $("#sesion5").hide();
                    $("#sesion6").show();
                }
                else{
                    $("#sesion1").hide();
                    $("#sesion2").hide();
                    $("#sesion3").hide();
                    $("#sesion4").hide();
                    $("#sesion5").hide();
                    $("#sesion6").hide();
                }
            });
        });  


</script>