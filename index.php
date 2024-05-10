<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
    <link href="estilo.css" rel="stylesheet">
    <style>
        /* Puedes añadir estilos adicionales aquí si es necesario */
    </style>
</head>
<body>
    <header>
        <h3 id="centrado">VOTA POR EL FUTURO PRESIDENTE</h3>
        <h2 id="titulo">Mexico</h2>
    </header>
    <section>
        <?php

        error_reporting(0);
        session_start();

        $total = $_SESSION['total'];

        if (isset($total)){
	
        $pcandidata1 = ($_SESSION['candidata1'] * 100) / $total;
        $pcandidata2 = ($_SESSION['candidata2'] * 100) / $total;
        $pcandidata3 = ($_SESSION['candidata3'] * 100) / $total;
        $pcandidata4 = ($_SESSION['candidata4'] * 100) / $total;
	}
        ?>
        <form name="frmVotacion" method="POST" action="conteo.php">
            <table border="1" width="600" cellspacing="10" cellpadding="1">
                <tr>
                    <td id="centrado"><img src="candidata1.jpeg" width='100px' height='100px'/></td>
                    <td id="centrado"><img src="candidata2.jpeg" width='100px' height='100px'/></td>
                </tr>
                <tr>
                    <td id="centrado">JUAN Y EDUARDO<br>
                        <input type="submit" value="Votar" name="btnBoton1"/><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata1']; ?><br>
                        PORCENTAJE DE VOTOS: <?php echo round($pcandidata1, 2); ?>%
                    </td>
                    <td id="centrado">JUAN Y ULI<br>
                        <input type="submit" value="Votar" name="btnBoton2"/><br>
                        TOTAL DE VOTOS:<?php echo $_SESSION['candidata2']; ?><br>
                        PORCENTAJE DE VOTOS:<?php echo round($pcandidata2, 2); ?>%
                    </td>
                </tr>
                <tr>
                    <td id="centrado"><img src="candidata3.jpeg" width='100px' height='100px'/></td>
                    <td id="centrado"><img src="candidata4.jpeg" width='100px' height='100px'/></td>
                </tr>
                <tr>
                    <td id="centrado">JUAN Y FIDE<br>
                        <input type="submit" value="Votar" name="btnBoton3"/><br>
                        TOTAL DE VOTOS:<?php echo $_SESSION['candidata3']; ?><br>
                        PORCENTAJE DE VOTOS:<?php echo round($pcandidata3, 2); ?>%
                    </td>
                    <td id="centrado">RICARDO Y MARCIANITO<br>
                        <input type="submit" value="Votar" name="btnBoton4"/><br>
                        TOTAL DE VOTOS: <?php echo $_SESSION['candidata4']; ?><br>
                        PORCENTAJE DE VOTOS:<?php echo round($pcandidata4, 2); ?>%
                    </td>
                </tr>
            </table>
        </form>
        <?php
        //aquoi se va a corregir con el dodigo que nos dara el inge 
        $arreglo = array('Enrique' => $_SESSION['candidata1'],
            'vicente fox' => $_SESSION['candidata2'],
            'felipe calderon' => $_SESSION['candidata3'],
            'andres manuel' => $_SESSION['candidata4']);
            // termina aqui 
        arsort($arreglo);
        var_dump($arreglo);
        reset($arreglo);
        list($candidata, $puntaje) = each($arreglo);
        
        ?>
        <table border="1" width="600" cellspacing="10" cellpadding="1">
            <tr>
                <td id="ganadora">TOTAL DE VOTANTES:
                    <?php echo $_SESSION['total']; ?>
                </td>
            </tr>
            <tr>
                <td id="ganadora">CANDIDATO GANADO:<?php echo $candidata; ?>
                    (<?php echo $puntaje; ?> votos)
                </td>
            </tr>
        </table>
    </section>
    <footer>
<h5 id="centrado">Todos los derechos reservados teo</h5>
    </footer>
</body>
</html>
