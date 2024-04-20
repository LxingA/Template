<?php
/*
@author LxingA
@project SocASF
@name Template
@description Componentes Esenciales para la Estructura de la Plantilla
@date 19/04/24 18:30
*/

/** Definición de la Estructura HTML de la Plantilla */
function ck_func_header_html(string $render): string {
    return (<<<EOF
    <!DOCTYPE html>
    <html data-bs-theme="light" version="1.0.0" author="LxingA" lang="es" oncontextmenu="return false" ondragstart="return false" onselectstart="return false">
        <head>
            <meta charset="utf8"/>
            <meta name="viewport" content="initial-scale=1,width=device-width,user-scalable=no"/>
            <title>Nodo del Servidor - SocASF [LxingA]</title>
            <link rel="icon" href="/file.php?key=84e099f6" type="image/x-icon"/>
            <link rel="stylesheet" href="/file.php?key=72fd0893c" type="text/css"/>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" type="text/css"/>
        </head>
        <body>
            $render
            <script src="/file.php?key=24c7dddas" type="text/javascript"></script>
            <script type="text/javascript">
                /** Código Implementado por LxingA el 19/04/24 08:30PM */
                const auto = window["matchMedia"]("(prefers-color-scheme:dark)")["matches"];
                const logo = document["getElementById"]("image_logo_current");
                let current = document["documentElement"]["getAttribute"]("data-bs-theme") == "light";
                document["getElementById"]("ck_button_theming")["addEventListener"]("click",(\$this) => {
                    current = (!current);
                    document["documentElement"]["setAttribute"]("data-bs-theme",(current ? "light" : "dark"));
                    const icon = \$this["target"]["children"][0];
                    logo["src"] = "/file.php?key=" + (current ? "e14f92bf" : "33847b02");
                    icon["classList"]["remove"]("fa-sun","fa-moon");
                    icon["classList"]["add"](current ? "fa-sun" : "fa-moon");
                });
            </script>
        </body>
    </html>
    EOF);
}

/** Definición de la Cabecera de la Plantilla */
function ck_func_header_template(): string {
    return (<<<EOF
    <div class="container">
        <header class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
            <a class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none" href="/">
                <img id="image_logo_current" class="bi me-2" src="/file.php?key=e14f92bf" width="64"/>
                <span class="fs-4">
                    Índice Global
                </span>
            </a>
            <div class="nav col-12 col-md-auto mb-2 justify-content-center mb-md-0"/>
            <div class="col-md-3 text-end">
                <button class="btn btn-outline-primary me-2" type="button" id="ck_button_theming">
                    <i class="fa-regular fa-sun"></i>
                </button>
            </div>
        </header>
    </div>
    EOF);
}

/** Definición del Pie de Página de la Plantilla */
function ck_func_footer_template(): string {
    $year = (date("Y",(time())));
    return (<<<EOF
    <footer class="py-3 my-4">
        <p class="text-center text-body-secondary">
            &copy; 2012 ~ $year - <b><a href="https://l.wl.co/l?u=https%3A%2F%2Fwww.facebook.com%2Fiexpressmty" target="_blank">CodeInk</a></b> un negocio para creación de sitios web y una imprenta digital [<b><a href="https://l.wl.co/l?u=https%3A%2F%2Fgithub.com%2FLxingA" target="_blank">LxingA</a></b>]
        </p>
    </footer>
    EOF);
}

?>