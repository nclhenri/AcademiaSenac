<?php 
require_once('conexao.php');

class AlunosClass{
    public $nomeAluno;
    public $dataNascAluno;
    public $emailAluno;
    public $senhaAluno;
    public $dataCadAluno;
    public $statusAluno;
    public $fotoAluno;

    public function Inserir(){
        $sql = "INSERT INTO tblalunos(nomeAluno, dataNascAluno, emailAluno, senhaAluno, dataCadAluno, statusAluno, fotoAluno) VALUES ('".$this->nomeAluno."','".$this->dataNascAluno."','".$this->emailAluno."','".$this->senhaAluno."','".$this->dataCadAluno."','".$this->statusAluno."','".$this->fotoAluno."')";
    }
    public function ListarAlunos(){
        $sql = "SELECT * FROM tblalunos WHERE statusAluno = 'ATIVO' ORDER BY idAluno ASC";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $lista = $resultado->fetchAll();
        return $lista;
    }
}
?>