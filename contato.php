<?php
    include 'conexao.php';
try{
    $email = $_POST['inEmail'];
    $assunto = $_POST['inAssunto'];
    $mensagem = $_POST['inMensagem'];
    $telefone = $_POST['inTelefone'];

    $sql = $cn->prepare('insert into contato values(default, :email, :assunto, :mensagem, :telefone)');
    $sql->execute(array(
        ':email' => $email,
        ':assunto' => $assunto,
        ':mensagem' => $mensagem,
        ':telefone' => $telefone
      ));

    if($sql->rowCount() >= 1){
        header('location:index.php');
    }

}
catch(PDOException $e){
    var_dump($e);
    /*header('location:erro.php');*/
}
?>