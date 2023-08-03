<?php
$server='localhost';
$user='root';
$pass='';
$bd='pv';


$conexion=new mysqli($server,$user,$pass,$bd);

if($conexion->connect_errno){
    die("fallo");
}else{
    echo("Se conecto la Base de Datos");
}


?>