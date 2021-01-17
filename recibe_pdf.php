 <?php  
include('config.php');
date_default_timezone_set("America/Bogota");
$fecha      	=  date("d_m_Y");
$hora        	=  date("g:i:A");

//Verificando si existe el directorio de lo contarios lo creamos el Directorio
$directorio = "Files_Pdf/";
if (!file_exists($directorio)) {
    mkdir($directorio, 0777, true);
}

$namefile  = $_REQUEST['name_file'];
$urlFile   = $_FILES["file-input"]["name"]; //Recibiendo el Archivo


//Modificando nombre del archivo
$new_name_file  = $fecha.'.'.$urlFile;


//Guardando archivo en la carperta
$archivo = $directorio . basename($new_name_file); 
$tipoArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));  
if (move_uploaded_file($_FILES["file-input"] ["tmp_name"], $archivo)) {
	
	//Registrando el archivo en bd
	$InsertFile = ("INSERT INTO archivos(
		  urlArchivo,
		  name_file,
		  fecha_actual
		)
		VALUES (
		  '" .$new_name_file. "',
		  '" .$namefile. "',
		  '" .$fecha.'_'.$hora. "'
		)");
	$resultInsert = mysqli_query($con, $InsertFile); ?>
	<script type="text/javascript">
		window.location.href = "index.html";
	</script>
<?php

} else {
    echo "error en la subida del archivo";
}
mysqli_close($con);
?>