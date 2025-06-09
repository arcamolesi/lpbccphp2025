<?php

namespace DAL;


include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT'] . "/lpbccphp2025/MODEl/livro.php";

use DAL\Conexao;

class Livro
{

    public function Select(): array
    {
        $sql = "select * from livro;";
        $con = Conexao::conectar();
        $registros = $con->query($sql);
        $con = Conexao::desconectar();

        $lstLivros = [];
        foreach ($registros as $linha) {
            $livro = new \MODEL\Livro();
            $livro->setId($linha['id']);
            $livro->setTitulo($linha['titulo']);
            $livro->setGenero($linha['genero']);
            $livro->setValor($linha['valor']);
            $livro->setStatus($linha['status']);

            $lstLivros[] = $livro;
        }

        return $lstLivros;
    }


    public function SelectById(int $id): \MODEL\Livro
    {
        $sql = "select * from livro where id=?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute(array($id));
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $livro = new \MODEL\Livro();
        if ($linha) {
            $livro->setId($linha['id']);
            $livro->setTitulo($linha['titulo']);
            $livro->setGenero($linha['genero']);
            $livro->setValor($linha['valor']);
            $livro->setStatus($linha['status']);
        }

        return $livro;
    }


    public function SelectByTitulo(string $titulo): array
    {

        //$sql = "select * from livro where titulo = ?;";
        $sql = "select * from livro where titulo LIKE ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        //$query->execute([ $titulo]);
        $query->execute(['%' . $titulo . '%']);
        $registros = $query->fetchAll(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        $lstLivros = [];
        foreach ($registros as $linha) {
            $livro = new \MODEL\Livro();
            $livro->setId($linha['id']);
            $livro->setTitulo($linha['titulo']);
            $livro->setGenero($linha['genero']);
            $livro->setValor($linha['valor']);
            $livro->setStatus($linha['status']);

            $lstLivros[] = $livro;
        }

        return $lstLivros;
    }


    
    public function SelectByStatus(string $status): array
    {

        $sql = "select * from livro where statuS = ?;";
    
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$status]);
        $registros = $query->fetchAll(\PDO::FETCH_ASSOC);
     
        $con = Conexao::desconectar();

        $lstLivros = [];
        foreach ($registros as $linha) {
            $livro = new \MODEL\Livro();
            $livro->setId($linha['id']);
            $livro->setTitulo($linha['titulo']);
            $livro->setGenero($linha['genero']);
            $livro->setValor($linha['valor']);
            $livro->setStatus($linha['status']);

            $lstLivros[] = $livro;
        }

        return $lstLivros;
    }


    public function Insert(\MODEL\Livro $livro)
    {
        $sql = "INSERT INTO livro (titulo, genero, valor, status) VALUES (?, ?, ?, ?);";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([
            $livro->getTitulo(),
            $livro->getGenero(),
            $livro->getValor(),
            $livro->getStatus()
        ]);
        $con = Conexao::desconectar();

        return $result;
    }


    public function Update(\MODEL\Livro $livro)
    {
        $sql = "UPDATE livro SET titulo=?, genero=?, valor=?, status=? WHERE id=?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([
            $livro->getTitulo(),
            $livro->getGenero(),
            $livro->getValor(),
            $livro->getStatus(),
            $livro->getId()
        ]);
        $con = Conexao::desconectar();

        return $result;
    }


    public function Delete(int $id)
    {
        $sql = "DELETE FROM livro WHERE id=?;";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute(array($id));
        $con = Conexao::desconectar();

        return $result;
    }
}
