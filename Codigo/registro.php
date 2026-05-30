<?php
// areglo de nombres de asistentes 
// Este script crea un archivo de texto y escribe los nombres de los asistentes en el

// Nombre del archivo donde se guradaran los nombres 
$nombreArchivo = "Asistentes.txt";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        try {
            $nombre = trim($_POST['nombre']);

            if (empty($nombre)) {
                throw new Exception("Debe ingresar un nombre");
            }
            
            $archivo = fopen($nombreArchivo, "a");

            if (!$archivo) {
                throw new Exception("No se pudo abrir el archivo.");
            }

            fwrite($archivo, $nombre . PHP_EOL);

            fclose($archivo);

            echo "Nombre guardado correctamente";

    } catch (Exception $e) {
        echo "Ocurrio un error: " . $e->getMessage();
    }// catch
}
?>