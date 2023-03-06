<html>
    <head>
        <title>Jokenpô</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Jogue jokenpô contra o computador</h1>
        <?php
            $user = strtolower($_GET['userin']);
            $opcoes = array("pedra", "papel", "tesoura");
            $comp = array_rand($opcoes, 1);

            switch($user){

                case 'pedra':
                    echo "<img src='style/pedra.png'/>";
                    switch($comp){
                        case 'pedra':
                            echo "<img src='style/pedra.png'/>";
                            echo "Empate";
                            break;

                        case 'papel':
                            echo "<img src='style/papel.png'/>";
                            echo 'Computador ganhou';
                            break;

                        case 'tesoura':
                            echo "<image src='style/tesoura.png/>";
                            echo "Você ganhou";
                            break;
                    }


                case 'papel':
                    echo "<img src='style/papel.png'/>";
                    switch($comp){
                        case 'pedra':
                            echo "<img src='style/pedra.png'/>";
                            echo "Voce ganhou";
                            break;

                        case 'papel':
                            echo "<img src='style/papel.png'/>";
                            echo 'Empate';
                            break;

                        case 'tesoura':
                            echo "<image src='style/tesoura.png/>";
                            echo "Computador ganhou";
                            break;
                    }


                case 'tesoura':
                    echo "<img src='style/tesoura.png'/>";
                    switch($comp){
                        case 'pedra':
                            echo "<img src='style/pedra.png'/>";
                            echo "Computador ganhou";
                            break;

                        case 'papel':
                            echo "<img src='style/papel.png'/>";
                            echo 'Você ganhou';
                            break;

                        case 'tesoura':
                            echo "<image src='style/tesoura.png/>";
                            echo "Empate";
                            break;
                    }
                default:
                    echo "O computador não entendeu sua jogada"
                    break;
            }
        ?>
        <button type='button' onclick='usuario.php'>Tentar novamente</button>
    </body>
</html>