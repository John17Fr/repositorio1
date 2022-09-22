<?php
add_action( 'admin_menu', 'create_admin_menu');
function create_admin_menu() {
	add_menu_page ( 'Encuesta Sena', 'Encuesta', 'manage_options', 'create_admin_menu_plugin', 'create_admin_menu', 'dashicons-awards' );
	add_submenu_page ( 'create_admin_menu_plugin', '', 'Encuesta', 'manage_options', 'qms_options_submenu1', 'en_Crear_Encuesta');
    add_submenu_page ( 'create_admin_menu_plugin', 'ListarEncuesta', 'ListarEncuesta', 'manage_options', 'qms_options_submenu2', 'en_listar_Encuesta');
    add_submenu_page ( 'create_admin_menu_plugin', 'ListarEncuesta2', 'ListarEncuesta2', 'manage_options', 'qms_options_submenu3', 'en_listar_Encuesta2');
    add_submenu_page ( 'create_admin_menu_plugin', 'ListarEncuesta3', 'ListarEncuesta3', 'manage_options', 'qms_options_submenu4', 'en_listar_Encuesta3');
    add_submenu_page ( 'create_admin_menu_plugin', 'ListarEncuesta4', 'ListarEncuesta4', 'manage_options', 'qms_options_submenu5', 'en_listar_Encuesta4');
}

function en_Crear_Encuesta(){
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
        $controladorEncuesta ->registrarEncuesta($Nombre,$ficha,$Programa,$p1,$p2,$p3,$p4,$p5,$p6,$p7,$comentarios);
    }


?>
<!-- CSS only -->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

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
                                <label for="">¿Cuál es su percepción con respecto a la organización del evento?</label>
                                <textarea class="form-control" id="p1" name="p1" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">¿Cuál es su percepción sobre la solución a las inquietudes expresadas por usted al personal de la Unidad de Servicios Tecnológicos?</label>
                                <textarea class="form-control" id="p2" name="p2" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">¿Cuál es su percepción con respecto a los temas recibidos en la visita?</label>
                                <textarea class="form-control" id="p3" name="p3" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">¿Cómo es su percepción con respecto a su experiencia con los equipos usados en la Unidad de Servicios Tecnológicos?<b> Si aplica</b>.</label>
                                <textarea class="form-control" id="p4" name="p4" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">¿Qué percepción tiene usted con respecto a la utilidad de los conocimientos recibidos en la Unidad de Serviciso Tecnológicos?</label>
                                <textarea class="form-control" id="p5" name="p5" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">¿Qué percepción tiene usted con respecto al aporte práctico y teórico que esta visita técnica le brinda como buena práctica para su Ficha o Centro de Formación?</label>
                                <textarea class="form-control" id="p6" name="p6" rows="3"></textarea>
                            </div>
                        </div>
                        <br>
                        <div class="form-group">
                            <div class="col-md-8">
                                <label for="">¿Qué temas le gustaría que se dieran en la próxima capacitación?</label>
                                <textarea class="form-control" id="p7" name="p7" rows="3"></textarea>
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





<?php 
}
function en_listar_Encuesta(){
global $wpdb;




?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  
<div class="">
    <table class="table table-striped table-bordered" id="example">
        <br>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Ficha</th>
                            <th>Programa</th>
                            <th>Pregunta 1</th>
                            <th>Pregunta 2</th>
                            <th>Pregunta 3</th>
                            <th>Pregunta 4</th>
                            <th>Pregunta 5</th>
                            <th>Pregunta 6</th>
                            <th>Pregunta 7</th>
                            <th>Comentarios / Recomendaciones</th>
                        </tr>
                    </thead>
        <tbody>
            <?php
            $resultados = $wpdb->get_results('SELECT * FROM encuesta');           
              foreach ($resultados as $us) {
                            ?>        
                  <tr>
                    <td><?php echo $us ->id; ?></td>
                    <td><?php echo $us->Nombre; ?></td>
                    <td><?php echo $us->ficha; ?></td>
                    <td><?php echo $us->Programa; ?></td>
                    <td><?php echo $us->p1; ?></td>
                    <td><?php echo $us->p2; ?></td>
                    <td><?php echo $us->p3; ?></td>
                    <td><?php echo $us->p4; ?></td>
                    <td><?php echo $us->p5; ?></td>
                    <td><?php echo $us->p6; ?></td>
                    <td><?php echo $us->p7; ?></td>
                    <td><?php echo $us->comentarios; ?></td>
                  </tr>
                    <?php
                    }
                    ?>
		</tbody>
      </table>
</div>
<div class="container">
            <h4>Ejemplo 1 - Gráfica de barras</h4>  
            <canvas id="grafica"></canvas>
</div>
        



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>

<script>
$(document).ready(function() {
    $('#example').DataTable({
    "language": {
    "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
    }
    });
    });
</script>
<script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
<?php $resultados2 = $wpdb->get_results('SELECT ficha , COUNT(*) as "contar" from encuesta GROUP BY ficha;');   
foreach($resultados2 as $f){
$hola = ' "'.$f->ficha.'"';
$contar = $f->contar;

?>
<h4>Encuestas realizadas por la ficha <?php echo $f->ficha ;?>: <?php echo $f->contar; ?></h4>
<script>
    // Obtener una referencia al elemento canvas del DOM
const $grafica = document.querySelector("#grafica");
// Las etiquetas son las que van en el eje X. 
const etiquetas = [<?php echo $hola; ?>, "2253327"]
// Podemos tener varios conjuntos de datos. Comencemos con uno
const datosVentas2020 = {
    label: "Encuestas por ficha",
    data: [<?php echo $contar; ?>,2], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
    backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
    borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
    borderWidth: 1,// Ancho del borde
};
new Chart($grafica, {
    type: 'bar',// Tipo de gráfica
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
            // Aquí más datos...
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
</script>
<?php }; ?>
<?php 
}
function botonEncuesta1(){
?>
<style>

     .encta_button{
     background-color:blue;   
     width:40%;
     height:100vh;
     margin:0 auto;

    }
    
</style>

<a class="encta_button" href="../../PortafolioUST/wp-content/plugins/encuesta/includes/encuestaSola.php">Redireccionar encuesta</a>

<?php
}
function botonEncuesta2(){
?>
<a  class="encta_button" href="../../PortafolioUST/wp-content/plugins/encuesta/includes/encuesta2.php">Redireccionar encuesta numero 2</a>
<?php
}
function botonEncuesta3(){
?>
<a   class="encta_button" href="../../PortafolioUST/wp-content/plugins/encuesta/includes/encuesta3.php">Redireccionar encuesta numero 3</a>
<?php
}
function botonEncuesta4(){
?>
<a   class="encta_button" href="../../PortafolioUST/wp-content/plugins/encuesta/includes/encuesta4.php">Redireccionar encuesta numero 4</a>
<?php
}
function botonEncuesta5(){
?>
<a   class="encta_button" href="../../PortafolioUST/wp-content/plugins/encuesta/includes/encuesta2.php">Redireccionar encuesta numero 2</a>
<?php
}
function en_listar_Encuesta2(){
    global $wpdb;
    
    
    
    
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      
    <div class="">
        <table class="table table-striped table-bordered" id="example">
            <br>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Nombre</th>
                                <th>Ficha</th>
                                <th>Programa</th>
                                <th>Pregunta 1</th>
                                <th>Pregunta 2</th>
                                <th>Pregunta 3</th>
                                <th>Pregunta 4</th>
                                <th>Pregunta 5</th>
                                <th>Proximos temas</th>
                                <th>Comentarios / Recomendaciones</th>
                            </tr>
                        </thead>
            <tbody>
                <?php
                $resultados = $wpdb->get_results('SELECT * FROM encuesta_2_pys');           
                  foreach ($resultados as $us) {
                                ?>        
                      <tr>
                        <td><?php echo $us ->id; ?></td>
                        <td><?php echo $us->fecha; ?></td>
                        <td><?php echo $us->nombre; ?></td>
                        <td><?php echo $us->ficha; ?></td>
                        <td><?php echo $us->programa; ?></td>
                        <td><?php switch($us->p1){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Excelente';break; }?></td>
                        <td><?php switch($us->p2){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Excelente';break; }?></td>
                        <td><?php switch($us->p3){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Excelente';break; } ?></td>
                        <td><?php switch($us->p4){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Excelente';break; } ?></td>
                        <td><?php switch($us->p5){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Excelente';break; } ?></td>
                        <td><?php echo $us -> p6; ?></td>
                        <td><?php echo $us->Comentarios; ?></td>
                      </tr>
                        <?php
                        }
                        ?>
            </tbody>
          </table>
    </div>
    <div class="container">
                <h4>Ejemplo 1 - Gráfica de barras</h4>  
                <canvas id="grafica"></canvas>
    </div>
            
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
        });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <?php $resultados2 = $wpdb->get_results('SELECT ficha , COUNT(*) as "contar" from encuesta_2_pys GROUP BY ficha;');   
    foreach($resultados2 as $f){
    $hola = ' "'.$f->ficha.'"';
    $contar = $f->contar;
    
    ?>
    <h4>Encuestas realizadas por la ficha <?php echo $f->ficha ;?>: <?php echo $f->contar; ?></h4>
    <script>
        // Obtener una referencia al elemento canvas del DOM
    const $grafica = document.querySelector("#grafica");
    // Las etiquetas son las que van en el eje X. 
    const etiquetas = [<?php echo $hola; ?>]
    // Podemos tener varios conjuntos de datos. Comencemos con uno
    const datosVentas2020 = {
        label: "Encuestas por ficha",
        data: [<?php echo $contar; ?>], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
        backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
        borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
        borderWidth: 1,// Ancho del borde
    };
    new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            labels: etiquetas,
            datasets: [
                datosVentas2020,
                // Aquí más datos...
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });
    </script>
    <?php }; ?>
    <?php 
}
function en_listar_Encuesta3(){
    global $wpdb;
    
    
    
    
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      
    <div class="">
        <table class="table table-striped table-bordered" id="example">
            <br>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha</th>
                                <th>Nombre</th>
                                <th>correo</th>
                                <th>Proyecto</th>
                                <th>Pregunta 1</th>
                                <th>Comentarios pregunta 1</th>
                                <th>Pregunta 2</th>
                                <th>Comentarios pregunta 2</th>
                                <th>Pregunta 3</th>
                                <th>Comentarios pregunta 3</th>
                                <th>Pregunta 4</th>
                                <th>Comentarios pregunta 4</th>
                                <th>Pregunta 5</th>
                                <th>Comentarios pregunta 5</th>
                                <th>Pregunta 6</th>
                                <th>Comentarios pregunta 6</th>
                                <th>Pregunta 7</th>
                                <th>Comentarios pregunta 7</th>
                                <th>Comentarios / Recomendaciones</th>
                            </tr>
                        </thead>
            <tbody>
                <?php
                $resultados = $wpdb->get_results('SELECT * FROM encuesta_3_pys_c');           
                  foreach ($resultados as $us) {
                                ?>        
                      <tr>
                        <td><?php echo $us ->id; ?></td>
                        <td><?php echo $us->fecha; ?></td>
                        <td><?php echo $us->nombre; ?></td>
                        <td><?php echo $us->correo; ?></td>
                        <td><?php echo $us->proyecto; ?></td>
                        <td><?php switch($us->p1){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Sobresaliente';break; }?></td>
                        <td><?php echo $us->comentario_p1; ?></td>
                        <td><?php switch($us->p2){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Sobresaliente';break; }?></td>
                        <td><?php echo $us->comentario_p2; ?></td>
                        <td><?php switch($us->p3){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Sobresaliente';break; } ?></td>
                        <td><?php echo $us->comentario_p3; ?></td>
                        <td><?php switch($us->p4){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Sobresaliente';break; } ?></td>
                        <td><?php echo $us->comentario_p4; ?></td>
                        <td><?php switch($us->p5){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Sobresaliente';break; } ?></td>
                        <td><?php echo $us->comentario_p5; ?></td>
                        <td><?php switch($us->p6){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Sobresaliente';break; } ?></td>
                        <td><?php echo $us->comentario_p6; ?></td>
                        <td><?php switch($us->p7){ case 1: echo 'malo'; break; case 2: echo 'regular'; break; case 3: echo 'aceptable'; break; case 4: echo 'bueno'; break; case 5: echo 'Sobresaliente';break; } ?></td>
                        <td><?php echo $us->comentario_p7; ?></td>
                        <td><?php echo $us->Comentarios; ?></td>
                      </tr>
                        <?php
                        }
                        ?>
            </tbody>
          </table>
    </div>
    <div class="container">
                <h4>Ejemplo 1 - Gráfica de barras</h4>  
                <canvas id="grafica"></canvas>
    </div>
            
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
        });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <?php $resultados2 = $wpdb->get_results('SELECT COUNT(*) as "contar" from encuesta_2_pys');   
    foreach($resultados2 as $f){
    $contar = $f->contar;
    
    ?>
    <h4>Encuestas realizadas: <?php echo $f->contar; ?></h4>
    <script>
        // Obtener una referencia al elemento canvas del DOM
    const $grafica = document.querySelector("#grafica");
    // Las etiquetas son las que van en el eje X. 
    const etiquetas = ["Encuestas hechas por clientes"]
    // Podemos tener varios conjuntos de datos. Comencemos con uno
    const datosVentas2020 = {
        label: "Encuestas por ficha",
        data: [<?php echo $contar; ?>], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
        backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
        borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
        borderWidth: 1,// Ancho del borde
    };
    new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            labels: etiquetas,
            datasets: [
                datosVentas2020,
                // Aquí más datos...
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });
    </script>
    <?php }; ?>
    <?php 
}
function en_listar_Encuesta4(){
    global $wpdb;
    
    
    
    
    ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/v/dt/dt-1.12.1/datatables.min.css"/>
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
      
    <div class="">
        <table class="table table-striped table-bordered" id="example">
            <br>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Fecha de la actividad</th>
                                <th>Hora de la actividad</th>
                                <th>Ficha</th>
                                <th>Cantidad de aprendices</th>
                                <th>Tipo de actividad</th>
                                <th>Area</th>
                                <th>Tiempo estimado</th>
                                <th>Objetivo</th>
                                <th>Nombre instructor</th>
                                <th>Cedula</th>
                            </tr>
                        </thead>
            <tbody>
                <?php
                $resultados = $wpdb->get_results('SELECT * FROM encuesta4');           
                  foreach ($resultados as $us) {
                                ?>        
                      <tr>
                        <td><?php echo $us ->id; ?></td>
                        <td><?php echo $us->fecha; ?></td>
                        <td><?php echo $us->hora; ?></td>
                        <td><?php echo $us->ficha; ?></td>
                        <td><?php echo $us->cantidad; ?></td>
                        <td><?php switch($us->actividad){ case 1: echo 'Solicitud de Equipos'; break; case 2: echo 'Transferencia de conocimiento'; break; case 3: echo 'Workshop'; break; case 4: echo 'Otras'; break;}?></td>
                        <td><?php switch($us->area){ case 1: echo 'Fabrica de software'; break; case 2: echo 'Prueba de software'; break;}?></td>
                        <td><?php echo $us->estimado.' horas'; ?></td>
                        <td><?php echo $us->objetivo; ?></td>
                        <td><?php echo $us->nombre; ?></td>
                        <td><?php echo $us->cedula; ?></td>
                      </tr>
                        <?php
                        }
                        ?>
            </tbody>
          </table>
    </div>
    <div class="container">
                <h4>Ejemplo 1 - Gráfica de barras</h4>  
                <canvas id="grafica"></canvas>
    </div>
            
    
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
      <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>
    
    <script>
    $(document).ready(function() {
        $('#example').DataTable({
        "language": {
        "url": "//cdn.datatables.net/plug-ins/1.10.15/i18n/Spanish.json"
        }
        });
        });
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>
    <?php $resultados2 = $wpdb->get_results('SELECT COUNT(*) as "contar" from encuesta4 ');   
    foreach($resultados2 as $f){
    $contar = $f->contar;
    
    ?>
    <h4>Encuestas realizadas: <?php echo $f->contar; ?></h4>
    <script>
        // Obtener una referencia al elemento canvas del DOM
    const $grafica = document.querySelector("#grafica");
    // Las etiquetas son las que van en el eje X. 
    const etiquetas = ["Encuestas hechas por clientes"]
    // Podemos tener varios conjuntos de datos. Comencemos con uno
    const datosVentas2020 = {
        label: "Encuestas por fabrica",
        data: [<?php echo $contar; ?>], // La data es un arreglo que debe tener la misma cantidad de valores que la cantidad de etiquetas
        backgroundColor: 'rgba(54, 162, 235, 0.2)', // Color de fondo
        borderColor: 'rgba(54, 162, 235, 1)', // Color del borde
        borderWidth: 1,// Ancho del borde
    };
    new Chart($grafica, {
        type: 'bar',// Tipo de gráfica
        data: {
            labels: etiquetas,
            datasets: [
                datosVentas2020,
                // Aquí más datos...
            ]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }],
            },
        }
    });
    </script>
    <?php }; ?>
    <?php 
    }