<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Content-Type: application/json");


include_once("conexion.php");
function obtener_comentarios(){
global $con;
$consulta=$con->query("select nombre,dir,comentario,imagenUrl from comentario");
$datos=$consulta->fetchAll();

return $datos;
}
$resultado=obtener_comentarios();
echo json_encode($resultado);