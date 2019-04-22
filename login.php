<?php


$Nome = $_POST['Nome'];
$Email = $_POST['Email'];
$entrar = $_POST['Entrar'];
$conexao = new PDO('mysql:host=localhost;dbname=id4092991_newbase','id4092991_root','psa1414');

if (isset($entrar)) {

$verificar = $conexao->prepare("SELECT * FROM usuarios WHERE Nome = '$Nome' AND Email ='$Email'") or die ("erro ao selecionar");

if (isset($verificar)) {

echo"<script language='javascript' type='text/javascript'>alert('Nome e/ou Email estão incorretos');windows.location.href='login.html';</script>";

} else {
    setcookie("Nome",$Nome);
    header("Location:entrou.php");
 }
 }
?>