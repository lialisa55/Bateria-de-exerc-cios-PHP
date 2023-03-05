<html>
    <head>
        <title>Verificando triângulo</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Verificar se os lados informados formam um triângulo e, se sim, que tipo de triângulo</h1>
        <?php
            $ladoA = $_GET['ladoUserA'];
            $ladoB = $_GET['ladoUserB'];
            $ladoC = $_GET['ladoUserC'];

            if($ladoA + $ladoB > $ladoC > $ladoA - $ladoC || $ladoB + $ladoC > $ladoA > $ladoB - $ladoC || $ladoA + $ladoC > $ladoB > $ladoA - $ladoC){
                echo "É um triângulo "
                if ($ladoA != $ladoB != $ladoC){
                    echo "escaleno"
                }
                if ($ladoA == $ladoB == $ladoC){
                    echo "equilátero"
                }
                else{
                    echo "isóceles"
                }
            }
            else {
                echo "Não é um triângulo"
            }
        ?>
    </body>
</html>