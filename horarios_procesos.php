<?php
    // todo: Version numerico, asociativo, recorrer numerico con for, recorrer asociativo con foreach

    function rellenarHorario(){

    // Con esta funcion retornaremos una variable $horario que contendrá la totalidad del horario hecho a mano

$horario = [
    [ // Hora 1, (índice = 0)
        "Lunes" => "IP",
        "Martes" => "CLIENTE",
        "Miercoles" => "IP",
        "Jueves" => "SERVIDOR",
        "Viernes" => "OPT2",
    ],
    [ // Hora 2, (índice = 1)
        "Lunes" => "SERVIDOR",
        "Martes" => "CLIENTE",
        "Miercoles" => "CLIENTE",
        "Jueves" => "SERVIDOR",
        "Viernes" => "OPT2",
    ],
    [ // Hora 3, (índice = 2)
        "Lunes" => "SERVIDOR",
        "Martes" => "SERVIDOR",
        "Miercoles" => "CLIENTE",
        "Jueves" => "SERVIDOR",
        "Viernes" => "DIGIT",
    ],
    [ // Hora 4, (índice = 3)
        "Lunes" => "PIMOD",
        "Martes" => "SERVIDOR",
        "Miercoles" => "SERVIDOR",
        "Jueves" => "SOST",
        "Viernes" => "SERVIDOR",
    ],
    [ // Hora 5, (índice = 4)
        "Lunes" => "DESPLIEGUE",
        "Martes" => "PIMOD",
        "Miercoles" => "DESPLIEGUE",
        "Jueves" => "OPT1",
        "Viernes" => "SERVIDOR",
    ],
    [ // Hora 6, (índice = 5)
        "Lunes" => "CLIENTE",
        "Martes" => "DESPLIEGUE",
        "Miercoles" => "DESPLIEGUE",
        "Jueves" => "IP",
        "Viernes" => "TUTORIA",
    ],
    [ // Hora 7, (índice = 6)
        "Lunes" => "CLIENTE",
    ],
];

    //Retornamos horario
    return $horario;
    }


    function visualizarHorario($horario){
/*
        Nos pasamos el horario por párametro para empezar a trabajar con el
        Recorremos el horario, preguntamos si estamos en la primera hora para pintar
        el encabezado primero (los dias de la seamana), despues, el recorrido es igual todo
        el rato:

        - Visualizamos con echo la hora de la mañana con sus respectivas asignaturas
        - Le aplicamos una clase que se llama exactamente igual que la asignatura para
          ponerle estilos
*/

        for($i = 0; $i < count($horario); $i++){
            // Esta validacion pregunta si estamos en la primera hora, si es asi,
            // ANTES de empezar a poner ninguna asignatura, visualizamos el encabezado
            // De los dias de la semana con ka funcion visualizarEncabezado (explicada abajo)
            if(($i + 1) == 1)
                visualizarEncabezado($horario[$i]);
            echo '<tr> <td class="hora">'.($i + 1).'</td>';

            foreach($horario[$i] as $dia => $asignatura){
                /*
                Hice otra versión con el estilo integrado en la etiqueta mediante <style>
                Creariamos un array de Colores, donde tendriamos el color en hexadecimal
                En esta version, la clase se llama exactamente IGUAL que en la asignatura
                De esta manera, podemos poner colores dinámicos de otra manera diferente
                */
                echo '<td class="'.$asignatura.'">'.$asignatura.'</td>';
            }

            echo'</tr>';
        }
    
    
}
        function visualizarEncabezado($dias){
/*
        En esta funcion nos traemos por parámetro todas las asignaturas de la primera hora
        junto con el índice asociativo de los días de la semana, que lo usaremos para visualizar
        el encabezado

        - Visualizamos con echo los días de la semana
        - Le aplicamos una clase que se llama encabezado para toda la fila
*/

        echo '<tr> <th class="encabezado"> Hora </th>';
        foreach($dias as $dia => $asignatura){
            echo '<th class="encabezado">'.$dia.'</th>';
        }
        echo '</tr>';
    }


?>
