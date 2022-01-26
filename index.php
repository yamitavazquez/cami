<?php

/**
 * -----------------------------------------------------------------------------------
 * 
 * EN ESTA CABECERA DECLARAMOS TODAS LAS VARIABLES QUE VAS A UTILIZAR
 * COMO SOLO HAY UN ARCHIVO CON ALGUNOS TAG (link, menu, etc)
 */
// aca pongo el link que esta activo (por las clases css de los links del navbar)
$nav_activo = 'home';

// aca pongo el titulo de la pagina (cada pagina puede tener un titulo distinto)
$titulo = 'P&aacute;gina de inicio';

/**
 * ACA SE TERMINAN LAS VARIABLES QUE UTILIZAN LOS ARCHIVOS INCLUIDOS
 * -----------------------------------------------------------------------------------
 */

// lo de abajo es lo mismo que copiar todo el codigo del archivo header.php y pegarlo acá
include "header.php";
// si te fijas en header.php tambien incluye (al final) navbar.php (la barra de navegacion)

/**
 * ****************************************************************************************
 * 
 * ACA EMPIEZA EL CODIGO DE LA PAGINA ACTUAL
 * QUE PODES MODIFICAR TRANQUILAMENTE SIN TOCAR LA CABECERA, NI MENU, ETC
 * 
 * ****************************************************************************************
 */
// la etiqueta de abajo es para terminar php, y empezar html
// todo lo que se pone fuera de php se ejecuta en el navegador
?>

<div class="">
    <div class="cont-img">
        <img class="position-relative w-100" alt="Playa Mar Azul vista dron" src="img/home/playadron.jpg">
        <div class="centrado w-100">
            <div class="row mx-0">
                <div class="col-md-2"></div>
                <div class="col-md-4 text-center px-5 py-1">
                <!-- <div class="col-md-6 text-end px-5"> -->
                  <!--  <button type="button" class="btn btn-outline-light">
                        CLASES
                    </button>
                </div>
                <div class="col-md-4 text-center px-5 py-1">
                <!-- <div class="col-md-6 text-start px-5"> -->
                    <!--<button type="button" class="btn btn-outline-light">
                        VIAJES
                    </button>
                </div> -->
                <div class="col-md-2"></div>
            </div>
        </div>
    </div>
</div>
<br><br>

<div class="container">
    <div class="py-3">
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-2 col-xxl-2">

            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-xxl-4">
                <div class="">
                    <div class="card-header">
                       NOVEDADES
                    </div>
                    <div class="card-body">
                         <!--<h5 class="card-title">
                        Por Verona Demaestri
                        </h5>-->
                        <p>
                            Laboratorio de Técnica Alexander y Danza Africana, un espacio en el que nos damos permiso para explorar con tiempo los movimientos, y observar. 
                            <a href="novedades.php" class="text-muted"><br>Leer m&aacute;s</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-xxl-4">
                <img class="img-fluid" alt="imagen Camila" src="img/bio/alexanderbio.png">
            </div>
            <div class="col-md-1 col-lg-2 col-xl-2 col-xxl-2">
                
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="py-3">
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-2 col-xxl-2">

            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-xxl-4">
                <div class="">
                    <div class="card-header">
                        BIOGRAFIA DE CAMILA MAINETTI
                    </div>
                    <div class="card-body">
                         <!--<h5 class="card-title">
                        Por Verona Demaestri
                        </h5>-->
                        <p>
                            Lleg&oacute; a este mundo el año en que reverdec&iacute;a el 
                            pa&iacute;s en democracia. Camila Mainetti naci&oacute; el 16 de 
                            febrero de 1983 y su infancia se desplegó en Villa Elisa.
                            <a href="bio.php" class="text-muted"><br>Leer m&aacute;s</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-xxl-4">
                <img class="img-fluid" alt="imagen Camila" src="img/home/banner_bio.jpg">
            </div>
            <div class="col-md-1 col-lg-2 col-xl-2 col-xxl-2">
                
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="py-3">
        <div class="row">
            <div class="col-md-1 col-lg-2 col-xl-2 col-xxl-2">

            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-xxl-4">
                <div class="">
                    <div class="card-header">
                        VIAJES DE FORMACIÓN
                    </div>
                    <div class="card-body">
                        <!--<h5 class="card-title">
                        La danza y la cultura
                        </h5>-->
                        <p>
                        Los viajes fueron experiencias contundentes e impregnantes de sentidos. Pisar tierra africana fue sumergirme una y otra vez.
                            <a href="viajes.php" class="text-muted"><br>Leer m&aacute;s</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-5 col-lg-4 col-xl-4 col-xxl-4">
                <img class="img-fluid" alt="imagen Camila con maestro africano" src="img/bio/maestroafricano.jpg">
            </div>
            <div class="col-md-1 col-lg-2 col-xl-2 col-xxl-2">
                
            </div>
        </div>
    </div>
</div>

<?php
// la etiqueta de arriba es para iniciar php 
// todo lo que se ejecuta despues de esto es en el servidor y no en el navegador
/**
 * ****************************************************************************************
 * 
 * ACA TERMINA EL CODIGO DE LA PAGINA ACTUAL
 * 
 * ****************************************************************************************
 */

// y despues de todo el codigo de esta pagina incluyo el footer
include "footer.php";


/**
 * ACA ABAJO TE DEJO UNA AYUDA EN CASO DE QUERER CAMBIAR ESTILOS
 * p-(1 al 5) padding
 * m-(1 al 5) margin
 * w-100 ancho 100%
 * se pueden combinar con tamaños de pantalla y tambien x (left y right) o y (top y bottom)
 * (p-sm-1) padding 1 en pantallas chicas
 * (py-xl-3) padding 3 arriba y abajo en pantallas grandes
 * 
 * ...PARA BOTONES:
 * https://getbootstrap.com/docs/5.0/components/buttons/
 * 
 * ...PARA GRILLA (dividir el ancho de la pantalla en 12)
 * https://getbootstrap.com/docs/5.0/layout/grid/
 * 
 */