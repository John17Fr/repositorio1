<?php 
/**
 * Plugin Name:       Encuesta Sena
 * Plugin URI:        https://www.sena.edu.co/es-co/Paginas/default.aspx
 * Description:       Agregue fácil y rápidamente los resultados de los cuestionarios y encuestas a su sitio web.
 * Version:           1.0
 * Requires at least: 5.8
 * Requires PHP:      7.4
 * Author:            Unidad de Servicios Tecnológicos - CESGE SENA
 * Author URI:        https://github.com/
 * License:           GPL v1 or later
 * License URI:       https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain:       GeneradorResultadosQSM
 */

require_once plugin_dir_path(__FILE__) . 'includes/vistaEncuesta.php';


// Create the shortcode
add_shortcode('show_user_Encuesta', 'en_Crear_Encuesta');
add_shortcode('show_user_botonEncuesta1', 'botonEncuesta1');
add_shortcode('show_user_botonEncuesta2', 'botonEncuesta2');
add_shortcode('show_user_botonEncuesta3', 'botonEncuesta3');
add_shortcode('show_user_botonEncuesta4', 'botonEncuesta4');
?>