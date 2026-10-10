<!DOCTYPE html>
<html>
    <head>
        <title>Ex 07</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <section>
            <h3>Table de multiplication de 7</h3>
            <?php
                $nombre = 7;
                for ($i = 1; $i <= 10; $i++) {
                    echo $nombre.' * '.$i.' = '.($nombre * $i).'<br>';
                }
            ?>
        </section>

        <section>
            <h3>Pyramide d'étoiles</h3>
            <?php
                for ($i = 1; $i <= 6; $i++) {
                    for ($j = 1; $j <= $i-1; $j++) {
                        echo "* ";
                    }
                    echo "*<br>";
                }
            ?>
        </section>
    </body>
</html>