<?php
    session_start();
    if(isset($_POST["submit"]) && !empty($_POST["username"]) && !empty($_POST["password"])){
        include_once('config/config.php');
        $username = $_POST["username"];
        $password = $_POST["password"];

        $listToRegisters = $conexao->query("SELECT * FROM registros WHERE nome = '$username' and senha = '$password'");
        if(mysqli_num_rows($listToRegisters) < 1){
            unset($_SESSION['username']);
            unset($_SESSION['password']);
            header('Location: index.php');
        }
        else {
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
            header("Location: access/homepage.php");
        }

    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="source/styles/style.css">
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
        <div class="login-form">
            <div class="loginLogo">
                <h2>login</h2>
            </div>
            <br>
            <form action="index.php" method="POST">
                <div class="username-login">
                    <input type="text" name="username" id="username" placeholder="Seu Nome">
                </div>
                <br>
                <div class="password-login">
                    <input type="password" name="password" id="password" placeholder="Sua Senha">
                </div>
                <br>
                <div class="no-account">
                    <p>Ainda não tem uma conta? Crie uma <a href="register/register.php">Aqui</a></p>
                </div>
                <br>
                <div class="btn">
                    <input type="submit" value="Enviar" name="submit">
                </div>
            </form>
        </div>
    </section>
    <script src="source/scripts/main.js"></script>
</body>
</html>