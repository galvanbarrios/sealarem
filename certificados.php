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
    <link rel="stylesheet" href="styles/certificados.css">
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

    <h2 class="certificates-main-title">Nuestros Certificados</h2>

    <div class="grid-cer-cards">     
        <div class="card" style="width: 30rem;">
            <img src="images/c++.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">C++</h5>
                <p class="card-text">
                    C++ es un lenguaje de programación extensión del lenguaje C con la finalidad de que este pudiese
                    manipular objetos, incluyendo también programación genérica y funcional, desarrollado en 1980 por Bjarne Stroustroup en los laboratorios At&T. <br> Este examen de certificación (SEALAREM C++) está diseñado para ayudarlo a validar y poner a prueba sus conocimientos básicos de programación haciendo uso del lenguaje C++. <br><br><br>
                    Costo del Exámen: <strong>$899</strong><br>
                    Duración Aprox: <strong>1.5 Horas</strong><br>
                    Total de Preguntas: <strong>8</strong><br>
                    Fecha Prox. De Examen: <strong>31/10/2022</strong><br>
                    Min. Aprobatorio: <strong>7.5</strong>
                </p>

                <?php if(empty($_SESSION['logged'])){  ?>
                     <p class="btn btn-primary"  role="button">Necesitas iniciar sesión para hacer un examen</p>  

                <?php }elseif($_SESSION['logged'] == true){ ?>    
                    <!-- Botón para abrir el sidebar -->
                    <a href="#sidebar" class="btn btn-primary" role="button" aria-controls="sidebar" data-bs-toggle="offcanvas">
                        Iniciar
                    </a>

                    <!-- Sidebar -->
                    <div id="sidebar" class="offcanvas offcanvas-start" tabindex="-1" id="offcanvas" aria-labelledby="offcanvasLabel">
                        <div class="offcanvas-header">
                            <h5 class="offcanvas-title" id="offcanvasLabel">Opciones de Pago</h5>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            El precio de este examen es de $899. Puede escoger una de las siguientes opciones para realizar el pago
                        </div>

                        <!-- Seccion de Pago -->
                        <form action="pagado.php" method="post" class="pay-form">
                            <select class="form-select">
                                <option value="" disabled>Escoja el Medio de Pago</option>
                                <option value="1">Visa</option>
                                <option value="2">Mastercard</option>
                                <option value="3">OXXO</option>
                            </select>
                            
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Numero De Tarjeta" required>
                                <label for="floatingInput">Numero de Tarjeta</label>
                            </div>
                            <input type="submit" class="btn btn-primary"  value="Pagar">
                        </form>
                    </div>
                <?php  } ?>
                
            </div>
        </div>

        <div class="card" style="width: 30rem;">
            <img src="images/html.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">HTML & CSS</h5>
                <p class="card-text">
                    HTML es el código que se utiliza para estructurar y
                    desplegar una página web y sus contenidos. El CSS, en español Hojas de Estilo en Cascada, fue desarrollado por W3C
                    en 1996. Se le denomina Hojas de Estilos en Cascada porque las características se aplican de arriba
                    a abajo mediante reglas que poseen un esquema prioritario.
                    Con este examen de certificación (SEALAREM HTML&CSS) podrás validar tus conocimientos y
                    habilidades relacionadas al diseño y desarrollo de páginas web. <br><br>
                    Costo del Exámen: <strong>$399</strong><br>
                    Duración Aprox: <strong>1 Hora</strong><br>
                    Total de Preguntas: <strong>8</strong><br>
                    Fecha Prox. De Examen: <strong>31/11/2022</strong><br>
                    Min. Aprobatorio: <strong>7.5</strong>
                </p>
                <?php if(empty($_SESSION['logged'])){  ?>
                     <p class="btn btn-primary"  role="button">Necesitas iniciar sesión para hacer un examen</p>  
                     
                <?php }elseif($_SESSION['logged'] == true){ ?>

                <a href="#" class="btn btn-primary">Iniciar</a>
                <?php } ?>
            </div>
        </div>

        <div class="card" style="width: 30rem;">
            <img src="images/java.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">JAVA</h5>
                <p class="card-text">
                    JAVA es un lenguaje de programación orientado a objetos, es uno de los lenguajes más utilizados,
                    y una plataforma informática, creada y comercializada por SUN Microsystems en el año 1995. <br>
                    Al tomar este examen, lograrás probar tus conocimientos en cuanto a programación orientada a objetos
                    y que tanto sabes de Java, y alcanzar el sueño de trabajar en empresas como Oracle. <br><br>
                    Costo del Exámen: <strong>$799</strong><br>
                    Duración Aprox: <strong>2 Horas</strong><br>
                    Total de Preguntas: <strong>8</strong><br>
                    Fecha Prox. De Examen: <strong>31/11/2022</strong><br>
                    Min. Aprobatorio: <strong>7.5</strong>
                </p>
                <?php if(empty($_SESSION['logged'])){  ?>
                     <p class="btn btn-primary"  role="button">Necesitas iniciar sesión para hacer un examen</p>  
                     
                <?php }elseif($_SESSION['logged'] == true){ ?>

                <a href="#" class="btn btn-primary">Iniciar</a>
                <?php } ?>
            </div>
        </div>

        <div class="card" style="width: 30rem;">
            <img src="images/php.png" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">PHP</h5>
                <p class="card-text">
                    PHP es un lenguaje de programación para desarrollar aplicaciones y crear sitios web que conquista
                    cada día más seguidores. Fácil de usar y en constante perfeccionamiento es una opción segura
                    para aquellos que desean trabajar en proyectos calificados y sin complicaciones. 
                    Este examen de certificación (SEALAREM PHP) está diseñado para ayudarlo a validar sus
                    conocimientos básicos de PHP. <br><br>
                    Costo del Exámen: <strong>$699</strong><br>
                    Duración Aprox: <strong>1.5 Horas</strong><br>
                    Total de Preguntas: <strong>8</strong><br>
                    Fecha Prox. De Examen: <strong>31/11/2022</strong><br>
                    Min. Aprobatorio: <strong>7.5</strong>
                </p>
                <?php if(empty($_SESSION['logged'])){  ?>
                     <p class="btn btn-primary"  role="button">Necesitas iniciar sesión para hacer un examen</p>  
                     
                <?php }elseif($_SESSION['logged'] == true){ ?>

                <a href="#" class="btn btn-primary">Iniciar</a>
                <?php } ?>
            </div>
        </div>
    </div>
    

    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>