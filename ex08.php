<!DOCTYPE html>
<html>
    <head>
        <title>Ex 08</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <section>
            <h3>Les nombres pairs de 0 à 20</h3>
            <?php
                $i = 0;
                while ($i <= 20) {
                    if ($i % 2 == 0) {
                        if ($i == 10) {
                            echo "<b>$i</b><br>";
                        }
                        else {
                            echo "$i<br>";
                        }
                    }
                    $i++;
                }
            ?>
        </section>

        <section>
            <h3>Différence entre while et do-while</h3>
            <?php
                $compteur = 5;
                $nbr_exec = 0;
                while ($compteur < 5) {
                    $compteur++;
                    $nbr_exec++;
                }
                echo "Le nombre d'exécution de la boucle while : $nbr_exec<br>";

                $compteur = 5;
                $nbr_exec = 0;
                do {
                    $compteur++;
                    $nbr_exec++;
                } while ($compteur < 5);
                echo "Le nombre d'exécution de la boucle do-while : $nbr_exec";
            ?>
        </section>

        <section>
            <h3>Les instructions continue et break</h3>
            <?php
                for ($j = 1; $j <= 20; $j++) {
                    if ($j % 3 == 0) {
                        continue;
                    }
                    if ($j == 16) {
                        break;
                    }
                    echo "$j<br>";
                }
            ?>
        </section>
    </body>
</html>