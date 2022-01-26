
<?php

// solo ejecuto el codigo si la cabecera esta cargada
if(!isset($cabecera_cargada) || $cabecera_cargada != true){
    exit();
}

if(!isset($mostrar_indicators)){
    $mostrar_indicators = false;
}
if(!isset($milisegundos_intervalo)){
    $milisegundos_intervalo = 5000;
}

if(!isset($carpeta)){
    exit("No se especifica la carpeta");
}else{
    if(substr($carpeta, strlen($carpeta)-1) != '/'){
        $carpeta.='/';
    }
}

$a = array();
//$carpeta = "./img/viajes/";
$path = $carpeta;
if(!is_dir($carpeta)){
    exit("No existe la carpeta ".$carpeta);
}
$carpeta_abierta = opendir($carpeta);

if(!isset($icarousel)){
    $icarousel=1;
}else{
    $icarousel++;
}
//$id_carousel = "car".time();
$id_carousel = "car".$icarousel;

while (false !== ($dir = readdir($carpeta_abierta))) {
    if (($dir != ".") && ($dir != "..") && ($dir != "Thumbs.db") && (!is_dir($carpeta . $dir))) {
        //if (stristr($dir, ".pdf"))
        $a[] = $dir;
    }
}
?>
<div id="<?php echo $id_carousel; ?>" class="carousel slide p-1" data-ride="carousel">
    <?php
    if($mostrar_indicators){
        ?>
        <div class="carousel-indicators">
            <?php
            for ($i = 0; $i < count($a); $i++) {
                $active = ($i == 0) ? ' active' : '';
                //echo '<li data-target="#'. $id_carousel .'" data-slide-to="' . $i . '" class="' . $active . '"></li>';

                echo '<button type="button" data-bs-target="#'.$id_carousel.'" ';
                echo ' data-bs-slide-to="'.$i.'" ';
                echo ($i == 0) ? ' class="active" aria-current="true" ' : ''; 
                echo 'aria-label="Slide '.($i+1).'"></button>';                
            }
            ?>
        </div>
        <?php
    }
    ?>
    
    <div class="carousel-inner">
        <?php
        for ($i = 0; $i < count($a); $i++) {
            $active = ($i == 0) ? ' active' : '';
            ?>
            <div class="carousel-item<?php echo $active; ?>">
                <img class="d-block w-100" src="<?php echo $path . $a[$i]; ?>" alt="">
                <?php
                /*
                  <div class="carousel-caption d-none d-md-block">
                  <h5>Picina cercada</h5>
                  <p>Desde aqu&iacute; puede ver las sierras.</p>
                  </div>
                 */
                ?>
            </div>
            <?php
        }
        ?>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#<?php echo $id_carousel; ?>" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Anterior</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#<?php echo $id_carousel; ?>" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Siguiente</span>
    </button>
</div>

<script>
    var myCarousel_<?php echo $id_carousel; ?> = document.querySelector('#<?php echo $id_carousel; ?>');
    var carousel_<?php echo $id_carousel; ?> = new bootstrap.Carousel(myCarousel_<?php echo $id_carousel; ?>, {
        interval: <?php echo $milisegundos_intervalo; ?>
    })
</script>

