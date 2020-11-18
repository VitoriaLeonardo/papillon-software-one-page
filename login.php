<?php
    include 'conexao.php';

    session_start(); //Iniciando uma sessão

    $login = $_POST['login'];
    var_dump($_POST);
    $senha = $_POST['senha'];

    $consulta=$cn->query("select idFuncionario, login, senha from funcionario where login = '$login' and senha = '$senha'");
    var_dump($consulta);
    if($consulta==true && $consulta->rowCount() >= 1){
        $exibeFuncionario = $consulta->fetch(PDO::FETCH_ASSOC);
        $_SESSION['id'] = $exibeFuncionario['idFuncionario'];
        header('location:index.php');
    }
    else{
        header('location:erro.php');
    }
    ?>