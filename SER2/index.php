
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Xs-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ARGEWORLD</title>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <section class="Iniciar-Sesion">
        <div class="nav_left">
                <img id="imagen" src="PRUEBA.png">
        </div>
        <div class="nav_right">
            <h2>Iniciar Sesion</h2> 
            <h6>Ingresa la informacion solicitada para obtener acceso al programa. <br>
                Los datos requeridos son suminstrados al adquirir nuestros Productos <br>
                vía Correo electronico. 
            </h6> <br>
            <br>
            <form action="validar.php" method="post">
            <input class="controls" type="text" name="usuario" value="" placeholder="Correo/Usuario">
            <br>
            <input class="controls" type="password" name="contraseña" value="" placeholder="Contraseña">
            <br>
            <!--<input type="submit" value="Ingresar"> esta linea no esta haciendo nada, es de prueba-->
            <button class="button">Ingresar</button>
        </div>
    </section>
</body>
</html>

