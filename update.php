<?php

include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$departamento=$_POST['departamento'];

$sql="UPDATE empleado SET  id='$id',nombre='$nombre',apellido='$apellido' WHERE id='$id'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: empleado.php");
    }
?>