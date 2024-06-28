<!--<body>
    
    
    
</body>-->
<center>
<table>
    
    <tr>
        <td class="par1"><h3>Bienvenido</h3>
            <h1><?php echo $_SESSION['usuario']?></h1>
            <h3>Disfrute del inicio de Sesion</h3>
        </td>
        <td class="par2"><img src="https://i.gifer.com/XOsX.gif"></td>
        <td><button><a href="<?php echo $GLOBALS['ruta_raiz']?>/cerrar/Secion">cerrar</a></button></td>
    </tr>
    
</table></center>
<style>
        body {
            font-family: Arial, sans-serif;
            background-image:url("https://i.pinimg.com/originals/0c/bf/2f/0cbf2f5c3fb37d033c0bc791ae196dbb.gif");
            margin: 0;
            padding: 0;

        }
        table{
            width: 80%;
            color:#fff;
        }
        .par1{
            width: 50%;
            font-size:35px
        }
        .par2{
            width: 25%
        }
        .par3{
            width: 25%;
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
        button a{
            text-decoration: none;
            color:white;
        }
        

    </style>
</head>
<body>