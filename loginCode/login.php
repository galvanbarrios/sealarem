<?php include_once('servidor.php') ?>
<!DOCTYPE html>
<html>

<head>
    <title>Iniciar Sesión</title>
    
    <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="shortcut icon" href="../images/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="../styles/login.css">
</head>

<body>
    <div class="header">
        <h2>Acceder</h2>
    </div>

    <form method="post" action="login.php" class="login-form">
        <?php include('errores.php'); ?>
        <div class="input-group">
            <label>Usuario</label>
            <input type="text" name="username" class="input">
        </div>
        <div class="input-group">
            <label>Contraseña</label>
            <input type="password" name="password" class="input">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            ¿No eres miembro? <a href="registro.php">Registrate</a>
        </p>
        <p> <a href="../menu.php">Volver a Inicio</a></p>
    </form>
</body>

</html>