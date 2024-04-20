<?php
/*
@author LxingA
@project SocASF
@name Template
@description Definición del Lector de Archivos en la Carpeta Pública del Proyecto
@date 19/04/24 18:00
*/
define("DIR_PUBLIC",(__DIR__ . "/public"));

if( isset($_GET["key"]) ){
    if( !preg_match("/^[0-9a-z]{8,9}$/",$_GET["key"]) ) exit("El identificador del recurso dado, no cumple con el formato establecido");
    elseif( !is_file(DIR_PUBLIC . "/" . substr($_GET["key"],0,8)) || !file_exists(DIR_PUBLIC . "/" . substr($_GET["key"],0,8)) ) exit("El recurso con ID \"". $_GET["key"] ."\" no existe en la aplicación");
    else{
        switch(substr($_GET["key"],8,1)){
            case "c":
                $mime = "text/css";
            break;
            case "s":
                $mime = "text/javascript";
            break;
            default:
                $mime = mime_content_type(DIR_PUBLIC . "/" . $_GET["key"]);
            break;
        }
        header("Content-Type: $mime");
        header("Content-Length: " . filesize(DIR_PUBLIC . "/" . $_GET["key"]));
        if(!@readfile(DIR_PUBLIC . "/" . substr($_GET["key"],0,8))) exit("No se pudo leer el recurso solicitado, intentelo de nuevo");
    }
}else exit("No se ha especificado la identificación única del recurso para obtenerlo para la aplicación");

?>