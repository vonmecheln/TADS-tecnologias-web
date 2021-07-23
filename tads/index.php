<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>

<body>
    <h1>INDEX</h1>

    <a href="formulario_aluno.php" class="btn btn-primary">Novo Aluno</a>
    <pre>        

    <?php 

        $alunos = [];

        try {
            // objeto PDO de conexao
            $conexao = new PDO(
                "mysql:host=localhost;dbname=TADS",
                "app_site_tads",
                "abc123*");
            
            //SQL para selecionar os dados
            $sql = "SELECT * FROM aluno ORDER BY nome DESC";

            //Objeto PDOStatement: A sql "preparada" para executar
            $stmt = $conexao->prepare($sql);
            if($stmt){ //verifica se a "preparação" deu certo
                
                $exec = $stmt->execute(); //Executa a SQL
                if($exec){ //verificar se a execução deu certo

                    //determina o mode de listagem
                    if($stmt->setFetchMode(PDO::FETCH_ASSOC)){
                        $dados = $stmt->fetchAll(); //recupera todos os resultados em Array

                        foreach ($dados as $aluno) {
                            $alunos[] = $aluno['nome'];
                        }                    
                    }
                }
            }
        } catch (\Throwable $th) {
            var_dump($th);
        }
        
        echo "
        <table>
            <tr>
                <td>Nº</td>
                <td>Nome</td>
            </tr>". "\n";
        foreach ($alunos as $id => $aluno) {
            echo "<tr>" . "\n";            
            echo "    <td>". $id ."</td>". "\n";
            echo "    <td>". $aluno ."</td>". "\n";
            echo "</tr>". "\n";
        }
        echo "   
        </table>". "\n";


        echo "<ol type='1' >";
        foreach ($alunos as $aluno) {
            
            echo "<li>" .$aluno . "</li>";
            echo "\n";
        }
        echo "</ol>";

    ?>
</body>

</html>