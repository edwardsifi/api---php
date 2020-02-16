<?php
header("Access-Control-Allow-Headers: *");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Content-Type: application/json");


include_once("conexion.php");
function registrar_comentario(){
$postdata = file_get_contents ( "php://input" ) ; 
$request = json_decode($postdata) ;
global $con;
$datos="NADA";
$consulta="insert into comentario(nombre,dir,comentario,imagenUrl) values('".$request->nombre."','".$request->dir."','".$request->comentario."','".$request->imagenUrl."')";
$datos=$con->query($consulta);


return ($datos);
}
$resultado=registrar_comentario();
echo json_encode($resultado);
