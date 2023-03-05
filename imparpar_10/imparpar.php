<html>
    <head>
        <title>Sorteiar número números</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>O computador irá conferir se o valor digitado é ímpar ou par</h1>
        <?php
            $numuser = $_GET['numin'];

            if($numuser % 2 == 0){
                echo "O número " . $numuser . " é par."
            }
            else{
                echo "O número " . $numuser . " é impar"
            }
        ?>  
    </body>
</html>