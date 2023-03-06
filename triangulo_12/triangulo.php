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

            if($ladoA + $ladoB > $ladoC and $ladoC > $ladoA - $ladoC
             || 
             $ladoB + $ladoC > $ladoA and $ladoA > $ladoB - $ladoC 
             ||
              $ladoA + $ladoC > $ladoB and $ladoB > $ladoA - $ladoC){
                echo "É um triângulo, pois um dos lados é menor que os dois outros juntos mas maior que a diferença entre esses outros. </br>";
                if ($ladoA != $ladoB and $ladoB != $ladoC and $ladoA != $ladoC){
                    echo "<img src='../style/escaleno.png' alt='Triângulo escaleno'/> </br> Esse triângulo é classificado como escaleno, pois todos os lados são diferentes";
                }
                elseif ($ladoA == $ladoB and $ladoB == $ladoC){
                    echo "<img src='../style/equilatero.png' alt='Triângulo equilátero'/> </br> Esse triângulo é classificado como equilátero, pois todos os lados são iguais";
                }
                else{
                    echo "<img src='../style/isosceles.png' alt='Triângulo isósceles'/> </br> Esse triângulo é classificado como isósceles, pois dois lados são iguais e um é um diferente desses dois";
                }
            }
            else {
                echo "Não é um triângulo";
            }
        ?>
        <?php 
            echo "<br><br>";
            echo "<a href='usuario.php'>voltar</a>";
            echo "<br>";
            echo "<a href='../index.php'>index</a>";
        ?>
    </body>
</html>