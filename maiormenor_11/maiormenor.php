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
                    echo "O número " . $numA .  " é maior que " . $numB;
                }
                elseif ($numB > $numA){
                    echo "O número " . $numB .  " é maior que " . $numA;
                }
                else{
                    echo "O número " . $numA .  " é igual a " . $numB;
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