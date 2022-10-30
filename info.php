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
	<link rel="stylesheet" href="styles/info2.css">
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

    <div class="first-part-p">
        <img src="images/favicon.png" alt="">
        <div class="info-text">
            <h2>¿Quienes Somos?</h2>
            <p>Somos SEALAREM, una organización digital encargada de evaluar los conocimientos de personas alrededor del mundo hispano para que tengan un respaldo oficial acerca de demostrar sus habilidades en distintos lenguajes de programación. <br>
            Somos un grupo formado por 4 estudiantes de Universidad que evaluan las únicas 4 tecnologías que han aprendido en su carrera, pero con un conocimiento suficiente de lo que se requiere para entrar al mundo laboral. <br>
            Cualquier cosa no dudes en contactarnos en la sección de Contacto en la parte superior.
            </p>
        </div>
    </div>

   

    <h2 class="questions">Preguntas Frecuentes</h2>

    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                ¿Cómo sé que son confiables?
            </button>
        </h2>
        <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Contamos con el soporte de gigantes de la industria de la tecnología como Microsoft, Google, Facebook. Todos los exámenes han sido evaluados por ingenieros de dichas empresas y aprovados igualmente. Por lo tanto tienen una validez especial.
            </div>
        </div>
        </div>
        <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                ¿Cuántas veces puedo hacer los exámenes?
            </button>
        </h2>
        <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Si haces el examen y fallas, debes esperar un tiempo de 2 días para volverlo a intentar. En caso de que apruebes, ya no es necesario que lo vuelvas a tomar.</div>
        </div>
        </div>
        <div class="accordion-item">
        <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                ¿Esto en realidad es un proyecto universitario?
            </button>
        </h2>
        <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Estás en todo lo correcto mi estimad@.</div>
        </div>
        </div>
    </div>

    <h1 class="slogan">¡CERTIFÍCATE YA, TRUINFA SIEMPRE!</h1>
        
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>