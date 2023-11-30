<?php
    include_once("../config/config.php");
    if(isset($_POST['submit'])){
        $titulo = $_POST['title'];
        $post = $_POST['post'];
        $date = $_POST['date'];

        $create = $conexao->query("INSERT INTO posts(titulo,post,date) VALUES ('$titulo','$post','$date')");
        header('Location: ../index.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../source/scripts/dateNow.js"></script>
    <link rel="stylesheet" href="../source/styles/style.css">
    <title>WebNews</title>
    <style>
        section.dateNow{
            margin: auto;
            width: 85%;
            box-shadow: 1px 2px 3px rgba(0,0,0,.3);
            padding: 10px;
            background: #ffffff;
            text-align: center;
            border-radius: 10px;
        }
        section.conteiner-add-post{
            position: absolute;
            top: 50%;
            left: 50%;
            width: 60%;

            transform: translate(-50%,-50%);
            background: #ffffff;
            box-shadow: 1px 2px 3px rgba(0,0,0,.3);
            padding: 20px;
            border-radius: 15px;
        }
        section.conteiner-add-post div.title-post input{
            width: 100%;
            border: none;
            outline: none;
            padding: 10px 20px;
            background: transparent;
            border-bottom: 1px solid black;
            letter-spacing: 2px;
        }
        section.conteiner-add-post div.add-logo{
            text-align: center;
            text-transform: uppercase;
        }
        section.conteiner-add-post div.post-content textarea{
            resize: none;
            border: 1px solid black;
            outline: none;
            background: none;
        }
        section.conteiner-add-post div.main-option{
            display: flex;
            align-items: center;
            justify-content: space-between;
        }
        section.conteiner-add-post div.main-option div.date-post input{
            width: 100%;
            border: none;
            outline: none;
            padding: 10px 20px;
            background: transparent;
            border-bottom: 1px solid black;
            letter-spacing: 2px;

        }
        section.conteiner-add-post div.main-option div.btn input{
            background: #23abff;
            padding: 10px 20px;
            color: white;
            border: none;
            outline: none;
            border-radius: 5px;
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
    <section class="conteiner-add-post">
        <form action="add.php" method="POST">
            <div class="add-logo">
                <h2>add a post</h2>
            </div>
            <br>
            <div class="main-option">
                <div class="date-post">
                    <input type="datetime-local" name="date" id="date">
                </div>
                <div class="btn">
                    <input type="submit" value="Enviar" name="submit">
                </div>
            </div>
            <br>
            <div class="post-content">
                <textarea name="post" id="post" cols="30" rows="10" style="width: 362px; height: 187px;"></textarea>
            </div>
            <div class="title-post">
                <input type="text" name="title" id="title" placeholder="Titulo">
            </div>
        </form>
    </section>
</body>
</html>