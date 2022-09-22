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
                <h1 style="text-align:center;">SOLICITUD DE SERVICIOS-UNIDAD DE SERVICIOS TECNOLOGICOS-CONTENIDOS DIGITALES</h1>
                    <form action="">
                        <h2 style="text-align:center;">Por favor solicitar con una semana de anticipacion</h2>
                        <h2>Cantidad de sesiones a realizar</h2>
                        <label for="">A continuacion seleccione la cantidad de sesiones a realizar y realice la asignacion de fechas correspondientes a la actividad</label><br>

                        <input type="radio">1 seccion <br>
                        <input type="radio">2 seccion <br>
                        <input type="radio">3 seccion <br>
                        <input type="radio">4 seccion <br>
                        <input type="radio">5 seccion <br>
                        <input type="radio">6 seccion <br>
                        
                        <h2>Una sesion</h2>

                        A continuacion se mencionan las actividades que ofrece contenidos Digitales

                        <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                            Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                            Fotogrametria: viernes de 8:00 am. a 1:00 pm.

                        </p>

                        <h2>2. Fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>Dos sesiones</h2>

                        <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                        <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                        Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                        Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                        </p>

                        <h2>3. Primera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>4. Primera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>Tres sesiones</h2>

                        <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                        <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                            Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                            Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                        </p>

                        <h2>5. Primera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>6. segunda fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>7. Tercera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>Cuatro sesiones</h2>

                        <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                        <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                            Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                            Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                        </p>

                        <h2>8. Primera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>9. segunda fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>10. Tercera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>11. Cuarta fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>Cinco sesiones</h2>

                        <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                        <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                            Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                            Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                        </p>

                        <h2>12. Primera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>13. segunda fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>14. Tercera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>15. Cuarta fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>16. Quinta fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>Seis sesiones</h2>

                        <p>A continuacion se mencionan las actividades las actividades que ofrece Contenidos Digitales</p>

                        <p>Mocap: miercoles de 8:00 a 1:00pm <br>
                            Croma o stop motion: martes y jueves de 11:00 am a 5:00 pm <br>
                            Fotogrametria: viernes de 8:00 am. a 1:00 pm.
                        </p>

                        <h2>17. Primera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>18. segunda fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>19. Tercera fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>20. Cuarta fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>21. Quinta fecha de la actividad</h2>

                        <input type="date" value="">

                        <h2>22. Sexta fecha de la actividad</h2>

                        <input type="date" value="">

                    </form>
            </div>
        </div>
    </div>
</div>