<?php
    include 'horarios_procesos.php';

    $horario = rellenarHorario();

?>


<!DOCTYPE html>
<html>
	<head>
		<meta name="author" content="Carlos Colorado Anselmo">
		<title>Horario 2ºDAW</title>
		<link rel="stylesheet" href="estilos.css">
	</head>
	<body>

    <h1>HORARIO 2ºDAW CURSO 26-27</h1>
    <h2>Realizado por: Carlos Colorado Anselmo</h2>

    <table class="tabla">
        <?php
            visualizarHorario($horario);    
        ?>
        <!-- <tr>
            <th class="encabezado">Hora</th>
            <th class="encabezado">Lunes</th>
            <th class="encabezado">Martes</th>
            <th class="encabezado">Miércoles</th>
            <th class="encabezado">Jueves</th>
            <th class="encabezado">Viernes</th>
        </tr> -->

        <!-- <tr>
            <td class="hora">1</td>
            <td class="empleabilidad">IP</td>
            <td class="cliente">CLIENTE</td>
            <td class="empleabilidad">IP</td>
            <td class="servidor">SERVIDOR</td>
            <td class="optativa2">OPT. 2</td>
        </tr>
        <tr>
            <td class="hora">2</td>
            <td class="servidor">SERVIDOR</td>
            <td class="cliente">CLIENTE</td>
            <td class="cliente">CLIENTE</td>
            <td class="servidor">SERVIDOR</td>
            <td class="optativa2">OPT. 2</td>
        </tr>
        <tr>
            <td class="hora">3</td>
            <td class="servidor">SERVIDOR</td>
            <td class="servidor">SERVIDOR</td>
            <td class="cliente">CLIENTE</td>
            <td class="servidor">SERVIDOR</td>
            <td class="digitalizacion">DIGIT.</td>
        </tr>
        <tr>
            <td class="hora">4</td>
            <td class="proyecto">PIMOD</td>
            <td class="servidor">SERVIDOR</td>
            <td class="servidor">SERVIDOR</td>
            <td class="sostenibilidad">SOST.</td>
            <td class="servidor">SERVIDOR</td>
        </tr>
        <tr>
            <td class="hora">5</td>
            <td class="despliegue">DESPLIEGUE</td>
            <td class="proyecto">PIMOD</td>
            <td class="despliegue">DESPLIEGUE</td>
            <td class="optativa1">OPT. 1</td>
            <td class="servidor">SERVIDOR</td>
        </tr>
        <tr>
            <td class="hora">6</td>
            <td class="cliente">CLIENTE</td>
            <td class="despliegue">DESPLIEGUE</td>
            <td class="despliegue">DESPLIEGUE</td>
            <td class="empleabilidad">IP</td>
            <td class="tutoria">TUTORÍA</td>
        </tr>
        <tr>
            <td class="hora">7</td>
            <td class="cliente">CLIENTE</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr> -->

</table>

    <h2>Módulos y profesores que imparten</h2>
    <ul>
        <li>Desarrollo Web en Entorno Cliente — Domínguez Lebrato, Alberto</li>
        <li>Desarrollo Web en Entorno Servidor — Muñoz Domínguez, Isabel</li>
        <li>Despliegue de Aplicaciones Web — González Trives, Ernesto</li>
        <li>Proyecto Intermodular — González Trives, Ernesto / Muñoz Domínguez, Isabel</li>
        <li>Itinerario Personal para la Empleabilidad II — Álvarez Recio, Luis Miguel</li>
        <li>Formación y Orientación Laboral — Marta López</li>
        <li>Sostenibilidad aplicada al sistema productivo — Vázquez Aguilar, Santiago</li>
        <li>Digitalización aplicada a los sectores productivos — Domínguez Lebrato, Alberto</li>
        <li>Optativa Eje 1 — Álvarez Recio, Luis Miguel</li>
        <li>Optativa Eje 2 — Muñoz Domínguez, Isabel</li>
        <li>Tutoría — Domínguez Lebrato, Alberto</li>
    </ul>

</body>
</html>
```
