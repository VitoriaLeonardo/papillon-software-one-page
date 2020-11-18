<?php

	$servidor ="localhost";
	$usuario ="papillon";
	$senha="123";
	$banco="db_php";
    
	$cn = new PDO("mysql:host=$servidor;dbname=$banco", $usuario, $senha);
    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $consulta = $cn->query('select * from contato');
    $mensagens = array();
            while($exibe = $consulta->fetch(PDO::FETCH_ASSOC)){
                array_push($mensagens, $exibe);
            }
        
    

?>