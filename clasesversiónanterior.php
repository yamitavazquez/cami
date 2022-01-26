<?php

$nav_activo = 'clases';
// aca pongo el titulo de la pagina (cada pagina puede tener un titulo distinto)
$titulo = 'Camila Mainetti::Clases;';

include "header.php";

// visita https://getbootstrap.com/docs/5.0/layout/grid/
// para ver las clases utilizadas
?>

<div class="container text">
     <br>
    <h1 class="text-center pt-6">
        <br>Clases regulares<br>
    </h1>
    <hr>
     <div class="p-5 fs-6">
     Las clases regulares son un espacio comprometido y constante de práctica individual y colectiva. Es una propuesta amplia que brinda diferentes herramientas para despertar la sensibilidad y escucha corporal, con la finalidad de habitarnos de una manera más cómoda, y así movernos con mayor disponibilidad y profundidad.
 </div>   
     <div class="text">
        <div class="row">
              <div class="p-5 fs-6">
                <h3>Adultxs</h3><br>
                <?php
                // aca le digo que la carpeta de la imagenes esta en (img/viajes)
                 $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 3000;
                $carpeta = "./img/clases/adultas";
                // incluyo el codigo carousel (que se encarga de todo)
                include "carousel.php";
                ?>
                <br>              
                <p class="fs-6 text">
                 Las clases para adultxs están organizadas en grupos que comparten un proceso anual. Están diseñadas de modo paulatino para permitir profundizar en la práctica, en el arte, en la disciplina. Allí se desarrolla la metodología de trabajo que (más allá del lenguaje específico de la danza africana) integra diversas herramientas que nos brindan la posibilidad de una exploración cotidiana, en un encuadre afectuoso, accesible y posible para todxs.                
                </p>
                <div>
                    <a href="https://www.youtube.com/watch?v=oRRZV2BjL84&t=56s" target="blank">
                    <button type="button" class="btn btn-outline-dark">
                    Ver Video</button> 
                    </a>
                </div>
                <br>
            </div>
            <div class="col-md-6 text-center px-5 py-1">
                <h3>Ni&ntilde;xs</h3><br>
                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 3000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/clases/infantiles';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                <p class="fs-6 text">
                    <br>
                   El espacio con niñxs es, ante todo, un espacio de disfrute y juego donde, a través del movimiento, la música y el canto, compartimos encuentros de integración, expresión y comunicación. El trabajo con el ritmo es el pilar fundamental de la clase. La propuesta apunta a desarrollar la confianza y escucha sensible de lxs niñxs, donde las individualidades se expresan y potencian en el encuentro con lxs otrxs.
                </p><br>
                <div>
                    <a href="https://www.youtube.com/watch?v=Oc6hZyh4Il4" title="video en youtube clases niñas" target="blank">
                    <button type="button" class="btn btn-outline-dark">
                    Ver Video</button> 
                    </a>
                </div>
            </div>
        </div>        
    </div>

    <!--
    <div class="">
        <div class="row">
            <div class="col-md-6 py-1">
                <h3 class="text-center fs-1">ADULTAS</h3>
                <?php
                /**
                 * EN CASO DE QUE QUIERAS EPIGRAFE EN EL SLIDER PODES HACERLO ASI
                 * EL CODIGO ES ((include "carousel_epigrafe.php";)) en ves de carousel.php
                 * LA UNICA DIFERENCIA ES QUE DEBES DECLARAR LOS NOMBRES DE LAS FOTOS Y EPIGRAFES
                 * $carpeta, $mostrar_indicators, $milisegundos_intervalo tambien estan (igual que carousel.php)
                 */
                // declaras los nombres de las fotos de esta manera
                // entre comillas va el nombre de la foto, separada por coma
                $fotos = [
                   "Adultas1.jpg",
                    "adultaspiso.jpg",
                    "CAMI-9.jpg",
                    "Danza3.jpg",
                    "Danza11 - copia.jpg",
                    "danzaafro.jpg",
                    "rondadepie.jpg"
                ];
                // y declaras los epigrafes de esta manera
                // entre comillas va el texto del epigrafe, separado por coma (podes poner html tambien)
                // la cantidad de fotos y epigrafes es la misma (Y DEBE SER ASI)
                // por mas que haya salto de linea no hay problema
                // porque el valor esta entre comillas (asi que no hay error)
                // lo unico que tenes que tener en cuenta es que deben ser entre "" separados por ,
                $epis = [
                    "texto de la foto Adultas1",
                    "adultaspiso",
                    "CAMI",
                    "Danza3",
                    "Danza11",
                    "danzaafro",
                    "rondadepie"
                ];
                // aca le digo que la carpeta de la imagenen esta en (img/viajes)
                $carpeta = "./img/clases/adultas";
                // para que no muestre las barritas de abajo
                $mostrar_indicators = false;
                // que cambie la foto cada 2 segundos
                $milisegundos_intervalo = 2000;
                // incluyo el codigo carousel (con epigrafe)
                include "carousel_epigrafe.php";
                ?>
                 <p class="fs-6">
                    El texto que le quieras poner con class fs-6 <code>el mas chico</code>
                </p>

            </div>
            <div class="col-xl-6 text-end text-warning px-5 py-1">
                <h3>INFANTIL/NI&Ntilde;XS</h3>
                <?php
                // aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = true;
                // cada 1 segundo
                $milisegundos_intervalo = 2000;
                // la carpeta de las imagenes de este slider estan en img/encuentros/Campamentos
                $carpeta = 'img/clases/infantiles';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
            </div>


        </div>
    </div>
</div>
-->
<?php
include "footer.php";

// si queres ver...
// https://getbootstrap.com/docs/5.0/components/carousel/