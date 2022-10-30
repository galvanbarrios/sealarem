<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles/pagado.css">
	<title>SEALAREM: Certificación Online</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">SEALAREM</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="menu.php">Inicio</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="certificados.php">Certificaciones</a>
                </li>
                <li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
						Empresa
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="info.php">Acerca de</a></li>
						<li><a class="dropdown-item" href="contacto.php">Contáctanos</a></li>
					</ul>
				</li>
				<?php if(empty($_SESSION['logged'])){ ?>

				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="loginCode/index.php">Mi cuenta</a>
				</li>

				<?php }elseif($_SESSION['logged'] == true){ ?>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="loginCode/index.php">
						<?php echo $_SESSION['fullname']; ?>
					</a>
				</li>

				<?php } ?>
            </ul>
		</div>
	</div>
	</nav>

    <div class="section">
        <h2>Pago Realizado Exitosamente. Haga click para iniciar el examen</h2>
        <a href="examenCode/examen.php" class="btn btn-primary">Empezar Examen</a>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>