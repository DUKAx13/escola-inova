<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Inova</title>
    <link rel="stylesheet" href="../styles/estilo.css">
</head>

<body class="body-login">
    
    <!-- Imagem da Escola -->
    <a href="../index.php"> <img src="../images/Logo.png"> </a>

    <!-- Caixa de Login -->
    <div class="container-login">

        <form method="POST" action="">   
            
            <h1>Login</h1>

            <!-- Área do Usuário -->
            <div class="usuario">
                <input type="text" name="usuario" placeholder="Usuário">
            </div>

            <br>

            <!-- Área da Senha -->
            <div class="senha">
                <input type="password" name="senha" placeholder="Senha">
            </div>

            <br>

            <!-- Código -->
            <div class="mensagem">
                <?php 
                    include("../scripts/usuarios.php");
                    $conta = new Conta();

                    if(isset($_POST["usuario"]) && isset($_POST["senha"]))
                    {
                        $conta -> acessarConta($_POST['usuario'], $_POST['senha']);
                    }
                ?>
            </div>

            <br>

            <button>ENTAR</button>

        </form>

    </div>

</body>

</html>