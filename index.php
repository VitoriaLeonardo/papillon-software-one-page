<!DOCTYPE HTML>
    <html lang="pt-br">
    <!-- indicando a linguagem que iremos usar no codigo html -->

    <head>
        <title>Minha Loja</title>
        
        <meta charset="utf-8"> <!-- indicando o sistema de caractere utf-8 -->

        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="./main.css">

        <!--Fontes-->
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;1,300&family=Pacifico&family=Roboto+Slab:ital,wght@0,100;0,300;0,400;1,100&display=swap" rel="stylesheet">
        
        <!-- jQuery livraria -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

        <!-- JavaScript compilado-->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <style type="text/css">
            .navbar{
                margin-bottom: 0;
            }
        </style>
    </head>

<body style="background-color: white;">
    <?php
        session_start();
        include 'conexao.php';
        include 'header.php';
        include 'nav.html';
        include 'about.php';
        include 'service.php';
        include 'portifolio.php';   
        if(!empty($_SESSION['id'])){
            include 'lista.php'; 
        }else{
           
           include 'support.php';
        }
        include 'rodape.php';

    ?>
</body>
</html>