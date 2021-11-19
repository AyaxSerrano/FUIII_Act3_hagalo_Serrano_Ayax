<?php
include("conexion.php");
$con=conectar();

$id=$_POST['id'];
$nombre=$_POST['nombre'];
$apelldio=$_POST['apellido'];
$departamento=$_POST['departamento'];


$sql="INSERT INTO empleado VALUES('$id','$nombre','$apellido','$departamento')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location: empleado.php");
    
}else {
}
?>