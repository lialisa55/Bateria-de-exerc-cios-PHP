<html>
    <head>
        <title>Imprimir números</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Imprimindo números no intervalo de dois inputs</h1>
        <?php
            $num1 = $_GET['num1in'];
            $num2 = $_GET['num2in'];
            if ($num1 > $num2){
                $num1--;
                while ($num1 > $num2){
                    $num2++;
                    echo $num2;
                }
            }
            if($num2 > $num1){
                $num2--;
                while ($num2 > $num1){
                    $num1++;
                    echo $num1;
                }
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