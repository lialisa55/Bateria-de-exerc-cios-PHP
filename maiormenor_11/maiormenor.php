<html>
    <head>
        <title>Verificando qual é maior</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Verificar qual número é maior</h1>
            <?php
                $numA = $_GET['numUserA'];
                $numB = $_GET['numUserB'];
                if ($numA > $numB){
                    echo "O número A é maior que B";
                }
                elseif ($numB > $numA){
                    echo $nome . "O número B é maior que A";
                }
                else{
                    echo "Eles são iguais"
                }

            ?>
    </body>
</html>