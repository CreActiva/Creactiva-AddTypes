<?php
/**
 * Plugin Name: Permitir Jp2
 * Plugin URI: https://soycreactivo.com
 * Description: Plugin para permitir en medios de wordpress imágenes jp2. svg y psd
 * Version: 1.0.0
 * Author: Miguel Peña
 * Text Domain: permitir-jp2
*/
defined ('ABSPATH') or die ('¡No HACKS Man!');//bloquear acceso por url
function my_myme_types($mime_types){
   $mime_types['svg'] = 'image/svg+xml'; //Agregar extensión svg
   $mime_types['jp2'] = 'image/jp2'; //Agregar extensión jp2
   $mime_types['jpf'] = 'image/jp2';
   $mime_types['psd'] = 'image/vnd.adobe.photoshop'; //Agregar extensión psd
   return $mime_types;
}
add_filter('upload_mimes', 'my_myme_types', 1, 1);