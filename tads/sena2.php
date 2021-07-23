<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .painel{
            display: flex;
            justify-content: space-around;
        }

        .numero{
            height: 25px;
            width: 25px;            
            background-color: #209869;
            border-radius: 50%;
            display: inline-block;
            text-align: center;
            vertical-align: middle;
            color: #fff;
        }
    </style>
</head>

<body>
    <h1>Resultados da Mega Sena</h1>

    
    <?php 

        $resultados[] = "2383 - 23/06/2021 - 13 15 16 20 40 41";
        $resultados[] = "2382 - 19/06/2021 - 06 09 19 38 53 55";
        $resultados[] = "2381 - 16/06/2021 - 07 23 32 41 42 47";
        $resultados[] = "2380 - 12/06/2021 - 11 16 20 24 39 53";
        $resultados[] = "2379 - 09/06/2021 - 02 08 26 32 46 56";
        $resultados[] = "2378 - 05/06/2021 - 11 37 38 41 49 54";
        $resultados[] = "2377 - 02/06/2021 - 05 18 29 35 43 44";
        $resultados[] = "2376 - 29/05/2021 - 12 14 17 18 19 22";
        $resultados[] = "2375 - 26/05/2021 - 02 06 44 46 53 58";

        

        echo "
        <table class='table'>
        <thead>
            <tr>
                <th>Concurso</th>
                <th>Data</th>
                <th>Resultados</th>                
            </tr>
        </thead>
        <tbody>
        ". "\n";
        foreach ($resultados as $resultado) {

            $dados = explode(" - ",$resultado);

            echo "<tr>" . "\n";            
            echo "    <td>". $dados[0] ."</td>". "\n";
            echo "    <td>". $dados[1] ."</td>". "\n";
            echo "    <td>". painelDezena($dados[2]) ."</td>". "\n";
            echo "</tr>". "\n";
        }
        echo "
        </tbody>   
        </table>". "\n";
        
        
        function painelDezena($lista){
            $dezenas = explode(" ", $lista);
            $painel = "<div class='painel'>";
            foreach ($dezenas as $numero) {
                $painel .= numeroDezena($numero);
            }
            $painel .= "</div>";
            
            return $painel;
        }

        function numeroDezena($numero){
            return "<div class='numero'>$numero</div>";
        }

    ?>
</body>

</html>