<html>
    <head>
        <title>Sorteiar número números</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Adivinhe o número que o computador irá sortear</h1>
        <?php
            $numuser = $_GET['numin'];

            echo "O número de input foi " . $numuser . "<br/>";
            if ($numuser > 0){
                echo "Número positivo";
            }
            elseif ($numuser == 0){
                echo "Número neutro";
            }
            else{
                echo "Número negativo";
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