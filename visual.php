<?php 
$count = 0;
$pdo = new PDO('mysql:host=localhost;dbname=id4092991_newbase','id4092991_root','psa1414');
$stmt = $pdo->prepare("SELECT Nome, Email FROM usuarios;");
$consulta = $stmt->execute();

$pontodepartida = $stmt->fetchAll(PDO::FETCH_ASSOC);

foreach ($pontodepartida as $_POST) {
    
    $count++;

   echo  $count." - ". "Nome: ".$_POST['Nome']." <=========> <=========> E-mail: ".$_POST['Email']."<br />";

}


?>
