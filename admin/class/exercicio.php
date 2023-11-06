<?php 

require_once('conexao.php');

class ExercicioClass{

    public $nomeExercicio;
    public $descricaoExercicio;
    public $grupoMuscular;
    public $statusExercicio;
    public $fotoExercicio;
    public $linkExercicio;

    public function Inserir(){
        $sql = "INSERT INTO `tblexercicios`(`nomeExercicio`, 
        `descricaoExercicio`, 
        `grupoMuscularExercicio`, 
        `statusExercicio`, 
        `fotoExercicio`, 
        `linkExercicio`) 
        VALUES ('".$this->nomeExercicio."', '".$this->descricaoExercicio."', '".$this->grupoMuscular."', '".$this->statusExercicio."', '".$this->fotoExercicio."', '".$this->linkExercicio."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);
    }

    public function ListarExercicio(){
        $sql = "SELECT * FROM tblexercicios WHERE statusExercicio = 'ATIVO' ORDER BY idExercicio ASC";
        $connect = Conexao::LigarConexao();
        $resultado = $connect->query($sql);  //Preparar e executar uma função sql
        $lista = $resultado->fetchAll();
        return $lista;
    }

    public function Cadastrar(){
        $sql = "INSERT INTO `tblexercicios`(`nomeExercicio`, 
        `descricaoExercicio`, 
        `grupoMuscularExercicio`, 
        `statusExercicio`, 
        `fotoExercicio`, 
        `linkExercicio`) 
        VALUES ('".$this->nomeExercicio."', '".$this->descricaoExercicio."', '".$this->grupoMuscular."', '".$this->statusExercicio."', '".$this->fotoExercicio."', '".$this->linkExercicio."')";

        $connect = Conexao::LigarConexao();
        $connect->exec($sql);

        echo"<script>document.location='index.php?p=exercicios'</script>";
    }
}
