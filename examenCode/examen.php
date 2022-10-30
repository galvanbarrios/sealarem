<?php
session_start();
include "preguntas.php";
?>

<head>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/examen.css">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <title>Evaluación</title>
</head>


    <nav class="navbar navbar-expand-lg navbar-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="#">SEALAREM</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link active" aria-current="page" href="../menu.php">Inicio</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="../certificados.php">Certificaciones</a>
				</li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" role="button" id="navbarDropdown" data-bs-toggle="dropdown" aria-expanded="false">
						Empresa
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="../info.php">Acerca de</a></li>
						<li><a class="dropdown-item" href="../contacto.php">Contáctanos</a></li>
					</ul>
				</li>
				<?php if(empty($_SESSION['logged'])){ ?>

				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="../loginCode/index.php">Mi cuenta</a>
				</li>

				<?php }elseif($_SESSION['logged'] == true){ ?>
				<li class="nav-item">
					<a class="nav-link" aria-current="page" href="../loginCode/index.php">
						<?php echo $_SESSION['fullname']; ?>
					</a>
				</li>

				<?php } ?>
				
			</ul>
		</div>
	</div>
	</nav>

<!--Contenedor del examen-->
<div style="padding-top:20px;" class="container">
    <h1>Certificacion C++</h1>

    <?php
        $segundos = 0;
        $seleccionPreguntas = array_keys($preguntas); //Primero obtenemos las llaves del banco de preguntas
        shuffle($seleccionPreguntas); //Luego revolvemos ese arreglo auxiliar, nótese que esto no cambia el orden de arreglos de niveles inferiores dentro del arreglo multidimensional
        $ordenpreguntas = array_slice($seleccionPreguntas,0,8); //Del arreglo auxiliar aleatorizado lo partimos para solamente tomar las primeras 8, que hermosas son de las funciones
            
        //////////GENERACION DE LAS PREGUNTAS//////////
        
        foreach($ordenpreguntas as $q => $contenidoorden) { //Recorrido del arreglo auxiliar que tiene los valores aleatorizados
    ?>

    <!--//////////FORMULARIO//////////-->
    <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post" class="quest-sections">
        <!--form del examen, se maneja desde la misma página, por cuestiones de manejo posterior de datos y compatibilidad con fpdf-->
        <p class="fw-bold"><?php echo $q+1 .". ". $preguntas[$contenidoorden]["Pregunta"]?> </p>
        <?php
        shuffle ($preguntas[$contenidoorden]["Opciones"]); //Ahora si vamos a revolver los incisos, dentro del arreglo se introdujo nuevamente un arreglo más para introducir los incisos, de esta manera las preguntas no se ven afectadas por shuffle() (para que no que se revuelvan las preguntas con los incisos)
        
            
        //////////GENERACION DE LOS INCISOS//////////
        for ($i = 0; $i <count($preguntas[$contenidoorden]["Opciones"]) ; $i++) {
    ?>

        <div class="form-check">
            <input class="form-check-input" type="radio" name="<?php echo "opcion" . $contenidoorden+1 ?>" id="<?php echo "exampleRadios" . $i+1 ?>" value="<?php echo htmlspecialchars($preguntas[$contenidoorden]["Opciones"][$i])?>">
            <label class="form-check-label" for="<?php echo "exampleRadios" . $i+1 ?>">
                <?php                  
                      echo htmlspecialchars($preguntas[$contenidoorden]["Opciones"][$i]);                   
        ?>
            </label>
        </div>

        <?php
        } 
    ?>
        <!--//////////GENERACION DE LOS INCISOS END//////////-->

        <br><br>
        <?php 
        }
    ?>

        <!--//////////GENERACION DE LAS PREGUNTAS END//////////-->


        <!--//////////TIMER//////////-->
        <p>Tiempo transcurrido:</p>
        <span id="minutos"></span>:<span id="segundos"></span>
        <script>
            var segs = 0;

            function pad(val) {
                return val > 9 ? val : "0" + val;
            }
            setInterval(function() {
                document.getElementById("segundos").innerHTML = pad(++segs % 60);
                document.getElementById("minutos").innerHTML = pad(parseInt(segs / 60, 10));
            }, 1000);

        </script>

        <!--//////////TIMER//////////-->


        <div class="text-end">
            <button type="submit" class="btn btn-primary">Terminar Examen</button>
        </div>

    </form>

    <!--//////////FORMULARIO END//////////-->

</div>

<?php    
            if ($_SERVER["REQUEST_METHOD"] == "POST") { //Manejo de la información después de el submit con el método POST
            $correctas = 0; 
            $promedio = 0;
            $total = count($ordenpreguntas);
            $aprobo = 0; //Bandera para la certificacion

            foreach($preguntas as $q => $contenidoq){ //Recorrido del banco completo de preguntas, comparando las respuestas subidas con el banco de respuestas correctas.
                    if (isset($_POST['opcion' . $q+1]))
                    {
                    $respuesta = $_POST['opcion' . $q+1];
                    if (strcmp($respuesta,$preguntas[$q]["Respuesta"]) == 0){
                        $correctas++;
                   }
            }
            }
            $promedio = $correctas*10/$total;
                          
     ?>

<?php  //Certificado
    if($promedio >= 6)
    {
        $_SESSION["aprobo"] = "si"; //Utilizamos una variable de sesion en vez de un hidden form porque no se puede hacer nada despues de un submit, y queremos tratar los datos antes de saber si vamos a certificarlo o no.
    ?>
<div style="display:flex;justify-content:center;padding-top:50px;">
    <div class=" card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">C++ EXAMEN UNICO</div>
        <div class="card-body">
            <h5 class="card-title">Pasastes papu, tuvistes <?php echo $correctas ?> bien</h5>
            <p class="fw-bold">Su certificado se encuentra en el siguiente link!</p> <a href="Certificado.php" target="blank">Da click aquí</a>
        </div>
    </div>

</div>

<?php //Reprobado       
    }else{   
    ?>
<div style="display:flex;justify-content:center;padding-top:50px;">
    <div class=" card text-white bg-dark mb-3" style="max-width: 18rem;">
        <div class="card-header">C++ EXAMEN UNICO</div>
        <div class="card-body">
            <h5 class="card-title">Nooo papuu, tuvistes <?php echo $correctas ?> bien, que menso la verdad ajaxjasdjasj</h5>
        </div>
    </div>
</div>
<?php 
    }
    ?>

<?php            
            }             
    ?>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
