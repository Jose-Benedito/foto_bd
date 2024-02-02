<?php
 include_once("conexao.php");
 try
 {

   $consultaSQL = "SELECT id, nome, titulo, tipo FROM fotos";
   $exComando = $conecta->prepare($consultaSQL); //testar o comando
   $exComando->execute(array());
 
   echo("
        <table class='table table-striped table-bordered table-hover'>
        <thead class='thead-dark'>
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Titulo</th>
        <th>Tipo</th>
        <th>Abrir</th>
        <th>Thumbnail</th>
        </tr>
        </thead>
        ");

 foreach($exComando as $resultado)
 {
   echo ("
         <tr>
         <td>$resultado[id]</td>
         <td>$resultado[nome]</td>
         <td>$resultado[titulo]</td>
         <td>$resultado[tipo]</td>
         <td><a href='view.php?id=$resultado[id]'>abrir</a></td>
         <td><img src='view.php?id=$resultado[id]' width='120px' alt='$resultado[nome]'/></td>
         </tr>
       ");
 } 
 echo("</table>");
 
}catch(PDOException $erro)
 {
    echo("Errrooooo! foi esse: " . $erro->getMessage());
 } ?>