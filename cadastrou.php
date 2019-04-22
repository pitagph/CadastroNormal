<?php   
   // Cria uma class Conexao para acessar o banco  de dados
   class Conexao {
   
    //Testando a conexao.
    public function conectar() {
        try {
            $conexao = new PDO('mysql:host=localhost;dbname=id4092991_newbase','id4092991_root','psa1414');
            $conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   echo "conexao estabelecida";
     } catch(PDOException $e) {
   echo 'ERROR: ' . $e->getMessage();
        }      
        return $conexao;      
    }
}
// Fim da classe Conexao

class UsuarioDB {

    // Função onde sera inserido os usuarios
               
    public function inserir($Nome, $Email){
        $j = new Conexao;
        $c = $j->conectar();

        if ($Nome == "" || $Nome == null) {

            echo "O campo Nome deve ser preenchido";
            
            } else {

        $sql = $c->prepare("insert into usuarios (Nome, Email) values (:Nome, :Email)");
        $sql->bindParam("Nome", $Nome, PDO::PARAM_STR);
        $sql->bindParam("Email", $Email, PDO::PARAM_STR);
        $sql->execute();
        echo "Usuario Adicionado com sucesso!!!!";
      
    }
    
        }
}

$insert = new UsuarioDB(); 
$insert->inserir($_POST["Nome"],$_POST["Email"]);


?>