<?php
namespace DAL;

include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/DAL/conexao.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/MODEl/aluno.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/MODEl/livro.php";
include_once $_SERVER['DOCUMENT_ROOT']. "/lpbccphp2025/MODEl/emprestimo.php";

use DAL\Conexao;

class Emprestimo
{
    
    public function Select()
    {
       $sql = "SELECT  emprestimo.*,  aluno.nome AS nome_aluno,  livro.titulo AS titulo_livro 
       FROM  emprestimo 
       INNER JOIN aluno ON emprestimo.aluno = aluno.id 
       INNER JOIN livro ON emprestimo.livro = livro.id
       ORDER BY emprestimo.dataemp DESC; 
       ";
        $con = Conexao::conectar();
        $registros = $con->query($sql); // Criando o recordset
        $con = Conexao::desconectar();

        $lstEmprestimos = []; 
        if ($registros) {
            foreach ($registros as $linha) {
                $emprestimo = new \MODEL\Emprestimo();
                $emprestimo->setId((int)$linha['id']);
                $emprestimo->setAluno((int)$linha['aluno']); 
                $emprestimo->setNomeAluno((string)$linha['nome_aluno']); 
                $emprestimo->setLivro((int)$linha['livro']); 
                $emprestimo->setTituloLivro((string)$linha['titulo_livro']); 
                if (!empty($linha['dataemp'])) {
                    $emprestimo->setEmprestimo(new \DateTime($linha['dataemp']));
                }
                if (!empty($linha['datadev'])) {
                    $emprestimo->setDevolucao(new \DateTime($linha['datadev']));
                }
                $lstEmprestimos[] = $emprestimo;
            }
        }
        return $lstEmprestimos;
    }

  
    public function SelectById(int $id)
    {
        $sql = "SELECT * FROM emprestimo WHERE id = ?;";
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $query->execute([$id]);
        $linha = $query->fetch(\PDO::FETCH_ASSOC);
        $con = Conexao::desconectar();

        if ($linha) {
            $emprestimo = new \MODEL\Emprestimo();
            $emprestimo->setId((int)$linha['id']);
            $emprestimo->setAluno((int)$linha['aluno']);
            $emprestimo->setLivro((int)$linha['livro']);
            if (!empty($linha['dataemp'])) {
                $emprestimo->setEmprestimo(new \DateTime($linha['dataemp']));
            }
            if (!empty($linha['datadev'])) {
                $emprestimo->setDevolucao(new \DateTime($linha['datadev']));
            }
            return $emprestimo;
        }
        return null; 
    }

    
    public function Insert(\MODEL\Emprestimo $emprestimo)
    {
        
        $sql = "INSERT INTO emprestimo (aluno, livro, dataemp, datadev)
                VALUES (?, ?, ?, ?);";

        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        
       
        $dataEmpFormatada = $emprestimo->getEmprestimo() ? $emprestimo->getEmprestimo()->format('Y-m-d') : null;
        $dataDevFormatada = $emprestimo->getDevolucao() ? $emprestimo->getDevolucao()->format('Y-m-d') : null;
       

        $result = $query->execute([
            $emprestimo->getAluno(),
            $emprestimo->getLivro(),  
            $dataEmpFormatada,
            $dataDevFormatada
        ]);
        $con = Conexao::desconectar();
        return $result;
    }

 
    public function Update(\MODEL\Emprestimo $emprestimo)
    {
        $sql = "UPDATE emprestimo SET aluno = ?, livro = ?, dataemp = ?, datadev = ? WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);

        $dataEmpFormatada = $emprestimo->getEmprestimo() ? $emprestimo->getEmprestimo
        ()->format('Y-m-d') : null;
        $dataDevFormatada = $emprestimo->getDevolucao() ? $emprestimo->getDevolucao()->format('Y-m-d') : null;

        $result = $query->execute([
            $emprestimo->getAluno(),
            $emprestimo->getLivro(),
            $dataEmpFormatada,
            $dataDevFormatada,
            $emprestimo->getId()
        ]);
        $con = Conexao::desconectar();
        return $result; 
    }

    /**
     * Deleta um registro da tabela emprestimo pelo ID.
     * @param int $id O ID do empréstimo a ser deletado.
     * @return bool Retorna true em caso de sucesso, false em caso de falha.
     */
    public function Delete(int $id)
    {
        $sql = "DELETE FROM emprestimo WHERE id = ?;";
        
        $con = Conexao::conectar();
        $query = $con->prepare($sql);
        $result = $query->execute([$id]);
        $con = Conexao::desconectar();
        return $result; 
    }
}

?>