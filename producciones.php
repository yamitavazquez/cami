<?php

// aca digo que boton del menú es el que está activo
$nav_activo = 'producciones';

// aca pongo el titulo
$titulo = 'Viajes de Camila Mainetti;';

include "header.php";

// visita https://getbootstrap.com/docs/5.0/layout/grid/
// para ver las clases utilizadas
?>

<div class="container"> 
 <div class="text">
    <br>
    <h1 class="text-center pt-5">
        Producciones 
    </h1>
    <hr>
<div class="p-5 fs-6">
  Las producciones son un proceso creativo que se va gestando con un montón de trabajo previo hacia adentro, invisible, que se materializa luego en lo que se comparte hacia afuera. Son momentos de trabajo en equipo y de mucha gestión y organización de diferentes engranajes que se articulan para el funcionamiento de algo más grande.
</div>
</div>   
    <div class="">
        <div class="row">
            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center">
                Cierres de año
                </h3>                
                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 2000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/producciones/cierres_de_ano';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                <div class="alert text">
               Me gusta llamarlos Celebraciones porque son un momento de alegría y disfrute donde lxs alumnxs de las clases regulares comparten con su gente querida el trabajo desarrollado durante todo el año. Es un momento de fiesta y gratitud por todo lo vivenciado, una instancia de mucho crecimiento porque nos brindamos generosamente a la máxima expresión.
                </div>
            </div>
            <div class="col-md-6 col-lg-4 py-1">
                <h3 class="text-center">
                    Participaciones
                </h3>
                 <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 2000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/producciones/Proyectosparticipaciones';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>                
                <div class="alert text">
                  En su mayoría en proyectos de folklore y danza contemporánea en los que bailé: “Alto Menjunje” dirigido por Antulio Pozzio Hidalgo; “Resonar Urbano” dirigido por Omar Silva; “Entre un Deseo” dirigido por Florencia Riafrecha; “Laboratorio Una Constante” dirigido por Jesús Guiraldi.
                </div>
            </div>
            <div class="col-md-3 d-lg-none"></div>
            <div class="col-md-6 col-lg-4 py-1">
                 <h3 class="text-center">
                    Kaira Siló 
                </h3>
                <?php
                // por defecto no los muestra aca te pongo como ejemplo que los muestre (las barritas de abajo)
                $mostrar_indicators = false;
                // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                $milisegundos_intervalo = 2000; // OJO 1000 ms, o sea 1 seg
                // aca le digo que la carpeta de las imagenes del slider estan en img/encuentros/Campamentos
                $carpeta = 'img/producciones/Kaira';
                // y al incluir carousel el codigo hace la magia
                include "carousel.php";
                ?>
                <div class="alert text">
                 Proyecto de danza y percusión africana que formé y dirigí durante 2016/17/18. Fue la exploración e integración del material que vengo investigando desde hace años, llevarlo a escena con mucho corazón y mostrarlo en distintas salas y eventos de la ciudad de La Plata.
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