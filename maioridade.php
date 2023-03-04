<html>
    <head>
        <title>Recebendo parâmetros</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Verificar maioridade</h1>
            <?php
                $idade = $_GET['idadein'];
                if ($idade > 18){
                    echo "<h3>Maior de idade</h3>";
                }
                else{
                    echo "<h3>Menor de idade</h3>";
                }

            ?>
    </body>