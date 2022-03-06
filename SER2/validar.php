<?php

include('db.php');
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
//session_start();

//$conexion=mysqli_connect("localhost","root","","login");

$consulta="SELECT*FROM usuarios where usuario='$usuario' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
    header("location:home.php");

}else{
    include("index.php"); //Cuando los datos no son los correctos entonces devolver al inicio de sesio


    //print "<script>alert(\"Contraseña o Usuario equivocado bro.\");
    //window.location='index.php';</script>";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>

