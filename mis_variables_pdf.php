<?php
include('config.php');
//$id = $_REQUEST[1];

$id = "1";
$sqlVariables = ("SELECT * FROM mis_variables WHERE id='".$id."'");
$queryVar  = mysqli_query($con, $sqlVariables);
$MiDataVar = mysqli_fetch_array($queryVar);

$nombreEncargado =  $MiDataVar['nombre']; 
$Cargo 			 =  $MiDataVar['cargo']; 


/* VARIABLES */
$tecnico1       = "Tecnico #1";
$nametecnico1   = "Angel G";
$tiempo1        = "10:52 PM";

$tecnico2       = "Tecnico #2";
$nametecnico2   = "Host P";
$tiempo2        = "03:25 PM";

$trabajoRealizar    = "Trabajo a realizar"; 
$posicion           = "Posicion # (?)"; 
$dimension          = "Dimension"; 


# MATERIALES
$materiales     = "Materiales:";
$id             = "# 1";
$codigo         = "001";
$descripcion    = "Descripcion";
$cantidad       = 20;

$id1             = "# 2";
$codigo1         = "002";
$descripcion1    = "Descripcion 2";
$cantidad1       = 100;

$textosupervisor     = "Nombre supervisor";
$namesupervisor      = "Diego Vernal";

$nombreFirma    = "Firma del encargado";

?>