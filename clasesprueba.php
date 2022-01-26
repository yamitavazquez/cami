<?php

// aca digo que boton del menú es el que está activo
$nav_activo = 'viajes';

// aca pongo el titulo
$titulo = 'Clases regulares de danza de Camila Mainetti;';

include "header.php";

// visita https://getbootstrap.com/docs/5.0/layout/grid/
// para ver las clases utilizadas
?>

<div class="container text">
    <br>
    <div class="text">
        <div class="p-5 fs-6 text">
        <h1 class="text-center pt-6">   
      <br>Clases regulares<br>
    </h1>
    <hr>
     <div class="p-5 fs-6">
     Las clases regulares son un espacio comprometido y constante de práctica individual y colectiva. Es una propuesta amplia que brinda diferentes herramientas para despertar la sensibilidad y escucha corporal, con la finalidad de habitarnos de una manera más cómoda, y así movernos con mayor disponibilidad y profundidad.
    </div>
    <!--
    <h1 class="text-center fs-1">
        FIJATE BIEN EL HACK QUE HAGO EN LAS LINEAS 48 Y 70,
        SI LA PANTALLA ES ANCHA NO MUESTRA ESOS DIVS (que son para centrar)
    </h1>-->
    <div class="">
        <div class="row">
            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center">Adultxs</h3><br>
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
                <div class="alert">           
                    <p class="fs-6 text">
                     Las clases para adultxs están organizadas en grupos que comparten un proceso anual. Están diseñadas de modo paulatino para permitir profundizar en la práctica, en el arte, en la disciplina. Allí se desarrolla la metodología de trabajo que (más allá del lenguaje específico de la danza africana) integra diversas herramientas que nos brindan la posibilidad de una exploración cotidiana, en un encuadre afectuoso, accesible y posible para todxs.                
                    </p>
                </div>
                <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=oRRZV2BjL84&t=56s" target="blank">
                    <button type="button" class="btn btn-outline-dark">
                    Ver Video</button> 
                    </a>
                </div>
            </div>

            <div class="col-md-6 col-lg-4 py-1">
             <h3 class="text-center">Ni&ntilde;xs</h3><br>
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
                <div class="alert">  
                  <br> 
                    <p class="fs-6 text">                      
                       El espacio con niñxs es, ante todo, un espacio de disfrute y juego donde, a través del movimiento, la música y el canto, compartimos encuentros de integración, expresión y comunicación. El trabajo con el ritmo es el pilar fundamental de la clase. La propuesta apunta a desarrollar la confianza y escucha sensible de lxs niñxs, donde las individualidades se expresan y potencian en el encuentro con lxs otrxs.
                    </p><br>
                </div>
                <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=Oc6hZyh4Il4" title="video en youtube clases niñas" target="blank">
                    <button type="button" class="btn btn-outline-dark">
                    Ver Video</button> 
                    </a>
                </div>
            </div>
            <div id="alexander" class="col-md-6 col-lg-4 py-1">
             <h3 class="text-center">Alexander</h3><br>
                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 3000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/clases/alexander';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                <div class="alert">
                       <br>
                    <p class="fs-6 text">                     
                       En este espacio de Técnica Alexander y Danza Africana, exploramos conectar con la unidad cuerpo-mente desde los criterios y principios de la técnica Alexander, investigando en lo que llamamos "uso" de cada unx; considerando los movimientos y gestos de la vida cotidiana como espacio de articulación con la danza africana, en la que los mismos están operando y resultan inspiradores para el despliegue del baile.
                    </p> 
                </div>
                <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=Oc6hZyh4Il4" title="video en youtube clases niñas" target="blank">
                    <button type="button" class="btn btn-outline-dark">
                    Ver Video</button> 
                    </a>
                </div>
            </div>
            <div class="col-md-3 d-lg-none"></div>
        </div>
    </div>
</div>
</div>
<?php
include "footer.php";

// si queres ver...
// https://getbootstrap.com/docs/5.0/components/carousel/