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
	<link rel="stylesheet" href="styles/main.css">
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

	<div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/car1.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/car2.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/car3.jpg" class="d-block w-100" alt="...">
			</div>
			<div class="carousel-item">
				<img src="images/car4.jpg" class="d-block w-100" alt="...">
			</div>
		</div>
		<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
			<span class="carousel-control-prev-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Previous</span>
		</button>
		<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
			<span class="carousel-control-next-icon" aria-hidden="true"></span>
			<span class="visually-hidden">Next</span>
		</button>
	</div>

	<div class="text-certificade">
		<h1>CERTIFÍCATE</h1>
		<p>Haz valer tus conocimientos en programación. Toma uno de nuestros exámenes y certifícate en: HTML & CSS, JAVA, PHP Y C++. Estos certificados tienen validez para empresas como Microsoft, Google, Facebook, Oracle e IBM.</p>
	</div>

	<h2 class="grid-images-title">Perfiles Profesionales Recientes</h2>

	<div class="grid-images">
		<figure>
			<img src="images/people1.jpg" alt="">
			<figcaption>Lucía Carmona. Certificada en PHP. Trabaja en Facebook</figcaption>
		</figure>
		<figure>
			<img src="images/people2.jpg" alt="">
			<figcaption>Juan Jiménez. Certificado en HTML y CSS. Frontend en Discord</figcaption>
		</figure>
		<figure>
			<img src="images/people3.jpg" alt="">
			<figcaption>Saúl Rodríguez. Certificado en PHP. Trabaja en Wordpress</figcaption>
		</figure>
		<figure>
			<img src="images/people4.jpg" alt="">
			<figcaption>Jessica Hernández. Certificada en C++. Trabaja en Microsoft</figcaption>
		</figure>
		<figure>
			<img src="images/people5.jpg" alt="">
			<figcaption>Gerardo López. Certificado en Java. Trabaja en Oracle</figcaption>
		</figure>
		<figure>
			<img src="images/people6.jpg" alt="">
			<figcaption>Gabriela Paredes. Certificada en HTML y CSS. Frontend en Google</figcaption>
		</figure>
	</div>

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>