<?php
    require 'conexion.php';
    $sql = "SELECT en.codigo_encuesta as coen, ut.username as un,
    tiu.descripcion_usuario as us,
    CONCAT( en.dia_encuesta,' ', en.hora_encuesta) AS hf,
    substr(en.dia_encuesta,1,4) as anno,
    en.seccion as sec,
CASE WHEN en.hora_encuesta < '18:00:00' THEN 'Diurno'
     WHEN en.hora_encuesta > '18:00:00' THEN 'Vespertino' END as horario, 
    en.pregunta1 as p1, 
CASE WHEN re.respuesta1 = 1 THEN 'Muy Desacuerdo' 
     WHEN re.respuesta1 = 2 THEN 'En Desacuerdo' 
     WHEN re.respuesta1 = 3 THEN 'Neutro' 
     WHEN re.respuesta1 = 4 THEN 'De Acuerdo'  
     WHEN re.respuesta1 = 5 THEN 'Muy Acuerdo' 
     WHEN re.respuesta1 = 0 THEN 'Sin Responder'  end as r1,
    en.pregunta2 as p2,
CASE WHEN re.respuesta2 = 1 THEN 'Muy Desacuerdo' 
     WHEN re.respuesta2 = 2 THEN 'En Desacuerdo' 
     WHEN re.respuesta2 = 3 THEN 'Neutro' 
     WHEN re.respuesta2 = 4 THEN 'De Acuerdo'  
     WHEN re.respuesta2 = 5 THEN 'Muy Acuerdo' 
     WHEN re.respuesta1 = 0 THEN 'Sin Responder'   end as r2,
    en.pregunta3 as p3,
CASE WHEN re.respuesta3 = 1 THEN 'Muy Desacuerdo' 
     WHEN re.respuesta3 = 2 THEN 'En Desacuerdo' 
     WHEN re.respuesta3 = 3 THEN 'Neutro' 
     WHEN re.respuesta3 = 4 THEN 'De Acuerdo'  
     WHEN re.respuesta3 = 5 THEN 'Muy Acuerdo' 
     WHEN re.respuesta1 = 0 THEN 'Sin Responder'   end as r3,
           re.comentario as com
FROM encuesta en
    INNER JOIN respuesta_encuesta re on en.codigo_encuesta = re.id_encuestafk
    INNER JOIN usertable ut on en.id_profesorfk = ut.username
    INNER JOIN tipo_usuario tiu ON ut.tipo_usuario = tiu.id_tipo_usuario";
    $query = mysqli_query($con,$sql);
    $docu="Sabana.xls";
    header('Content-Type: application/vnd.ms-excel');
    header('Content-Disposition: attachment; filename='.$docu);
    header('Pragma: no-cache');
    header('Expires: 0');
    echo '<table border=1>';
    echo '<tr>';
    echo '<th colapsan=4>Sabana</th>';
    echo '</tr>';
    echo '<tr><th>Fecha y Hora</th>
            <th>Año</th>
            <th>Clase</th>
            <th>Escuela</th>
            <th>Responsable</th>
            <th>Cargo</th>
            <th>Sección</th>
            <th>Horario</th>
            <th>Pregunta 1 </th>
            <th>Respuesta 1</th>
            <th>Pregunta 2</th>
            <th>Respuesta 2</th>
            <th>Pregunta 3</th>
            <th>Respuesta 3</th>
            <th>Comentario</th>
            </tr>';
    while ($row=mysqli_fetch_array($query)){
        echo '<tr>';
        echo '<td>'.$row['hf'].' </td>';
        echo '<td>'.$row['anno'].' </td>';
        echo '<td>'.$row['coen']. '</td>';
        echo '<td>'.$row['un'].' </td>';
        echo '<td>'.$row['us'].' </td>';
        echo '<td>'.$row['sec'].' </td>';
        echo '<td>'.$row['horario'].' </td>';
        echo '<td>'.$row['p1'].' </td>';
        echo '<td>'.$row['r1'].' </td>';
        echo '<td>'.$row['p2'].' </td>';
        echo '<td>'.$row['r2'].' </td>';
        echo '<td>'.$row['p3'].' </td>';
        echo '<td>'.$row['r3'].' </td>';
        echo '<td>'.$row['com'].' </td>';
        echo '</tr>';
    }
    echo '</table>';

     
?>