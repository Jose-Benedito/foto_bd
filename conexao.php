<?php
 $servidor = 'localhost';
 $banco = 'catalogo';
 $usuario = 'root';
 $senha = 'jsbach123'; // Colocar a senha se for preciso

 try
 {
   $conecta = new PDO("mysql:host=$servidor;dbname=$banco", $usuario , $senha);
   $conecta->exec("set names utf8"); //permite caracteres latinos.
  
 
}catch(PDOException $erro)
 {
    echo("Errrooooo! Não é possível conectar!: " . $erro->getMessage());
 } ?>
