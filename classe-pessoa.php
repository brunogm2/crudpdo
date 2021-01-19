<?php

Class Pessoa{

    private $pdo;
    //6 funções
    //Conexão com o banco de dados
    public function __construct($dbname, $host, $user, $senha){
        try {
            $this->pdo = new PDO("mysql:dbname=".$dbname.";host".$host,$user,$senha);
        } catch (PDOExcecption $e) {
            echo "Erro com banco de dados ".$e->getMessage();
            exit();
        }
        catch (Excecption $e) {
            echo "Erro generico ".$e->getMessage();
            exit();
        }
       
    }

    //FUNÇÃO PARA BUSCAR OS DADOS E INSERIR NA TELA, NO CANTO DIREITO;
    public function buscarDados(){
        //Caso o banco de dados tiver vazio não ira retornar nenhum erro, me retorna apenas array vazio;
        $res = array();

        $cmd = $this->pdo->query("SELECT * FROM pessoa ORDER BY id DESC");
        
        //Recebe em formato de array
        $res = $cmd->fetchAll(PDO::FETCH_ASSOC);
        return $res;
    }




}





?>