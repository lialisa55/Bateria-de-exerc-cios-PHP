<html>
    <head>
        <title>Imprimir números</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Imprimindo número ímpares de 1-50</h1>
        <?php
            for ($i = 1; $i <= 50; $i++){
                if ($i % 2 != 0){
                    echo $i;
                    echo "   ";
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