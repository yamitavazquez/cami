<?php

$nav_activo = 'bio';

// aca pongo el titulo de la pagina (cada pagina puede tener un titulo distinto)
$titulo = 'Camila Mainetti::Biograf&iacute;';

include "header.php";

// visita https://getbootstrap.com/docs/5.0/layout/grid/
// para ver las clases utilizadas
?>

<div class="container text">
     <br><h1 class="text-center pt-6"><br>Novedades<br></h1>
    <hr>
    <div class="container text">    
    <div class="text">
        <div class="row">
                <div class="col-xl-6 px-5 py-1">                   
                    <div class="p-md-2 p-xxl-5"><br>
                    <h2 class="text-center">Seminario Intensivo<br>de acercamiento<br> a la danza africana</h2><br><br>
                        <p class="text-justify">                   
                        En diciembre de 2021 ofrecí un seminario intensivo para personas que tenían ganas de acercarse a la danza africana y que nunca la habían experimentado. Fue un fin de semana de mucha conexión con lo esencial que nos trae este lenguaje tan generoso, y fue potenciado con una propuesta integral de canto y movimiento.
                        </p>
                    </div>                
                 </div>
                <div class="col-xl-6 text-center px-5 py-1">
                    <div class="p-xl-5">
                         <?php
                    // aca le digo que la carpeta de la imagenes esta en (img/viajes)
                     $mostrar_indicators = false;
                    // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                    $milisegundos_intervalo = 3000;
                    $carpeta = 'img/novedades/seminario';
                    // incluyo el codigo carousel (que se encarga de todo)
                    include "carousel.php";
                    ?>
                    </div>
               </div>
            <!--valentín-->        
            <div class="col-xl-6 text-center px-5 py-1">
                <div class="p-xl-5">
                        <?php
                    // aca le digo que la carpeta de la imagenes esta en (img/viajes)
                     $mostrar_indicators = false;
                    // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                    $milisegundos_intervalo = 3000;
                    $carpeta = 'img/novedades/cierre2021';
                    // incluyo el codigo carousel (que se encarga de todo)
                    include "carousel.php";
                    ?>
                </div>
            </div>

            <div class="col-xl-6 px-5 py-1">
                <div class="p-md-2 p-xxl-5"><br>  <br>  
                    <h2 class="text-center">Cierre 2021</h2>
                     <p class="text-justify"><br>   
                     El cierre del 2021 fue con el gran jardín de gente que somos.
                     <br>Ese es el tesoro más grande que tengo: una hermosa red que se nutre año a año con música, danza, movimiento y salud. Celebramos la alegría de tenernos en una tarde relajada en la naturaleza, donde cada grupo compartió el trabajo desarrollado durante el año.
                     </p>
                    <br> <br>
                   <!-- <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=vllohRS-7JY target="blank">
                    <button type="button" class="btn btn-outline-dark">
                    Ver Video</button> 
                    </a>
                </div>botón ver video-->    

                </div>
            </div>
        </div>
    </div>
    <div class="text">
        <div class="row">
                <div class="col-xl-6 px-5 py-1">                   
                    <div class="p-md-2 p-xxl-5"><br>
                    <h2 class="text-center">Laboratorio de Técnica Alexander y Danza Africana</h2><br><br>
                        <p class="text-justify">                   
                        En este espacio de Técnica Alexander y Danza Africana, junto al Prof. Yamil Sfeir de 
                        <span><a href="https://asociaciontecnicaalexander.com.ar/" title="link a la asociacion de tecnica alexander" target="blank">AAPTA</a></span> exploramos conectar con la unidad cuerpo-mente desde los criterios y principios de la Técnica Alexander, investigando en lo que llamamos "uso" de cada unx; considerando los movimientos y gestos de la vida cotidiana como espacio de articulación con la danza africana, en la que los mismos están operando y resultan inspiradores para el despliegue del baile. 
                        </p>
                    </div>                
                 </div>
                <div class="col-xl-6 text-center px-5 py-1">
                    <div class="p-xl-5">
                         <?php
                    // aca le digo que la carpeta de la imagenes esta en (img/viajes)
                     $mostrar_indicators = false;
                    // por defecto milisegundos es 5000 (5 segs) para el paso de la foto, pero tambien lo podes cambiar
                    $milisegundos_intervalo = 3000;
                    $carpeta = 'img/clases/alexander';
                    // incluyo el codigo carousel (que se encarga de todo)
                    include "carousel.php";
                    ?>
                    </div>
               </div>
            <!--valentín-->        
            <div class="col-xl-6 text-center px-5 py-1">
                <div class="p-xl-5">
                    <img src="img/novedades/valentin/Valentin.png" alt="Valentín y Camila bailando" class="img-fluid" title="Valentín Rodríguez">
                </div>
            </div>
            <div class="col-xl-6 px-5 py-1">
                <div class="p-md-2 p-xxl-5"><br>  <br>  
                    <h2 class="text-center">Seminario Valentín Rodríguez</h2>
                     <p class="text-justify"><br>   
                    En septiembre de 2021 nos visitó Valentín Rodríguez. 
                    Bailarín, coreógrafo, docente de danza. 
                    Gran trabajador, detallista y amoroso, en permanente investigación, que nos vino a compartir 
                    su propuesta en un encuentro intensivo de danza africana y prácticas sensibles de movimiento.
                     </p>
                    <br> <br>
                      <div class="text-center">
                    <a href="https://www.youtube.com/watch?v=vllohRS-7JY target="blank">
                    <button type="button" class="btn btn-outline-dark">
                    Ver Video</button> 
                    </a>
                </div><!--valentín-->     

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php
include "footer.php";
