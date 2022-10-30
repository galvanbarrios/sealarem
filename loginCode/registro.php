<?php include('servidor.php') ?>
<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="../styles/login.css">
  <title>Registrarse</title>
  
</head>
<body>
  <div class="header">
  	<h2>Registro</h2>
  </div>
	
  <form method="post" action="registro.php" class="login-form">
  	<?php include('errores.php'); ?>
  	<div class="input-group">
  	  <label>Nombres</label>
  	  <input class="input" type="text" name="fullname" value="<?php echo $fullname; ?>">
  	</div>
    <div class="input-group">
    <label>Usuario</label>
    <input class="input" type="text" name="username" value="<?php echo $username; ?>">
    </div>
  	<div class="input-group">
  	  <label>Correo</label>
  	  <input class="input" type="email" name="email" value="<?php echo $email; ?>">
  	</div>
  	<div class="input-group">
  	  <label>Contraseña</label>
  	  <input class="input" type="password" name="password_1">
  	</div>
  	<div class="input-group">
  	  <label>Confirme contraseña</label>
  	  <input class="input" type="password" name="password_2">
  	</div>
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Registrarse</button>
  	</div>
  	<p>
  		¿Ya eres miembro? <a href="login.php">Accede</a>
  	</p>
	  <p> <a href="../menu.php">Volver a Inicio</a></p>
  </form>
</body>
</html>