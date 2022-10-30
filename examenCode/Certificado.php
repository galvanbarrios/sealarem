<?php
session_start(); //Variable de sesion para la bandera de certificacion
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Felicidades!</title>
    <style>
        div {
            width: 40%;
            border: 1px solid black;
            margin: 0 auto;
            margin-top: 20px;
            padding: 15px;
            font-family: 'Ubuntu', sans-serif;
            text-align: center;
            line-height: 10px;
        }

    </style>

    <meta charset="UTF-8">
</head>

<body>
    <div>
        <?php
        $aprobo = $_SESSION['aprobo'];
        print_r($aprobo);
            if ($aprobo == "si")
            {
            ob_start(); //Creamos un buffer de output (OBLIGATORIO)

            //Clase
            require('fpdf184/fpdf.php'); //Libreria fpdf
            $pdf = new FPDF();
            $pdf->AddPage();

            //Configuracion del documento
            $pdf->SetTitle('Impresionado la verdad joven');
            $pdf->SetAuthor('UAAlan');
            $pdf->SetCreator('UAAr');

            //Imagenes
            $pdf->Image('Congratulos.jpg', null, null, 200);
                
            $pdf->Output(); //Mandamos el PDF
            ob_end_flush(); //Eliminamos el buffer de salida y mandamos sus contenidos al navegador   
            }
        ?>
    </div>

</body>

</html>
