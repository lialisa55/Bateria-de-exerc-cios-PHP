<html>
    <head>
        <title>Sorteiar número números</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Adivinhe o número que o computador irá sortear</h1>
        <?php
            $numuser = $_GET['numin'];
            $numrand = rand(1,50);

            echo "O número de input foi " . $numuser . " e o sorteado foi " . $numrand . "<br/>";
            if ($numuser == $numrand){
                echo "Você acertou :)";
            }
            else{
                echo "Você errou :(";
            }
        ?>  
    </body>
</html>