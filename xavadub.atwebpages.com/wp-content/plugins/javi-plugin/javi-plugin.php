<?php
/*
Plugin Name: Javi-plugin
Plugin URI: http://xavadub.atwebpages.com/
Description: Plugin de ejemplo del post de como crear un plugin en WordPress
Version: 1.0
Author: Javier Alberto
Author URI: http://xavadub.atwebpages.com/
License: GPL2
*/

defined('ABSPATH') or die("Bye bye");
define('JAVI_RUTA', plugin_dir_path(__FILE__));
include(JAVI_RUTA.'/includes/opciones.php');

function shortcode_test($atts = [], $content = null, $tag = ''){ 
    // --- ATRIBUTOS 
    $atts = array_change_key_case((array)$atts, CASE_LOWER); 
    // override default attributes with user attributes 
    $escape_atts = shortcode_atts([ 'title' => 'AlexMedina.net', 'id' => 'NULL'], $atts, $tag);
 
 
    // --- ACCESO BASE DE DATOS
    global $wpdb;
    //$mitabla = $wpdb->base_prefix."prueba";
    $mitabla = "c8GYXyE0_prueba";
 
    //si no pasamos variables no hay que usar prepare
    $results = $wpdb->get_results($wpdb->prepare("select * from $mitabla WHERE id=%d",$escape_atts["id"]));
 
    $tabla_resultados = "<br>";
    foreach ($results as $valor){
        $tabla_resultados =  $tabla_resultados . $valor->id  ." -> ".$valor->nombre."<br>";
    }
 
    // --- RESULTADO
    $res .= 'PARAMETROS => title:'.$escape_atts["title"].' | id:'.$escape_atts["id"].' <br>';
    $res .= 'RESULTADO SQL => '.$tabla_resultados.'<br>';
 
    return $res;
}
add_shortcode('test', 'shortcode_test');
?>