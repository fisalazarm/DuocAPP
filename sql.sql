SELECT 	en.codigo_encuesta as coen, ut.username,
		tiu.descripcion_usuario,CONCAT( en.dia_encuesta,' ', en.hora_encuesta) AS hf,
		en.pregunta1 as p1, re.respuesta1 as r1,
       	en.pregunta2 as p2, re.respuesta2 as r2,
       	en.pregunta3 as p3, re.respuesta3 as r3
FROM encuesta en
 	   	INNER JOIN respuesta_encuesta re on en.codigo_encuesta = re.id_encuestafk
       	INNER JOIN usertable ut on ut.id = en.id_profesorfk
        INNER JOIN tipo_usuario tiu ON tiu.id_tipo_usuario = ut.tipo_usuario
;

SELECT en.codigo_encuesta, en.id_clasefk,en.seccion, en.pregunta1,en.pregunta2,en.pregunta3 
FROM encuesta en
WHERE en.id_profesorfk = 'Javier'and en.dia_encuesta = CURDATE()


SELECT cl.nombre_clase, es.nombre_escuela
FROM clases cl
INNER JOIN escuela es ON cl.id_escuela = es.id_escuela

SELECT * 
from encuesta en
JOIN clases cl ON en.id_clasefk = cl.id_clase

SELECT CASE WHEN hora_encuesta < "18:00:00" THEN "Diurno"
			WHEN hora_encuesta > "18:00:00" THEN "Vespertino" END as Horario 
FROM `encuesta` 