<?php

// aca digo que boton del menú es el que está activo
$nav_activo = 'viajes';

// aca pongo el titulo
$titulo = 'Viajes África de Camila Mainetti;';

include "header.php";

// visita https://getbootstrap.com/docs/5.0/layout/grid/
// para ver las clases utilizadas
?>

<div class="container text">
    <br>
    <div class="text">
   <h1 class="text-center pt-6">
       <br> Viajes de formación<br>
    </h1>
    <hr>
     <div class="p-5 fs-6 text">
        Los viajes fueron experiencias contundentes impregnadas de sentidos. Pisar tierra africana fue sumergirme una y otra vez en la profundidad de una cultura donde, en permanente contacto con la naturaleza, prima la conciencia colectiva. Fue respirar entre raíces vivas y calientes que laten con un amplio sentido comunitario. Los viajes fueron hondas vivencias físico-espirituales que se volvieron cotidianas. Allí donde las palabras no pueden expresarlo todo.
    </div>
    <!--
    <h1 class="text-center fs-1">
        FIJATE BIEN EL HACK QUE HAGO EN LAS LINEAS 48 Y 70,
        SI LA PANTALLA ES ANCHA NO MUESTRA ESOS DIVS (que son para centrar)
    </h1>-->
    <div class="">
        <div class="row">
            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center">Senegal 2010</h3>
                <?php
                // aca le digo que la carpeta de la imagenes esta en (img/viajes)
                $carpeta = "./img/viajes/Senegal2010";
                // incluyo el codigo carousel (que se encarga de todo)
                include "carousel.php";
                ?>
                <div class="alert">
                   En el año 2010 viajé por primera vez al continente africano, y la cabeza se me partió en mil pedazos. Fue una experiencia en grupo que abrió mi mirada y potenció mi camino para siempre.
                </div>
            </div>

            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center">Senegal 2013</h3>
                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 3000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/viajes/Senegal2013';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                 <div class="alert">
                  Volver a Senegal fue una decisión que me pidió todo el cuerpo. Ya había una red de afecto que me esperaba y contenía, y también un tinte más preciso en el desarrollo de mi profesión como bailarina y docente de danza.
                </div>
            </div>
          <div class="col-md-3 d-lg-none">
                <p class="small">               
                </p>
            </div> 
            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center">Guinea 2019</h3> 
                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 3000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/viajes/guinea2019';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                 <div class="alert">
                 Varios años después volví al continente madre pero a otro país. Guinea te invita a desarrollar <em>beacoup de courage</em>: mucha intensidad, mucha velocidad, mucho cuerpo, mucho todo; tuve la posibilidad de conocer y formarme con lxs mejores artistxs del lugar, acompañada de una red de gente hermosa que estudian y trabajan en el desarrollo de la cultura guineana por todo el mundo.
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