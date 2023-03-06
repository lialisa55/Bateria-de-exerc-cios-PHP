<html>
    <head>
        <title>Verificando nota</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Verificar nota</h1>
            <?php
                $nota = $_GET['notain'];
                if ($nota >= 0 and $nota <= 10){
                    echo " Nota aceita";
                }
                else{
                    echo "Digite uma nota válida";
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