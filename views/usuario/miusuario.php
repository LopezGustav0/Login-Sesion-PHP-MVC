<form method="post">
    <table>
        <tr>
            <td></td>
            <td>Usuario:</td>
            <td><input type="text" value="<?php echo $_SESSION['usuario']?>" readonly></td>
        </tr>
        <tr>
            <td></td>
            <td>Nueva Clave:</td>
            <td><input type="password" name="txtClave" value="<?php echo $clave;?>" required></td>
        </tr>
        <tr>
            <td></td>
            <td>Repita Clave:</td>
            <td><input type="password" name="txtClave2" value="<?php echo $clave;?>" required></td>
        </tr>
        <tr>
            <td colspan="3"><div class="error-message">
            <?php echo $clave == $clave2 ? "" : "Contraseñas no coinciden :C";?></div></td>
        </tr>
        <tr>
            <td><button><a href="<?php echo $GLOBALS['ruta_raiz'];?>">Cancelar</a></button></td>
            <td></td>
            <td><button type="submit">Guardar</button></td>
        </tr>
    </table>
</form>
<style>
        body {
            font-family: Arial, sans-serif;
            background-image:url("https://i.pinimg.com/originals/0c/bf/2f/0cbf2f5c3fb37d033c0bc791ae196dbb.gif");
        }

        form {
            max-width: 400px;
            margin: 50px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
        }

        table td {
            padding: 10px 0;
        }

        input[type="text"],
        input[type="password"] {
            width: calc(100% - 10px);
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            background-color: black;
            color:white;
        }

        button {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
        }

        button a {
            text-decoration: none;
            color: white;
        }

        button:hover {
            background-color: #45a049;
        }

        .error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>