<?php
/*
@author LxingA
@project SocASF
@name Template
@description Checador Local para la Inicialización de la Aplicación
@date 19/04/24 18:30
*/

if( version_compare(PHP_VERSION,"8.0.0","<") ) exit("La versión de su PHP es inferior a la requerida. Se requiere de una versión 8.0 para arriba");
elseif( !is_dir(DIR_PUBLIC) || !file_exists(DIR_PUBLIC) ) exit("Lo sentimos, el directorio con los recursos públicos de la aplicación no existe");

?>