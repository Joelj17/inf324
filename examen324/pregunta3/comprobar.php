<?php
require("usuario.php");
$usuario=new Usuario();

$us=$_POST['usuario'];
$cont=$_POST['password'];
$res=$usuario->verificarUsuario($us,$cont);
if($res>0){
    session_start();
    $_SESSION['usuario']=$us;
    header("Location: inicio.php");

}else{
    header("Location: login1.php");

}


?>
