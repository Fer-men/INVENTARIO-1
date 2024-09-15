<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Su Aplicación PHP + React</title>
    <link rel="stylesheet" href="/react-app/static/css/main.chunk.css">
    <link rel="stylesheet" href="styles.css"> <!-- Enlace al archivo CSS para el estilo del menú -->
    <?php include "./inc/head.php"; ?>
</head>
<body>
    <?php 
        require "./inc/session_start.php"; 

        if(!isset($_GET['vista']) || $_GET['vista'] == "") {
            $_GET['vista'] = "login";
        }

        // Verificar la sesión y la vista
        if(is_file("./vistas/" . $_GET['vista'] . ".php") && $_GET['vista'] != "login" && $_GET['vista'] != "404") {
            // Cerrar sesión si no hay sesión activa
            if((!isset($_SESSION['id']) || $_SESSION['id'] == "") || (!isset($_SESSION['usuario']) || $_SESSION['usuario'] == "")) {
                include "./vistas/logout.php";
                exit();
            }
            
            // Incluir el menú y el contenido
            include "./inc/navbar.php";
            echo '<div class="container">';
            include "./vistas/" . $_GET['vista'] . ".php";
            echo '</div>';
            
            include "./inc/script.php";
        } else {
            if($_GET['vista'] == "login") {
                include "./vistas/login.php";
            } else {
                include "./vistas/404.php";
            }
        }
    ?>
    <div id="react-root"></div>

    <script src="/react-app/static/js/runtime-main.js"></script>
    <script src="/react-app/static/js/main.chunk.js"></script>
</body>
</html>
