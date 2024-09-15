<!DOCTYPE html>
<html lang="es">
<head>
    <?php include "./inc/head.php"; ?>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <nav class="sidenav" role="navigation" aria-label="main navigation">
        <div class="sidenav-brand">
            <a href="index.php?vista=home">
                <img src="./img/logo.png" width="65" height="28" alt="Logo">
            </a>
        </div>

        <div class="sidenav-menu">
            <div class="sidenav-item has-dropdown">
                <a class="sidenav-link">Usuarios</a>
                <div class="sidenav-dropdown">
                    <a href="index.php?vista=user_new" class="sidenav-dropdown-item">Nuevo</a>
                    <a href="index.php?vista=user_list" class="sidenav-dropdown-item">Lista</a>
                    <a href="index.php?vista=user_search" class="sidenav-dropdown-item">Buscar</a>
                </div>
            </div>

            <div class="sidenav-item has-dropdown">
                <a class="sidenav-link">Categorías</a>
                <div class="sidenav-dropdown">
                    <a href="index.php?vista=category_new" class="sidenav-dropdown-item">Nueva</a>
                    <a href="index.php?vista=category_list" class="sidenav-dropdown-item">Lista</a>
                    <a href="index.php?vista=category_search" class="sidenav-dropdown-item">Buscar</a>
                </div>
            </div>

            <div class="sidenav-item has-dropdown">
                <a class="sidenav-link">Productos</a>
                <div class="sidenav-dropdown">
                    <a href="index.php?vista=product_new" class="sidenav-dropdown-item">Nuevo</a>
                    <a href="index.php?vista=product_list" class="sidenav-dropdown-item">Lista</a>
                    <a href="index.php?vista=product_category" class="sidenav-dropdown-item">Por categoría</a>
                    <a href="index.php?vista=product_search" class="sidenav-dropdown-item">Buscar</a>
                </div>
            </div>

            <div class="sidenav-footer">
                <a href="index.php?vista=user_update&user_id_up=<?php echo $_SESSION['id']; ?>" class="button is-primary">Mi cuenta</a>
                <a href="index.php?vista=logout" class="button is-link">Salir</a>
            </div>
        </div>
    </nav>
       
</body>
</html>
