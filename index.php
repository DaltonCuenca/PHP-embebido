<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="src/css/index.css">
    <link rel="stylesheet" href="src/css/normalize.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">

</head>

<body>

    <!-- COMPONENTE NAVBAR -->
    <?php
    $itemsSidebar = array(
        "Titulo" => "Administrador",
        "img" => "src/img/logo.jpg",
        "Up" =>
        array(
            array(
                "nombre" => "Home",
                "href" => "home.php",
                "svg" => "M575.8 255.5c0 18-15 32.1-32 32.1h-32l.7 160.2c0 2.7-.2 5.4-.5 8.1V472c0 22.1-17.9 40-40 40H456c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1H416 392c-22.1 0-40-17.9-40-40V448 384c0-17.7-14.3-32-32-32H256c-17.7 0-32 14.3-32 32v64 24c0 22.1-17.9 40-40 40H160 128.1c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2H104c-22.1 0-40-17.9-40-40V360c0-.9 0-1.9 .1-2.8V287.6H32c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z",
            ),
            array(
                "nombre" => "Eventos",
                "href" => "eventos.php",
                "svg" => "",
            ),
        ),
        "Down" =>
        array(
            "form" => "post",
            array(
                "nombre" => "Logout",
                "name" => "logout",
                "class" => "logout",
                "Elementclass" => "boton",
                "elemento" => "button",
            ),
        )
    );
    include 'src/components/navbar.php';
    generarMenuLateral($itemsSidebar, 'ul');
    ?>
    <!-- FIN COMPONENTE NAVBAR -->
    <main>
        lorem*1000
    </main>
</body>

</html>