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
        .painel {
            display: flex;
            justify-content: space-around;
        }

        .dezena {
            background-color: #209869;
            color: #fff;
            border-radius: 50%;
            height: 25px;
            width: 25px;
            text-align: center;
        }
    </style>
</head>
<body>
    
    <h1>Resultados Mega Sena</h1>    

    <?php
        
        //explode slip substring 
        $resultados[] = "2383 - 23/06/2021 - 13 15 16 20 40 41";
        $resultados[] = "2382 - 19/06/2021 - 06 09 19 38 53 55";
        $resultados[] = "2381 - 16/06/2021 - 07 23 32 41 42 47";
        $resultados[] = "2380 - 12/06/2021 - 11 16 20 24 39 53";
        $resultados[] = "2379 - 09/06/2021 - 02 08 26 32 46 56";
        $resultados[] = "2378 - 05/06/2021 - 11 37 38 41 49 54";
        $resultados[] = "2377 - 02/06/2021 - 05 18 29 35 43 44";
        $resultados[] = "2376 - 29/05/2021 - 12 14 17 18 19 22";
        $resultados[] = "2375 - 26/05/2021 - 02 06 44 46 53 58";
        $resultados[] = "2374 - 22/05/2021 - 12 13 25 37 39 41";
        $resultados[] = "2373 - 19/05/2021 - 23 24 26 44 49 60";
        $resultados[] = "2372 - 15/05/2021 - 03 19 25 44 46 57";
        $resultados[] = "2371 - 12/05/2021 - 04 15 30 36 39 48";
        $resultados[] = "2370 - 08/05/2021 - 07 31 37 42 44 56";
        $resultados[] = "2369 - 06/05/2021 - 04 09 17 19 37 60";
        $resultados[] = "2368 - 04/05/2021 - 04 07 13 25 36 58";
        $resultados[] = "2367 - 30/04/2021 - 05 23 29 34 53 60";

        echo "
        <table class='table' >
        <thead>
            <tr>
                <th>Concurso</th>
                <th>Data</th>
                <th>Resultados</th>                
            </tr>
        </thead>
        <tbody>
        ". "\n";

        foreach ($resultados as $value) {

            $dados = explode(" - ", $value);
                        
            echo "<tr>". "\n";
            echo "   <td>". $dados[0] . "</td>". "\n";
            echo "   <td>". $dados[1] . "</td>". "\n";
            echo "   <td>". painelDezenas($dados[2]) . "</td>". "\n";
            echo "</tr>". "\n";
        }

        echo "</tbody>
        </table>". "\n";

        function painelDezenas($lista){
            $painel = "<div class='painel' >";

            $dezenas = explode(" ", $lista);
            
            foreach ($dezenas as $numero) {
                $painel .= numeroDezena($numero);
            }
            
            $painel .= "</div>";
            return $painel;
        }

        function numeroDezena($numero){
            $dezena = "<div class='dezena' >";
            $dezena .= $numero;
            $dezena .= "</div>"."\n";
            return $dezena;
        }

    ?>

</body>
</html>