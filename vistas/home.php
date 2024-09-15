<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/styles.css">

	<title>Document</title>
		</head>
		<body>
		<div class="container is-fluid">
			<h1 class="title">Home</h1>
			<h2 class="subtitle">¡Bienvenido <?php echo $_SESSION['nombre']." ".$_SESSION['apellido']; ?>!</h2>
		</div >
		<div class="container is is-fluid">
        <button class="btn">Categorías</button>
        <button class="btn">Productos</button>
        <button class="btn">Buscar producto</button>
    </div>
		</div>
		</body>
		</html>