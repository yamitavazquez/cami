<?php

// ESTE CODIGO DE ARRIBA ES PARA QUE SI TE OLVIDAS DE DECLARAR ALGUNA VARIABLE 
// NO TE SALTE ERROR Y TE VUELVAS LOCA
if(!isset($nav_activo)){
    $nav_activo= '';
}

?>

<nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">
            <img src="marca (1).png" alt="logo Camila Mainetti" title="Inicio">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-0 mb-2 mb-md-0 ms-md-auto">
                <li class="nav-item">
                    <a class="nav-link<?php echo ($nav_activo == 'bio') ? ' active" aria-current="page' : ''; ?>" href="bio.php">
                        Bio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php echo ($nav_activo == 'clases') ? ' active" aria-current="page' : ''; ?>" href="clasesprueba.php">
                        Clases
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php echo ($nav_activo == 'viajes') ? ' active" aria-current="page' : ''; ?>" href="viajes.php">
                        Viajes
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php echo ($nav_activo == 'producciones') ? ' active" aria-current="page' : ''; ?>" href="producciones.php">
                        Producciones
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link<?php echo ($nav_activo == 'ademas') ? ' active" aria-current="page' : ''; ?>" href="ademas.php">
                        Además
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
</div>

<script src="js/bootstrap.bundle.min.js"></script>