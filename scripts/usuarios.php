<?php 

class Conta
{ 
    function acessarConta($usuario, $senha)
    {
        include("../config.php");
        $msg = "";

        if ($usuario == null) { $msg = "Preencha o campo de Usuário"; }
        else if ($senha == null) { $msg = "Preencha o campo de Senha"; }
        else
        {
            $usuarioReg = $conexao->real_escape_string($usuario);
            $senhaReg = $conexao->real_escape_string($senha);
    
            $sql_code = "SELECT * FROM usuario WHERE id = '$usuarioReg' AND senha = '$senhaReg'";
            $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

            $quantidade = $sql_query->num_rows;

            if($quantidade > 0) {
            
                $usuario = $sql_query->fetch_assoc();

                if(!isset($_SESSION)) 
                { 
                    session_start(); 
                }

                $_SESSION['id'] = $usuario['id'];
                $_SESSION['nome'] = $usuario['nome'];
                $_SESSION['curso'] = $usuario['curso'];
                $_SESSION['email'] = $usuario['email'];

                header("Location: ../index.php");

            } 
            else { echo "Falha ao logar! Usuário ou Senha incorretos"; }
        }

        echo $msg;
    }

}

?>