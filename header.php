<!doctype html>
<html lang="es">

<?php
// ESTE CODIGO DE ARRIBA ES PARA QUE SI TE OLVIDAS DE DECLARAR ALGUNA VARIABLE 
// NO TE SALTE ERROR Y TE VUELVAS LOCA
if (!isset($titulo)) {
    $titulo = '';
}
$cabecera_cargada = true;
?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="Yama Comunicación" content="Afro Camila Mainetti">
    <title>
        <?php echo $titulo; ?>
    </title>

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

    <!-- Favicons -->
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon-32x32.png" sizes="32x32" type="image/png">
    <link rel="icon" href="/docs/5.0/assets/img/favicons/favicon.ico">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles -->
    <link href="css/navbar-top-fixed.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/footer.css" rel="stylesheet">
    <link href="css/df.css" rel="stylesheet">
    <!-- iconos -->
    <link href="css/bs-icons/bootstrap-icons.css" rel="stylesheet">
</head>

<body>

<?php
    // AHORA INCLUYO navbar.php (es lo mismo que pegar todo el codigo del archivo)
    include "navbar.php";
?>