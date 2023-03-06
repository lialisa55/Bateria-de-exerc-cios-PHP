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
                    echo "<img src="
                    switch($comp){

                        case 'pedra':
                            echo ""

                    }

                case 'papel':
                case 'tesoura':
                default:
                    echo "O computador não entendeu sua jogada"
                    break;
            }
        ?>
    </body>
</html>