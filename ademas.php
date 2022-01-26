<?php

// aca digo que boton del menú es el que está activo
$nav_activo = 'ademas';

// aca pongo el titulo
$titulo = 'Afro Encuentros organizados por Camila Mainetti;';

include "header.php";

// visita https://getbootstrap.com/docs/5.0/layout/grid/
// para ver las clases utilizadas
?>

<div class="container text">
     <br>
    <h1 class="text-center pt-6">
      <br> Además<br>
    </h1>
    <hr>
     <div class="text-center p-5 fs-6 text">
  Experiencias por fuera del espacio de clases regulares que nutren y amplían nuestra práctica integral.
    </div>
    <div class="text">
        <div class="row">
            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center mt-5">
                    Convivencias<br>
                </h3>

                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 2000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/ademas/convivencias';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                <div class="alert">
                 Viajes grupales en los que acampamos en la naturaleza, donde nos brindamos más espacio y tiempo que el habitual, para conocernos e intercambiar. Son momentos de muchas charlas, comidas, música, danza y trabajo en equipo.
                </div>
            </div>
            <div class="col-md-6 col-lg-4 py-1">
                  <h3 class="text-center mt-5">
                    Ensayos
                </h3>
                 <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 2000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/ademas/ensayos';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                <div class="alert">
                   Momentos de entrenamiento intensivo de todo el aprendizaje y proceso anual, que busca ir más allá del trabajo coreográfico. 
                   A través del desarrollo de la paciencia y la confianza en lo transitado, nos sumergimos en el arte como poder transformador 
                  de nuestra vida cotidiana.
                </div>
            </div>
            <div class="col-md-3 d-lg-none"></div>
            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center mt-5">
                    Visitas de maestrxs
                </h3>
                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 2000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/ademas/visitas';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                <div class="alert">
                Fueron momentos promovidos desde la certeza de que no hay como la transmisión directa de un cuerpo que trae en sus gestualidades el folklore de todo un pueblo. Disfrutar de la experiencia inigualable de bailar y aprender con maestrxs africanxs (Mafila Kouyate, Issiaga Camara, Djanko Camara, Yousouff Koumbassa).
                </div>
            </div>
            <div class="col-md-3 d-lg-none"></div>
        </div>
   
</div>

<?php
include "footer.php";

// si queres ver...
// https://getbootstrap.com/docs/5.0/components/carousel/