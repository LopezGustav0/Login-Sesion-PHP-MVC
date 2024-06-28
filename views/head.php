<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <table class="menu-table">
        <td><a href="<?php echo $GLOBALS['ruta_raiz']?>/usuario/Inicio">Inicio</a></td>
        <td><a href="<?php echo $GLOBALS['ruta_raiz']?>/usuario/Servicio">Servicios</a></td>
        <td><a href="<?php echo $GLOBALS['ruta_raiz']?>/usuario/Ayuda">Centro Ayuda</a></td>
        <td><a href="<?php echo $GLOBALS['ruta_raiz']?>/usuario/Clave">Mi usuario</a></td>
    </table>
</head>
<body>
<style>
.menu-table {
    width: 100%;
    border-collapse: collapse;
    background-color: #3fa1fc; 
}
.menu-table td {
    border: 1px solid #ddd;
    padding: 8px;
    text-align: center;
}
.menu-table td a {
    text-decoration: none;
    color: white; /* Texto blanco */
    display: block;
    padding: 10px;
    transition: background-color 0.3s, color 0.3s;
}
.menu-table td a:hover {
    background-color: #003c73; /* Color de fondo al pasar el ratón */
    color: white; /* Texto blanco al pasar el ratón */
}
.menu-table td:first-child {
    border-left: none;
}
.menu-table td:last-child {
    border-right: none;
}
@media (max-width: 600px) {
    .menu-table td {
        display: block;
        width: 100%;
    }
}
</style>