<?php

include_once('conexao.php');
include_once('funcao.php');

 if ($_POST) {
   $tipo = $_FILES['arquivo']['type'];
   $nome = $_FILES["arquivo"]["name"];
   $titulo = $_POST["titulo"];

  if ( $arquivo != "none" )
  {
    // $fp = fopen($arquivo, "rb");
    // $conteudo = fread($fp, $tamanho);
    // $conteudo = addslashes($conteudo);
    // fclose($fp);
    $conteudo = Imagem_blob($_FILES);

    try {
      $comandoSQL = "INSERT INTO fotos VALUES (0,'$nome','$titulo','$conteudo','$tipo')";
      $grava = $conecta->prepare($comandoSQL); //testa o comando SQL
      $grava->execute(array()); 
      echo '<br/><div class="alert alert-success" role="alert">
            Arquivo enviado com sucesso para o servidor!
            </div>';
            header('location:listagem.php');
 } catch(PDOException $e) { // caso retorne erro
     echo '<br/><div class="alert alert-error" role="alert">
           Erro ' . $e->getMessage() .
          '</div>';}
 }}
 ?>