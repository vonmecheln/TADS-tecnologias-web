<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alunos</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <!-- 
    Como passar dados para um servidor?
    Com uma Request.
    GET ou POST

    tag form + inputs + submmit
    ajax*    
        
        
    Envio de dados para o servidor
    1º Tag HTML <form>
      - action -> Destino dos dados (criar uma pagina)
      - method -> GET e POST
        GET   separa url e parametro               pelo char ?    url?parametro
              separa os parametro                  pelo char &    param1&param2
              separa o nome e o valor do parametro pelo char =    nome=valor
        POST  pelos parametros do protocolo
    2º Submmit -> tag
    3º inputs -> campos com valores -> deve ter name

    -->

    <div class="header">

    </div>
    <div class="container">
        <div class="flex-row formulario">
            <div class="d-flex justify-content-center">

                <form action="salvar_aluno.php" method="GET">
                    <div class="form-group">
                        <label for="nome_aluno">Nome</label>
                        <input type="text" class="form-control" id="nome_aluno" 
                        name="nome_aluno" aria-describedby="nomeHelp" placeholder="Seu nome">
                        <small id="nomeHelp" class="form-text text-muted">Use seu nome completo.</small>
                    </div>
                    <div class="form-group">
                        <label for="matricula_aluno">Matrícula</label>
                        <input type="text" class="form-control" name="matricula_aluno" id="matricula_aluno" placeholder="202000000">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Salvar</button>
                </form>
            
            </div>
        </div>

    </div>
    
</body>
</html>