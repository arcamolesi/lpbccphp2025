<?php
include_once 'C:\xampp\htdocs\lpbccphp2025\DAL\conexao.php';
include_once 'C:\xampp\htdocs\lpbccphp2025\DAL\usuario.php';

$usuario = trim($_POST['username']);
$senha = trim($_POST['password']);

echo "Usuario: " . $usuario . "</br></br>";
echo "Senha: " . $senha . "  -  " .  $senha . " <br/><br/>";
echo "Senha: " . $senha . "  -  " .  md5($senha) . " <br/><br/>";
echo "Senha: " . $senha . "  -  " .  sha1($senha) . " <br/><br/>";


$dalUsuario = new Dal\Usuario();

$linha = $dalUsuario->SelectUsuario($usuario);

/* if ($linha != null) {
    echo "Usuario: " . $linha->getUsuario() . "</br></br>";
    echo "Senha: " . $linha->getSenha() . " <br/><br/>";
}
 */

if (md5($senha) == $linha->getSenha())
{
    session_start();
    $_SESSION['login'] = $usuario;
    //$_SESSION['nivel'] = $linha['nivel']; 
    header("location:menu.php");

}
else {
     // echo "usuario invalido"; 
      header("location:index.php");

}