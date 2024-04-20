<?php
/*
@author LxingA
@project SocASF
@name Template
@description Inicialización de la Aplicación de la Plantilla
@date 19/04/24 17:50
*/
define("DIR_PUBLIC",(__DIR__ . "/public"));
error_reporting(0);

//Incluir el Checador de la Aplicación
include_once(__DIR__ . "/check.php");

//Incluir los Componentes de las Plantillas para la Aplicación
include_once(__DIR__ . "/template.php");

$instance_template_header = ck_func_header_template();
$instance_template_footer = ck_func_footer_template();
if(isset($_GET["code"])){
    switch(intval($_GET["code"])){
        case 403:
            $title = "Prohíbido";
            $message = "Lo sentimos, no estás autorizado para acceder a este recurso";
        break;
        case 404:
            $title = "No Encontrado";
            $message = "Lo sentimos, no se encontró el recurso \"" . substr($_SERVER["REQUEST_URI"],1) . "\"";
        break;
        case 500:
            $title = "Servidor no Disponible";
            $message = "Lo sentimos, el servidor no se encuentra disponible";
        break;
        case 502:
            $title = "Mala Comunicación";
            $message = "Lo sentimos, el servidor no puede obtener información del origen";
        break;
        case 503:
            $title = "No Disponible";
            $message = "Lo sentimos, el servicio del servidor no se encuentra disponible por el momento";
        break;
        default:
            $title = "Error Desconocido";
            $message = "Lo sentimos, hubo un error desconocido a procesar lo solicitado, intentelo más tarde";
        break;
    }echo ck_func_header_html(render:<<<EOF
    $instance_template_header
    <div class="container col-xxl-8 px-4 py-5">
        <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
            <div class="col-10 col-sm-8 col-lg-6">
                <img src="/file.php?key=5dddbc71" class="d-block mx-lg-auto img-fluid" loading="lazy"/>
            </div>
            <div class="col-lg-6">
                <h1 class="display-5 fw-bold text-body-emphasis lh-1 mb-3">
                    $title
                </h1>
                <p class="lead">
                    $message
                </p>
                <div class="d-grid gap-2 d-md-flex justify-content-md-start">
                    <button class="btn btn-primary btn-lg px-4 me-md-2" type="button" onclick="window['open']('mailto:contacto@socasf.net','_self')">
                        Contacto
                    </button>
                </div>
            </div>
        </div>
    </div>
    $instance_template_footer
    EOF);
}else echo(ck_func_header_html(render:<<<EOF
$instance_template_header
<div class="px-4 pt-5 text-center border-bottom">
    <h1 class="display-4 fw-bold text-body-emphasis">
        Nodo Principal del Servidor
    </h1>
    <div class="col-lg-6 mx-auto">
        <p class="lead mb-4">
            usted está viendo la raíz de nuestros nodos principales del proyecto
        </p>
        <div class="d-grid gap-2 d-sm-flex justify-content-sm-center mb-5">
            <button class="btn btn-outline-secondary btn-lg px-4" type="button" onclick="window['open']('mailto:contacto@socasf.net','_self')">
                Contacto
            </button>
        </div>
    </div>
    <div class="overflow-hidden">
        <div class="container px-5">
            <img class="img-fluid border rounded-3 shadow-lg mb-4" src="/file.php?key=8d0886c5"/>
        </div>
    </div>
</div>
$instance_template_footer
EOF));

?>