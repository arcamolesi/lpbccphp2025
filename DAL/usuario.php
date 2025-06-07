<?php

namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/MODEl/usuario.php";

use DAL\Conexao;

class Usuario
{
  
   public function SelectUsuario(string $usuario)
   {
      $sql = "Select * from usuario where usuario=?;";
      $con =  Conexao::conectar();
      $query = $con->prepare($sql);
      $query->execute(array($usuario));
      $linha = $query->fetch(\PDO::FETCH_ASSOC);
      $con = Conexao::desconectar();

      $usuario = new \MODEL\Usuario();
      $usuario->setId($linha['id']);
      $usuario->setUsuario($linha['usuario']);
      $usuario->setSenha($linha['senha']);
     
      return $usuario;
   }


}
