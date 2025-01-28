<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Escola Inova</title>
    <link rel="stylesheet" href="../styles/estilo.css">
</head>

<body class="body-info">
    
        <!-- Imagem da Escola -->
        <a href="../index.php"> <img src="../images/Logo.png"> </a>

        <div class="informacoes-box">

            <div class="info">
                <h2>ID:</h2> <p> <?php echo $_SESSION['id'] ?> </p>
            </div>

            <div class="info">
                <h2>Nome:</h2>
                <p> <?php echo $_SESSION['nome'] ?> </p>
            </div>

            <div class="info">
                <h2>Curso:</h2>
                <p> <?php echo $_SESSION['curso'] ?> </p>
            </div>

            <div class="info">
                <h2>Email:</h2>
                <p> <?php echo $_SESSION['email'] ?> </>
            </div>

            <a href="login.php">Logout</a>

        </div>

</body>

</html>