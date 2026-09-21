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
