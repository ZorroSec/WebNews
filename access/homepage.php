<?php
    session_start();
    include_once('../config/config.php');
    if((!isset($_SESSION['username']) == true) and (!isset($_SESSION['password']) == true)){
        unset($_SESSION['username']);
        unset($_SESSION['password']);
        header('Location: ../index.php');
    }
    $logged = $_SESSION['password'];
    $read = $conexao->query("SELECT * FROM posts");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../source/styles/style.css">
    <script src="../source/scripts/dateNow.js"></script>
    <title>WebNews</title>
    <style>
        section.dateNow{
            margin: auto;
            width: 85%;
            box-shadow: 1px 2px 3px rgba(0,0,0,.3);
            padding: 10px;
            background: #ffffff;
            border-radius: 10px;
            text-align: center;
        }
        section.conteiner-options div.links{
            margin: auto;
            width: 85%;
            padding: 10px;
            background: #ffffff;
            box-shadow: 1px 2px 3px rgba(0,0,0,.3);
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            margin-top: 10px;
            border-radius: 10px
        }
    </style>
</head>
<body onload="dateNow()">
    <header class="header">
        <div class="logo">
            <h2>
                WebNews
            </h2>
        </div>
    </header>
    <section class="dateNow">
        <div id="timeNow"></div>
    </section>
    <section class="conteiner-options">
        <div class="links">
            <div class="link">
                <a href="../pages/add.php">Add a Post</a>
            </div>
            <div class="link">
                <a href="pages/api.php">API</a>
            </div>
        </div>
    </section>
    <section class="conteiner-home-page">
        <div class="posts">

        </div>
    </section>
</body>
</html>