<?php 

class Conexao{

    public static function LigarConexao(){

        $connect = new PDO('mysql:dbname=dbivabem;host=localhost', 'root', '');
        $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $connect;
    }

}

?>