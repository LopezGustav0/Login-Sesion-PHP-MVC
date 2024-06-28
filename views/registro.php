<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<form method="post" class="registro-form">
    <h2>Registro Usuario</h2>
    <table><tr>
            <td>Usuario</td>
            <td><input type="text" name="txtUsuario" value="<?php echo $usuario ?>" required></td>
            <td></td>
            <td>Nombres</td>
            <td><input type="text" name="txtNombre" value="<?php echo $nombre ?>" required></td></tr>
        <tr><td>Nueva clave</td>
            <td><input type="password" name="txtClave" value="<?php echo $clave ?>" required></td>
            <td></td>
            <td>Apellidos</td>
            <td><input type="text" name="txtApellidos" value="<?php echo $apellidos ?>" required></td></tr>
        <tr><td>Repita clave</td>
            <td><input type="password" name="txtClave2" value="<?php echo $clave2 ?>" required></td>
            <td></td>
            <td>Email</td>
            <td><input type="email" name="txtEmail" value="<?php echo $email ?>" required></td></tr>
        <tr>
            <td><label><?php echo isset($verificar) ? $verificar : 'no coinciden contraseñas' ?></label></td>
        </tr>
        <tr><td colspan="2"><button type="button" class="cancel-button"><a 
            href="<?php echo $GLOBALS['ruta_raiz'];?>/login/Index">Cancelar</a></button></td>
            <td></td>
            <td colspan="2"><input type="submit" value="Registrar" class="submit-button"></td>
        </tr>
    </table>
</form>
</body>
<style>
body {
    font-family: Arial, sans-serif;
    background-image:url("https://i.pinimg.com/originals/59/47/6c/59476c3211e81aaa49c5d3f7ed3a940f.gif");
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    margin: 0;
}

.registro-form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    width: 500px;
}

h2 {
    margin-bottom: 20px;
    text-align: center;
}

table {
    width: 100%;
    border-collapse: collapse;
}

td {
    padding: 10px;
}

input[type="text"], input[type="password"], input[type="email"] {
    background-color:#0D0B0B;
    color:#fff;
    width: calc(100% - 20px);
    padding: 8px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 4px;
}

button, .submit-button {
    width: 100%;
    padding: 10px;
    background-color: #4CAF50;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 16px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
}

button a {
    color: white;
    text-decoration: none;
    display: block;
}

button:hover, .submit-button:hover {
    background-color: #45a049;
}

button.cancel-button {
    background-color: #f44336;
}

button.cancel-button:hover {
    background-color: #d32f2f;
}

@media (max-width: 600px) {
    .registro-form {
        width: 90%;
    }

    table, td {
        display: block;
        width: 100%;
    }

    td {
        padding: 5px;
    }

    button, .submit-button {
        width: calc(100% - 10px);
        margin: 5px;
    }
}
</style>
