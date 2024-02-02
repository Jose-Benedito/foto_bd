<?php
 include_once("conexao.php");
 try
 {
  
   $consultaSQL = "SELECT tipo, conteudo FROM fotos WHERE id=$_GET[id]";
   $exComando = $conecta->prepare($consultaSQL); //testar o comando
   $exComando->execute(array());
   foreach($exComando as $resultado)
   {
     $tipo = $resultado['tipo'];
     $conteudo = $resultado['conteudo'];
     header("Content-Type: $tipo");
     echo $conteudo;
   } 
  }catch(PDOException $erro)
   {
     echo("Errrooooo! foi esse: " . $erro->getMessage());
   } ?>