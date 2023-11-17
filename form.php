<?php

require_once 'Mysql.php';


 
        if(!empty($_POST)){
            $nome = $_POST['nome'] ?? '';
            $email = $_POST['email'] ?? '';
          //var_dump($_POST); 
  
        if($nome != '' && $email != ''){
            cadastrar($nome,$email);
        }

        }

        function cadastrar($nome,$email){
            try {
                $conexao = Mysql::conectar();


                $sql = "INSERT INTO login (nome, email) VALUES (:nome, :email)";

                $stmt = $conexao->prepare($sql);

                $stmt->bindParam(':nome', $nome);
                $stmt->bindParam(':email', $email);
                $stmt->execute();  
                header('Location: obrigado.php');
            }
            catch (Exception $e) {
                echo '<h2 style="color:red;">Erro ao inserir dados:(</h2>';
                echo $e->getMessage();
            }
        }
        
    


?>