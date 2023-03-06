<html>
    <head>
        <title>Jokenpô</title>
        <meta charset="utf-8">
    </head>
    <body>
        <h1>Jogue jokenpô contra o computador</h1>
        <?php
            $user = strtolower($_GET['userin']);
            $comp = rand(0,2);
            switch($user){
                case 0:
                    echo "<img src='../style/pedra.png'/>";
                    switch($comp){
                        case 0:
                            echo "<img src='../style/pedra.png'/> </br></br>";
                            echo "Empate";
                            break;

                        case 1:
                            echo "<img src='../style/papel.png'/> </br></br>";
                            echo 'Computador ganhou';
                            break;

                        case 2:
                            echo "<image src='../style/tesoura.png'/> </br></br>";
                            echo "Você ganhou";
                            break;
                    }
                    break;

                case 1:
                    echo "<img src='../style/papel.png'/>";
                    switch($comp){
                        case 0:
                            echo "<img src='../style/pedra.png'/> </br></br>";
                            echo "Voce ganhou";
                            break;

                        case 1:
                            echo "<img src='../style/papel.png'/> </br></br>";
                            echo 'Empate';
                            break;

                        case 2:
                            echo "<image src='../style/tesoura.png'/> </br></br>";
                            echo "Computador ganhou";
                            break;
                    }
                    break;

                case 2:
                    echo "<img src='../style/tesoura.png'/>";
                    switch($comp){
                        case 0:
                            echo "<img src='../style/pedra.png'/> </br></br>";
                            echo "Computador ganhou";
                            break;

                        case 1:
                            echo "<img src='../style/papel.png'/> </br></br>";
                            echo 'Você ganhou';
                            break;

                        case 2:
                            echo "<image src='../style/tesoura.png'/> </br></br>";
                            echo "Empate";
                            break;
                    }
                    break;

                default:
                    echo "O computador não entendeu sua jogada";
                    break;
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