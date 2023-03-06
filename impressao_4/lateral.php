<html>
    <head>
        <title>Imprimir números</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Imprimindo número de 1-20 em lateral</h1>
        <?php
            for ($i = 1; $i <= 20; $i++){
                echo $i;
                echo "</br>";
            }
        ?>
        <?php 
            echo "<br><br>";
            echo "<a href='horizontal.php'>horizontal</a>";
            echo "<br>";
            echo "<a href='../index.php'>index</a>";
        ?>
    </body>
</html>