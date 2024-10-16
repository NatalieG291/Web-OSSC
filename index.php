<?php

$pagina = "secciones/" . $_REQUEST["Pagina"] . ".php";

if (strrpos($pagina, 'Ejemplo')) {
    $estilos = 'styles/Ejemplo.css';
    $titulo = 'ejemplo';
} elseif (strrpos($pagina, 'Inicio')) {
    $estilos = 'styles/inicio.css';
    $titulo = 'Inicio';
} elseif (strrpos($pagina, 'Nosotros')) {
    $estilos = 'styles/nosotros.css';
    $titulo = 'Nosotros';
} elseif (strrpos($pagina, 'Productos')) {
    $estilos = 'styles/productos.css';
    $titulo = 'Productos';
}
?>
<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <title><?php echo $titulo; ?></title>
    <link rel="stylesheet" href="styles/menu.css" /> <!-- NO EDITAR-->
    <link rel="stylesheet" href="styles/form.css" /> <!-- NO EDITAR-->
    <link rel="stylesheet" href="styles/fonts.css" /> <!-- NO EDITAR-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />
    <link rel="stylesheet" href="<?php echo $estilos; ?>" /> <!-- NO EDITAR-->
    <?php if ($js <> '') {
        echo $js;
    }?>
</head>

<body style="overflow: hidden">
    <!-- NO EDITAR -->
    <?php include("secciones/menu.php"); ?>

    <?php include($pagina); ?>

    <?php include("secciones/email.php"); ?>
    <?php include("secciones/footer.php"); ?>

    <!---->


    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script type="text/javascript" src="lib/form.js"></script>
    <script type="text/javascript" src="lib/menu.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js"
        integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy"
        crossorigin="anonymous"></script>
    <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>

</html>