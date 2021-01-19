<?php
    require_once'classe-pessoa.php';
    $p = new Pessoa("crudpdo","localhost", "root", "bd137");
?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style/estilo.css">
</head>
<body>
    <section id="left">
        <form>
            <h2> CADASTRAR PESSOA </h2>
            <label for="nome">Nome</label>
            <input type="text" name="nome" id="nome">

            <label for="telefone">Telefone</label>
            <input type="text" name="telefone" id="telefone">

            <label for="email">Email</label>
            <input type="text" name="email" id="email">

            <input type="submit" value="cadastrar">
        </form>
    </section>
    <section id="right">
        <table>
            <tr id="titulo">
                <td>NOME</td>
                <td>TELEFONE</td>
                <td colspan="2">EMAIL</td>
            </tr>
        <?php
            $dados = $p->buscarDados();
            if(count($dados) > 0){
                for ($i=0; $i < count($dados); $i++) { 
                    echo "<tr>";
                    foreach ($dados[$i] as $key => $value) {
                        if($key != "id"){
                            echo "<td>".$value."</td>";
                        }
                    }
        ?>          
                    <a href="">Editar</a>
                    <a href="">Excluir</a>
        <?php
                    echo "</tr>";
                }
            }
        ?>
                
            </tr>
        </table>
    </section>
</body>
</html>