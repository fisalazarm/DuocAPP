<html>
    <?php $title = 'Menú Docente'; ?>
    <?php $currentPage = 'docente'; ?>
    <?php include('head.php'); ?>
    <?php include('nav-bar.php'); ?>
    <?php include('conexion.php'); ?>
    <?php
            error_reporting(E_ALL ^ E_NOTICE);
            session_start();
            $usuario = $_SESSION['username'];
    ?>

    <body>
        <div class="container-md d-flex justify-content-center" style="background-color:white" text-center py-5>
            <button onclick="history.go(-1);" id="Enviar" style="font-size: 25px">Volver </button>
        </div>
        <br>
        <div class="container-md col-12 col-lg-6 justify-content-center" style="background-color:white" text-center py-5>
            <h3 style="text-decoration: underline; text-center">Tutorial de cómo importar datos desde un CSV:</h3>
            <br>
            <div>
                <label>Materiales Necesarios:</label>
                <ol>
                    <li>Archivo Excel</li>
                    <li>Aplicacion de Duoc Abierta</li>
                </ol>
                <br>
                <label>Proceso a Realizar:</label>
                <ol>
                    <li>Entrar a alguno de los ingresos masivos (Ingreso masivo de usuarios y plan de estudios)</li>
                    <br>
                    <img src="images/tutorial.png" alt="Vista de Ingreso masivo de Plan de estudios">
                    <br>
                    <li>La vista de ingreso masivo tiene dos vistas: Una de ingreso de un csv y una tabla donde se muestran algunos de los datos insertados</li>
                    <br>
                    <img src="images/tutorial2.png" alt="Secciones de la Vista de Ingreso masivo">
                    <br>
                    <p>El recuadro rojo muestra la sección de agregar y subir un archivo, en cambio, la zona verde es donde se muestran algunos de los datos ingresado a través de una tabla, si no se muestra nada es por que no hay datos ingresados en la Base de datos. </p>
                    <br>
                    <li>Se busca en el explorador de archivos el Excel a subir al sistema y lo abren para realizar una modificaciones.</li>
                    <br>
                    <p>En mi caso utilizaré el del plan de estudios.</p>
                    <br>
                    <img src="images/tutorial3.png" alt="Archivo Excel a subir">
                    <br>
                    <p>Aca esta el ejemplo del Excel a modificar para que se pueda ingresar, primeramente la primera linea se elimina, ya que si no se borra, se agregaría como una
                        columna en la base de datos. </p>
                    <br>
                    <li>Guardar el Archivo Excel como CSV UTF-8</li>
                    <br>
                    <ol>
                        <li>Pimero ir a Archivo y hacer click en Guardar como</li>
                        <br>
                        <img src="images/tutorial4.png" alt="Instrucción para guardar CSV">
                        <br>
                        <li>Seleccionar como tipo de Archivo de CSV UTF-8</li>
                        <br>
                        <img src="images/tutorial5.png" alt="Instrucción para guardar CSV Parte 2">
                        <br>
                        <a>Codigo de Colores</a>
                        <ul>
                            <li><Strong>Roja:</strong> Es la Ubicación donde se guardará el archivo</li>
                            <li><Strong>Verde:</strong> Es el nombre del archivo</li>
                            <li><Strong>Celeste:</strong> Es el tipo de archivo, siempre debe ser CSV UTF-8 (Delimitado por comas)</li>
                            <li><Strong>Orange:</strong> Botón de guardar</li>
                        </ul>
                        <br>
                    </ol>
                    <li>Despues Procederemos a Subir el archivo creado</li>
                    <br>
                    <ol>
                        <li>Primero iremos a la app y seleccionaremos el botón seleccionar archivo</li>
                        <br>
                        <img src="images/tutorial6.png" alt="Mostrar el botón de seleccionar Archivo">
                        <br>
                        <li>Al darle click aparece la ventana de seleccionar el archivo en su dispositivo</li>
                        <br>
                        <p>- Seleccione el archivo csv entre todos sus archivos a subir (Oculte mis archivos por tema de privacidad), y le dan a Abrir</p>
                        <img src="images/tutorial7.png" alt="Ventana de seleccion de archivo en el equipo">
                        <br>
                        <li>Se actualiza el texto para mostrar que se cargo un archivo</li>
                        <br>
                        <a>- El texto se actualizo el texto al nombre del archivo</a>
                        <br>
                        <img src="images/tutorial8.png" alt="Cambio en el texto al cargar un archivo">
                        <br>
                        <li>Ahora para terminar se da click en "Subir Archivo"</li>
                        <br>
                        <img src="images/tutorial9.png" alt="Botón de Subir Archivo">
                    </ol>
                    <li>Ahora va a subir los datos del excel el sistema</li>
                    <br>
                    <p>Ahora empieza a cargar los datos desde el Excel a la Base de Datos. Se demora en cargar la pagina pero realmente ya subio los datos a la bd, si recargan la página estaran los datos insertados.</p>
                    <br>
                    <img src="images/tutorial10.png" alt="Vista de tabla de datos insertados">
                    <br>
                    <li>Listo. Con eso pueden trabajar con los datos ya ingresados.</li>
                </ol>
            </div>
        </div>  

    </body>
</html>