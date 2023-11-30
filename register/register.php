<?php
    if(isset($_POST['submit'])){
        include_once('../config/config.php');
        $nome = $_POST['username'];
        $senha = $_POST['password'];
        $email = $_POST['email'];
        // $dbHost = 'localhost';
        // $dbUser = 'root';
        // $dbPass = '';
        // $dbName = 'webnews';
        // $conexao = new mysqli($dbHost,$dbUser,$dbPass,$dbName);

        $createUser = mysqli_query($conexao, "INSERT INTO registros(nome,senha,email) VALUES ('$nome','$senha','$email')");
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/styles/style.css">
    <title>WebNews</title>
</head>
<body>
    <header class="header">
        <div class="logo">
            <h2>
                WebNews
            </h2>
        </div>
    </header>
    <section class="conteiner">
        <div class="register-form">
            <div class="registerLogo">
                <h2>register</h2>
            </div>
            <br>
            <form action="register.php" method="POST">
                <div class="username-register">
                    <input type="text" name="username" id="username" placeholder="Seu Nome">
                </div>
                <br>
                <div class="password-register">
                    <input type="password" name="password" id="password" placeholder="Sua Senha">
                </div>
                <br>
                <div class="email-register">
                    <input type="email" name="email" id="email" placeholder="Seu Email">
                </div>
                <br>
                <div class="genero-register">
                    <label for="genero">Feminino</label>
                    <input type="radio" name="genero" id="genero" value="Feminino">
                    <label for="genero">Masculino</label>
                    <input type="radio" name="genero" id="genero" value="Masculino">
                </div>
                <br>
                <div class="btn">
                    <input type="submit" value="Enviar" name="submit">
                </div>
            </form>
        </div>
    </section>
</body>
</html>