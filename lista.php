<hr/>
<?php
    include 'conexao.php';
?>
<table class="table" id="suporte">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Email</th>
      <th scope="col">Assunto</th>
      <th scope="col">Mensagem</th>
      <th scope="col">Telefone</th>
    </tr>
  </thead>
  <tbody>
      <?php 
        foreach($mensagens as $mensagem){
            echo "<tr>";
            echo "<th scope='row'>".$mensagem['idContato']."</th>";
            echo "<td>".$mensagem['emailContato']."</td>";
            echo "<td>".$mensagem['assuntoContato']."</td>";
            echo "<td>".$mensagem['mensagemContato']."</td>";
            echo "<td>".$mensagem['telefoneContato']."</td>";
            echo"</tr>";
        }
      ?>
    
  </tbody>
</table>