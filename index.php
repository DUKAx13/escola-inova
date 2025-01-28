<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Inova</title>
    <link rel="stylesheet" href="styles/estilo.css">
</head>

<?php 

    session_start(); 

    include("config.php"); 
    include("scripts/usuarios.php");

?>

<body>

    <nav>

        <img class="logo" src="images/Logo.png"> 

        <img class="login_logo" src="images/login_logo.png">

        <h3 class="login-area"> 

            <?php if(isset($_SESSION['nome'])) { ?>

                <a href="pages/informacoes_aluno.php"> <?php echo $_SESSION['nome']; ?> </a> 

            <?php } else { ?> <a href="pages/login.php">Login</a> <?php } ?>

        </h3>
        

    </nav>

    <header>



    </header>

    <footer>



    </footer>

</body>

</html>
