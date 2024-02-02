<?php

function Imagem_blob (array $files): string
{
   $arquivo = $files["arquivo"]["tmp_name"];
   $tamanho = $files["arquivo"]["size"];
   $tipo = $files["arquivo"]["type"];
   $nome = $files["arquivo"]["name"];
  // $titulo = $_POST["titulo"];

	$fp = fopen($arquivo, "rb");
    $conteudo = fread($fp, $tamanho);
    $conteudo = addslashes($conteudo);
    fclose($fp);

    return $conteudo;
}