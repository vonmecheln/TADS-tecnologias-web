<pre>
<?php

// recuperar os dados
$nome = $_GET['nome_aluno'];
$matricula = $_GET['matricula_aluno'];

//montar a SQL
$sql = "INSERT INTO `aluno` (`id`, `nome`, `matricula`) VALUES (NULL, '$nome', '$matricula');";

//conectar no banco
try {
    // objeto PDO de conexao
    $conexao = new PDO(
        "mysql:host=localhost;dbname=TADS",
        "app_site_tads",
        "abc123*");

    //executar a sql
    $conexao->exec($sql);


} catch (\Throwable $th) {
    var_dump($th);
}

var_dump($sql);
header("Location: /tads/");


// sistema em PHP com duas funcionalidades:
// Listar os dados de uma tabela 
// e Inserir novos registro na tabela
