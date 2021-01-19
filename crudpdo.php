<?php
//******** CONEXÃO COM BANCO DE DADOS ********/

//Tratar possiveis erros
try {
    $pdo = new PDO("mysql:dbname=crudpdo;host=localhost", "root", "bd137");
}
//Erros apenas relacionado a banco de dados.
 catch (PDOException $e) {
    echo "Erro com banco de dados: ".$e->getMessage();
}catch(Exception $e){
    echo "Erro generico: ".$e->getMessage();
}

//**************** INSERT ****************/
//1 forma:
// $cmd = $pdo->prepare("INSERT INTO pessoa(nome, telefone, email) 
//                VALUES (:n, :t, :e)");

// $cmd->bindValue(":n","Bruno");
// $cmd->bindValue(":t","11940211952");
// $cmd->bindValue(":e","brunobgm002@gmail.com");
// $cmd->execute();

//2 forma:
// $pdo->query("INSERT INTO pessoa(nome, telefone, email)
//             VALUES ('Gabriel', '11940280012', 'gabriel@gmail.com') ");


//**************** DELETE ****************/
 
// $cmd = $pdo->prepare("DELETE FROM pessoa WHERE id = :id");
// $id = 2;
// $cmd->bindValue(":id", $id);
// $cmd->execute();

//ou

// $res = $pdo->query("DELETE FROM pessoa WHERE id = '3'");

//**************** UPDATE ****************/

// $cmd = $pdo->prepare("UPDATE pessoa SET email = :e WHERE id = :id");
// $cmd->bindValue(":e","bruno@gmail.com");
// $cmd->bindValue(":id","1");
// $cmd->execute();

//ou

// $res = $pdo->query("UPDATE pessoa SET email = 'brunobgm002@gmail.com' WHERE id = '1'");

//**************** UPDATE ****************/

// $cmd = $pdo->prepare("SELECT * FROM pessoa WHERE id = :id");
// $cmd->bindValue(":id", 1);
// $cmd->execute();
// //fetch(); transforma em array
// $resultadoArray = $cmd->fetch(PDO::FETCH_ASSOC);

// foreach ($resultadoArray as $key => $value) {
//     echo $key.":".$value."<br>";
// };

//Apenas usado em desenvolvimento de testes
// echo "<pre>";
// print_r($resultadoArray);
// echo "</pre>";


//ou
//$cmd->fetchAll();

?>