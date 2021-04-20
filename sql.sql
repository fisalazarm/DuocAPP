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

/*
Escuela	C.Asig.	Nom. Asignatura	DenDiscipl				
Administración y Negocios	COA3111	CONTROL PRESUPUESTARIO Y COSTOS	
Administración y Negocios	LOA5114	COSTOS DE OPERACIONES LOGÍSTICAS	
Administración y Negocios	FZA5114	COSTOS PARA LA TOMA DE DECISIONES	
Administración y Negocios	GPA1111	DESCRIPCIÓN DE CARGOS	
Administración y Negocios	ADA5133	DISEÑO DE PLANES ESTRATÉGICOS	
Administración y Negocios	DSI0201	DIVERSIDAD E INCLUSIÓN	Optativos
Administración y Negocios	COA1118	ESTADOS FINANCIEROS E IFRS	
Administración y Negocios	MKA5114	ESTRATEGIAS DE FIDELIZACIÓN DE CLIENTES	
Administración y Negocios	MKA5124	ESTRATEGIAS DE MARKETING INTERNO	
Administración y Negocios	MKA3121	ESTRATEGIAS DIGITALES		
Administración y Negocios	FZA7147	EVALUACIÓN DE PROYECTOS	
Administración y Negocios	FZA5124	FINANZAS CORPORATIVAS	
Administración y Negocios	FZA3111	FINANZAS DE LARGO PLAZO	
Administración y Negocios	FZA5123	FINANZAS PARA LA EVALUACIÓN DE PROYECTOS		
Administración y Negocios	LOA7124	GEST. DE CALIDAD MEDIOAMB. Y LOG. VERDE	
Administración y Negocios	ADA7144	GESTIÓN DE CALIDAD		
Administración y Negocios	TRA7117	GESTIÓN DE IMPUESTOS		
Administración y Negocios	RHA5124	GESTIÓN DE RECURSOS HUMANOS	
Administración y Negocios	AUA7127	GESTIÓN DE RIESGOS	
Administración y Negocios	RHA7103	GESTIÓN DEL TALENTO	
Administración y Negocios	TEA1119	HERRAM. TECNO. PARA LA GESTIÓN CONTABLE	
Administración y Negocios	TEA1117	HERRAM. TECNO. PARA LA GESTIÓN LOGÍSTICA		
Administración y Negocios	HAE0010	HERRAMIENTAS AVANZADAS DE EXCEL	Optativos
Administración y Negocios	FZA3115	HERRAMIENTAS FINANCIERAS		
Administración y Negocios	TEA1111	HERRAMIENTAS TECNOLÓGICAS	
Administración y Negocios	TRA3118	IMPUESTO A LA RENTA		
Administración y Negocios	TRA3128	IMPUESTO A LAS VENTAS Y SERVICIOS		
Administración y Negocios	LPA0201	LEGISLAC PREVISIONAL Y SEGURIDAD SOCIAL	Optativos
Administración y Negocios	LEA010	LIDERAZGO EFECTIVO	Optativos
Administración y Negocios	LOA3135	LIDERAZGO EN LOGÍSTICA	
Administración y Negocios	LOA5134	LOGÍSTICA Y COMERCIO INTERNACIONAL		
Administración y Negocios	MKA1111	MARKETING MIX	
Administración y Negocios	FZA1111	MERCADOS FINANCIEROS	
Administración y Negocios	LOA1115	OPERACIONES DE COMPRA Y ABASTECIMIENTO	
Administración y Negocios	LOA3115	OPT. OPERAC. ALMACENAMIENTO E INVENTARIO	
Administración y Negocios	LOA3125	OPTIMIZACIÓN OPERACIONES DE TRANSPORTE	
Administración y Negocios	MKA3124	PLAN DE CANALES DE DISTRIBUCIÓN	
Administración y Negocios	MKA3134	PLAN DE COMUNICACIONES Y MEDIOS	
Administración y Negocios	RHA7123	PLAN DE GESTIÓN DE CALIDAD	
Administración y Negocios	MKA3114	PLAN DE PRODUCTOS Y PRECIOS	
Administración y Negocios	LOA7004	PLAN. ESTRATÉGICA DE ALMACENAMIENTO	
Administración y Negocios	LOA7034	PLAN. ESTRATÉGICA DE LOG. INTERN. Y TRAN	
Administración y Negocios	LOA7144	PLANI. ESTR. DE LOG. INTERN.Y TRANSPORTE	
Administración y Negocios	ADA7137	PLANIF. ESTRATEGICA Y CONTROL DE GESTIÓN		
Administración y Negocios	LOA7134	PLANIFICACIÓN ESTRATÉGICA DE ALMACEN.		
Administración y Negocios	MKA7124	PLANIFICACIÓN ESTRATÉGICA DE MARKETING	
Administración y Negocios	RHA7113	PLANIFICACIÓN ESTRATÉGICA DE REC.HUMANOS	
Administración y Negocios	PTA1306	PORTAFOLIO DE TÍTULO		
Administración y Negocios	PTA1396	PORTAFOLIO DE TÍTULO TÉCNICO		
Administración y Negocios	PLA1304	PRÁCTICA LABORAL		
Administración y Negocios	PPA8123	PRÁCTICA PROFESIONAL	
Administración y Negocios	PPA1396	PRÁCTICA TÉCNICA	
Administración y Negocios	RHA1118	PROCEDIMIENTOS LABORALES Y CONTRATACIÓN		
Administración y Negocios	RHA3113	PROCEDIMIENTOS LEGALES ADMINIST.PÚBLICOS	
Administración y Negocios	APA1238	PROCESO DE PORTAFOLIO	
Administración y Negocios	ADA1118	PROCESOS ADMINISTRATIVOS DE NEGOCIOS		
Administración y Negocios	RHA5103	PROGRAMAS DE BENEFICIOS Y COMPENSACIONES	
Administración y Negocios	RHA7133	RELACIONES LABORALES	
Administración y Negocios	ADA7102	RESPONSABILIDAD SOCIAL EMPRESARIAL	
Administración y Negocios	MKA1121	SEGMENTACIÓN	
Administración y Negocios	RHA5113	SISTEMA DE COMPENSACIONES	
Administración y Negocios	TEA7106	SOFTWARE DE GESTIÓN COMERCIAL	
Administración y Negocios	TEA7143	SOFTWARE DE GESTIÓN DE RECURSOS HUMANOS	
Administración y Negocios	TEA3114	SOFTWARE DE GESTIÓN FINANCIERA	
Administración y Negocios	TEA7104	SOFTWARE DE GESTIÓN PARA LA LOGÍSTICA	
Administración y Negocios	TIR0010	TAL. IMP. RENTA	Optativos
Administración y Negocios	TCP0010	TALLER DE COMPRAS PÚBLICAS	Optativos
Administración y Negocios	TIH0010	TALLER INTEGRADO DE RECURSOS HUMANOS	Optativos
Administración y Negocios	MKA7114	TRADE MARKETING	
Administración y Negocios	MKA3111	TRADE MARKETING Y MERCHANDISING	
Administración y Negocios	MKA3131	VENTAS CONSULTIVAS	


Comunicación	IVO0010	INTRODUCCION AL VIDEOJUEGO	
Construcción	RSE0010	RESPONSABILIDAD SOCIAL EMPRESARIAL	Optativos
Diseño	ADD7012	ADMINISTRACION	
Diseño	AMD5011	ANIMACIÓN MULTIMEDIA	
Diseño	IID5411	ARQUITECTURA Y DISEÑO DE INTERFACES	
Diseño	DGD1112	CONTEXTO CULTURAL DEL DISEÑO GRÁFICO		
Diseño	ADDA302	COORD. DE ACTIV. TALLER/LAB. ESC. DISEÑO		
Diseño	DTD1131	CULTURA DEL DISEÑO	
Diseño	RPD1141	DIBUJO TÉCNICO DE PRODUCTOS	
Diseño	IVD5411	DISEÑO DE IMAGEN CORPORATIVA		
Diseño	DED0101	DISEÑO EDITORIAL	
Diseño	DED9111	DISEÑO EMOCIONAL	
Diseño	EPD3011	EDICIÓN EN PUBLICACIONES	
Diseño	ECD5011	ELEMENTOS DE COMUNICACIÓN	
Diseño	DGD1122	ELEMENTOS DEL DISEÑO GRÁFICO		
Diseño	EAD9111	EMPRENDIMIENTO Y AUTOGESTIÓN	
Diseño	EID9113	ESTRATEGIAS DE INNOVACIÓN	
Diseño	EID9113	ESTRATEGIAS DE INNOVACIÓN	
Diseño	FOD0101	FOTOGRAFÍA	Optativos
Diseño	FOD0101	FOTOGRAFÍA	Inter Disciplinario
Diseño	GDD4011	GESTIÓN DE DOCUMENTOS	
Diseño	MQD2011	MAQUETACIÓN	
Diseño	MKD9113	MARKETING	
Diseño	MID2011	MATERIALES DE IMPRESIÓN	
Diseño	MVD5011	MENSAJE VISUAL	
Diseño	MGD0101	MOTION GRAPHICS	
Diseño	NPD9113	NEGOCIACIÓN DE PROYECTOS DE DISEÑO	
Diseño	PTD2414	PORTAFOLIO DE TITULO	
Diseño	PLD2308	PRÁCTICA LABORAL	
Diseño	PPD8231	PRÁCTICA PROFESIONAL	
Diseño	PPD2414	PRÁCTICA PROFESIONAL	
Diseño	APD2349	PROCESO DE PORTAFOLIO	
Diseño	PID2011	PROCESOS DE IMPRESIÓN	
Diseño	DGD3412	PRODUCCIÓN DE SISTEMAS GRÁFICOS	
Diseño	DTD3121	PROTOTIPADO RÁPIDO Y SERIES CORTAS	
Diseño	PPD9113	PROYECTO PROFESIONAL	
Diseño	RCD5011	REFERENTES CULTURALES	
Diseño	DGD3112	REFERENTES Y TENDENCIAS DEL DISEÑO GRÁFI	
Diseño	RMD1131	REPRESENTACIÓN CONCEPTUAL DIGITAL	
Diseño	RPD3011	REPRESENTACIÓN DE PRODUCTOS	
Diseño	DGD1132	REPRESENTACIÓN GRÁFICA	
Diseño	TIV5011	TALLER DE IDENTIDAD VISUAL		
Diseño	DTD3111	TALLER DE PRODUCTO CENTRADO EN EL USUARI	
Diseño	RPD1111	TALLER DE REPRESENTACIÓN	
Diseño	TSD5011	TALLER DE SISTEMA PRODUCTO		
Diseño	TDJ0010	TALLER DISEÑO DE JUGUETES	
Diseño	TPI3011	TALLER PRODUCCIÓN IMPRESOS	
Diseño	RPD1121	TÉCNICAS DE MAQUETACIÓN	
Diseño	TAD3011	TECNOL. APLICADA A PROYECTOS DE DISEÑO	
Diseño	TID0101	TIPOGRAFÍA	Profundización
Informática y Telecomunicaciones	ASY3132	ADMINISTRACIÓN SISTEMA OPERATIVO ENTERPR	
Informática y Telecomunicaciones	BDY7101	BIG DATA		
Informática y Telecomunicaciones	CUY5131	COMUNICACIONES UNIFICADAS	
Informática y Telecomunicaciones	CAT5501	CONFIGURACIÓN AVANZADA DE ROUTERS	
Informática y Telecomunicaciones	ADDA306	COORD. DE ACTIV. TALLER/LAB. ESC. INFORM	
Informática y Telecomunicaciones	ADDA109	COORDINADOR CITT		
Informática y Telecomunicaciones	DPR7501	DETECCIÓN DE PROBLEMAS DE RED		
Informática y Telecomunicaciones	DDR7501	DISEÑO DE REDES	
Informática y Telecomunicaciones	DRT7501	DISEÑO DE REDES DE TELECOMUNICACIONES		
Informática y Telecomunicaciones	PRY1111	DISEÑO Y GESTIÓN DE REQUISITOS	
Informática y Telecomunicaciones	EPY5101	EVALUACIÓN DE PROYECTOS	
Informática y Telecomunicaciones	GAY0101	GESTIÓN ÁGIL DE PROYECTOS	Optativos
Informática y Telecomunicaciones	GPI0001	GESTIÓN DE PERSONAS	Optativos
Informática y Telecomunicaciones	GRY7101	GESTIÓN DE RIESGOS	
Informática y Telecomunicaciones	PRY3111	INGENIERÍA DE SOFTWARE		
Informática y Telecomunicaciones	INY1122	INSTALACIÓN Y CERTIFICACIÓN DE REDES		
Informática y Telecomunicaciones	IPY5101	INTEGRACION DE PLATAFORMAS	
Informática y Telecomunicaciones	CSY3122	INTRODUCCIÓN A CIBERSEGURIDAD	
Informática y Telecomunicaciones	LNY0101	LIDERAZGO Y NEGOCIACIÓN	Optativos
Informática y Telecomunicaciones	MDY7101	MINERÍA DE DATOS	
Informática y Telecomunicaciones	MDY1131	MODELAMIENTO DE BASE DE DATOS		
Informática y Telecomunicaciones	PTY4441	PORTAFOLIO DE TÍTULO		
Informática y Telecomunicaciones	PRL5461	PRÁCTICA LABORAL		
Informática y Telecomunicaciones	PPT5443	PRÁCTICA PROFESIONAL		
Informática y Telecomunicaciones	APY4451	PROCESO DE PORTAFOLIO	
Informática y Telecomunicaciones	BPY5101	PROCESOS DE NEGOCIO (BPM)	
Informática y Telecomunicaciones	PGY1121	PROGRAMACIÓN DE ALGORITMOS	
Informática y Telecomunicaciones	MDY3131	PROGRAMACIÓN DE BASE DE DATOS	
Informática y Telecomunicaciones	PGY3121	PROGRAMACIÓN WEB	
Informática y Telecomunicaciones	RCV5501	REDES CORPORATIVAS DE VOZ Y VIDEO	
Informática y Telecomunicaciones	ARY3112	ROUTING Y SWITCHING	
Informática y Telecomunicaciones	ARY5111	ROUTING Y SWITCHING CORPORATIVO	
Informática y Telecomunicaciones	CSY5121	SEGURIDAD EN REDES CORP (CCNA Security)	
Informática y Telecomunicaciones	SRC5501	SEGURIDAD EN REDES CORPORATIVAS	
Informática y Telecomunicaciones	SRY1142	SOPORTE COMPUTACIONAL (IT ESSENTIALS)	
Informática y Telecomunicaciones	SRY1132	SOPORTE EN REDES DE ACCESO Y ANTENA	
Informática y Telecomunicaciones	TCY0101	TÉCNICAS DE CALIDAD DE SOFTWARE	Optativos
Informática y Telecomunicaciones	VTY1112	TRANSFORMACIÓN DIGITAL	
Programa de Emprendimiento	GMP0101	GESTIÓN DE MARCA PERSONAL	Optativos
Programa de Emprendimiento	EMP2102	INNOVACIÓN EN PRODUCTOS Y SERVICIOS	
Programa de Emprendimiento	EMP1101	MENTALIDAD EMPRENDEDORA	
Programa de Emprendimiento	PEI120	PROYECTOS DE INNOVACIÓN	
Programa de Etica	FET102	ANTROPOLOGIA	
Programa de Etica	FET003	ETICA	
Programa de Etica	FET003	ETICA	
Programa de Etica	EAA1430	ÉTICA PARA EL TRABAJO	
Programa de Etica	FET207	ETICA PROFESIONAL	
Programa de Etica	FCE1100	FUNDAMENTOS DE ANTROPOLOGÍA	
Programa de Formación Cristiana	PFC040	DOCTRINA SOC.IGLESIA	Programa de Formación Cristiana
Programa de Formación Cristiana	PFC010	PRINCIP.FE CRISTIANA	Programa de Formación Cristiana
Programa de Inglés	ESP115	COMMUNICATION SKILLS	
Programa de Inglés	ESP319	ESP CONTABLE	
Programa de Inglés	ESP114	ESP DISEÑO	
Programa de Inglés	ESP318	ESP FINANZAS	
Programa de Inglés	ESP315	ESP MARKETING	
Programa de Inglés	ESP315	ESP MARKETING	
Programa de Inglés	INU511	INGLES AVANZADO I	
Programa de Inglés	INU1101	INGLÉS BÁSICO I	
Programa de Inglés	INU2101	INGLÉS BÁSICO II	
Programa de Inglés	INI3111	INGLÉS ELEMENTAL	
Programa de Inglés	INU4101	INGLÉS ELEMENTAL II	
Programa de Inglés	INI5101	INGLÉS INTERMEDIO	
Programa de Inglés	INU311	INGLES INTERMEDIO I	
Programa de Inglés	INU411	INGLES INTERMEDIO II	
Programa de Inglés	ESPV510	INGLES PARA LAS TECNOLOGÍAS	
Programa de Lenguaje y Comunicación	PLC1101	HABILIDADES BÁSICAS DE COMUNICACIÓN	
Programa de Matemáticas	MAT2110	ÁLGEBRA	
Programa de Matemáticas	MAT330	CALCULO I	
Programa de Matemáticas	MAT4110	ESTADÍSTICA DESCRIPTIVA	
Programa de Matemáticas	EST402	ESTADÍSTICA I	
Programa de Matemáticas	EST500	ESTADISTICA II	
Programa de Matemáticas	MAT1120	HABILIDADES NUMÉRICAS	
Programa de Matemáticas	MAT4120	HERRAMIENTAS DE ANÁLISIS PARA LA GESTIÓN	
Programa de Matemáticas	MAT2120	MATEMÁTICA APLICADA	
Programa de Matemáticas	MAT1110	NIVELACIÓN MATEMÁTICA	
                        ADDA508	ASESOR ACBD	
                        ADDA505	ASESOR AVA	
                        ADDA503	ASESOR DE INCLUSIÓN UAP	
                        ADDA501	ASESOR PEDAGÓGICO UAP	
                        ADDA104	COORD. DE EXTENS./VINCUL. CON EL MEDIO		
                        ADDA102	COORDINADOR DE LÍNEA	
                        ADDA103	COORDINADOR DE PORTAFOLIO
                        ADDA107	COORDINADOR DE PRÁCTICA	
                        ADDA105	COORDINADOR RENDIMIENTO ACADÉMICO	
                        ADDA507	TUTORÍA MODELO VIRTUAL	

*/

SELECT codAsignatura,nombreAsignatura,escuela,
        CASE WHEN escuela = 'Diseño' THEN 1 END
FROM plandeestudio;

SELECT codAsignatura,nombreAsignatura,escuela,
        CASE WHEN escuela = 'Dise?o' THEN 1
             WHEN escuela = 'Inform?tica y Telecomunicaciones' THEN 2 
         	 WHEN escuela = 'Administraci?n y Negocios' THEN 3
             WHEN escuela = 'Extracurricular Deportes Ancla' THEN 4
             WHEN escuela = 'Extracurricular Selecciones Deporte' THEN 5
             WHEN escuela = 'Extracurricular Asuntos Estudiantiles' THEN 6
             WHEN escuela = 'Programa de Emprendimiento' THEN 7
             WHEN escuela = 'Programa de Etica' THEN 8
             WHEN escuela = 'Programa de Ingl?s' THEN 9
             WHEN escuela = 'Programa de Matem?ticas' THEN 10
             WHEN escuela = 'Comunicaci?n' THEN 11
             WHEN escuela = 'Programa de Formaci?n Cristiana' THEN 12
             WHEN escuela = 'Programa de Lenguaje y Comunicaci?n' THEN 13
             WHEN escuela = 'Construcci?n' THEN 14
             WHEN escuela = 'Escuela' THEN 15
             WHEN escuela = ' ' THEN 0
             END
FROM plandeestudio
INSERT INTO `asignatura`(`codigo_asignatura`, `nombre_asignatura`, `id_escuela`) 
SELECT DISTINCTROW codAsignatura,nombreAsignatura,
        CASE WHEN escuela = 'Dise?o' THEN 1
             WHEN escuela = 'Inform?tica y Telecomunicaciones' THEN 2 
         	 WHEN escuela = 'Administraci?n y Negocios' THEN 3
             WHEN escuela = 'Extracurricular Deportes Ancla' THEN 4
             WHEN escuela = 'Extracurricular Selecciones Deporte' THEN 5
             WHEN escuela = 'Extracurricular Asuntos Estudiantiles' THEN 6
             WHEN escuela = 'Programa de Emprendimiento' THEN 7
             WHEN escuela = 'Programa de Etica' THEN 8
             WHEN escuela = 'Programa de Ingl?s' THEN 9
             WHEN escuela = 'Programa de Matem?ticas' THEN 10
             WHEN escuela = 'Comunicaci?n' THEN 11
             WHEN escuela = 'Programa de Formaci?n Cristiana' THEN 12
             WHEN escuela = 'Programa de Lenguaje y Comunicaci?n' THEN 13
             WHEN escuela = 'Construcci?n' THEN 14
             WHEN escuela = 'Escuela' THEN 15
             WHEN escuela = ' ' THEN 0
             END
FROM plandeestudio


SELECT nombre_asignatura,
		SUBSTR(CONCAT(nombre_asignatura,' ',codigo_asignatura),-7,7),
		codigo_asignatura
FROM `asignatura` 


<?php  /*
                $asig= $con->query("SELECT codigo_asignatura FROM asignatura WHERE id_asignatura = '$asignatura'");            
                while ($a = $asig->fetch_assoc()) {
                    
                */
            ?>

/******/
 <div class="text-center">
            
            <div class="container">
       <div class="row">
       <div class="form-group col-12 col-lg-6">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo,
                                    asi.nombre_Asignatura as asig,
                                    en.seccion as seccion,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            join asignatura asi on asi.id_asignatura = en.id_clasefk
                            WHERE en.id_profesorfk = '$usuario' and en.dia_encuesta = CURDATE()";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['codigo']?></td>
                        <td><?php echo $usuario['asig']?></td>
                        <td><?php echo $usuario['seccion']?></td>
                        <td><?php echo $usuario['pro']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
           </div>
       </div> 
    </div>
                                                                                                    
            </div>












 <div class="text-center">
            
            <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo,
                                    asi.nombre_Asignatura as asig,
                                    en.seccion as seccion,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            join asignatura asi on asi.id_asignatura = en.id_clasefk
                            WHERE en.id_profesorfk = '$usuario' and en.dia_encuesta = CURDATE()";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['codigo']?></td>
                        <td><?php echo $usuario['asig']?></td>
                        <td><?php echo $usuario['seccion']?></td>
                        <td><?php echo $usuario['pro']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
           </div>
       </div> 
    </div>
                                                                                                    
            </div>

        </div>





        
            <div class="text-center">
            
            <div class="container">
       <div class="row">
           <div class="col-lg-12">
            <table id="tablaUsuarios" class="table-striped table-bordered" style="width:100%">
                <thead class="text-center">
                    <th>Codigo Encuesta</th>
                    <th>Asignatura </th>
                    <th>Sección</th>
                    <th>Responsable</th>                    
                </thead>
                <tbody>
                    <?php
                        $sql ="SELECT en.codigo_encuesta as codigo,
                                    asi.nombre_Asignatura as asig,
                                    en.seccion as seccion,
                                    en.id_profesorfk as pro
                            FROM encuesta en
                            join asignatura asi on asi.id_asignatura = en.id_clasefk
                            WHERE en.id_profesorfk = '$usuario' and en.dia_encuesta = CURDATE()";
                        $result = mysqli_query($con,$sql);
                        while($usuario=mysqli_fetch_array($result))
                        {
                        
                    ?>
                    <tr>
                        <td><?php echo $usuario['codigo']?></td>
                        <td><?php echo $usuario['asig']?></td>
                        <td><?php echo $usuario['seccion']?></td>
                        <td><?php echo $usuario['pro']?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
            
           </div>
       </div> 
    </div>