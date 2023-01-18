<?php
include("conexion.php");

$clave=$_POST['clave'];

$id=$_POST['id'];

if($clave=="1")
{
    $query="DELETE FROM datos1 where id='$id;";
    $resultadoc=$conexion->query($query);
}


header("Location:index.php");  

?>
