<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            text-decoration: none;
            font-family: "Open Sans", sans-serif;
        }
        body{
            background: white;
            height: 100vh;
            width: 100%;
            position: relative;
        }
        .form-register {
            width: 30%;
            background: rgb(0, 104, 0);
            padding: 50px;
            margin: auto;
            margin-top: 100px;
            border-radius: 4px;
            font-family: 'calibri';
            color: white;
            box-shadow: 7px 13px 37px #000;
        }
        
        .form-register h2 {
            font-size: 22px;
            margin-bottom: 20px;
        }
        
        .controls {
            width: 100%;
            background: rgb(50, 168, 50);
            padding: 10px;
            border-radius: 4px;
            margin-bottom: 16px;
            border: 1px solid white;
            font-family: 'calibri';
            font-size: 18px;
            color: white;
        }
        
        .form-register p {
            height: 40px;
            text-align: center;
            font-size: 18px;
            line-height: 40px;
        }
        
        .form-register a {
            color: white;
            text-decoration: none;
        }
        
        .form-register a:hover {
            color: white;
            text-decoration: underline;
        }
        
        .form-register .botons {
            width: 100%;
            background: rgb(50, 168, 50);
            border: none;
            padding: 12px;
            color: white;
            margin: 16px 0;
            font-size: 16px;
        }
    </style>
</head>
<?php
if(isset($_GET['error'])){
    $error = $_GET['error'];
    if($error == "incorrecto"){
        echo "<h2>El usuario o contraseña son incorrectos</h2>";
    }
    if($error == "vacio"){
        echo "<h2>Los datos enviados estan vacios</h2>";
    }
} 
?>
<body>
    <section class="form-register">
    <h2>Iniciar Sesion</h2>
    <form action="procesar.php" method="POST">
        <input class="controls" type="text" name="nickname" placeholder="Usuario">
        <br>
        <input class="controls" type="password" name="password" placeholder="Contraseña">
        <input class="botons" type="submit" value="Ingresar">
    </form>
    </section>
</body>
</html>