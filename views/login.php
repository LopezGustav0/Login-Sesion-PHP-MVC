<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>

<div class="login-container">
    <h2>Iniciar Sesión</h2>
    <form method="post">
        <table>
            <tr>
                <td><label for="username">Usuario:</label></td>
                <td><input type="text" name="txtUsuario" value="<?php echo $usuario;?>" required></td>
            </tr>
            <tr>
                <td><label for="password">Contraseña:</label></td>
                <td><input type="password" name="txtClave"  value="<?php echo $clave;?>" required></td>
            </tr>
            <tr>
                <td><label><?php echo $verificar;?></label></td>
                <td><button type="submit">Ingresar</button></td>
            </tr>
            <tr>
                <td></td>
                <td><a href="<?php echo $GLOBALS['ruta_raiz']?>/login/Registro">Registrar Usuario</a></td>
            </tr>
        </table>
    </form>
</div>
<style>
    body {
    font-family: Arial, sans-serif;
    background-image: url("https://i.gifer.com/4f8T.gif"); 
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.login-container {
    background-color: #ffff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 300px;
    text-align: center;
}
.input{
    background-color: #1C1918;
    font:color
}
h2 {
    margin-bottom: 20px;
}

table {
    width: 100%;
}

td {
    padding: 10px;
    text-align: left;
}

label {
    display: block;
    font-weight: bold;
    margin-bottom: 5px;
}

input[type="text"], input[type="password"] {
    background-color: #1C1918;
    width: calc(100% - 20px);
    padding: 8px;
    margin-bottom: 10px;
    color: #FFFFFF;
}

button {
    width: 100%;
    padding: 10px;
    background-color: #3fa1fc;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
}

button:hover {
    background-color: #003c73;
}

a {
    display: block;
    margin-top: 10px;
    color: #3fa1fc;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

</style>
</body>
</html>

