<!DOCTYPE html>
<html>
    <head>
        <title>Ex 05</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            // 1
            $moyenne = 21;
            // 2 et 3
            if ($moyenne>=0 && $moyenne<=20)
                if ($moyenne < 10)
                    echo "Non validé";
                elseif ($moyenne>=10 && $moyenne<12)
                    echo "Passable";
                elseif ($moyenne>=12 && $moyenne<14)
                    echo "Assez bien";
                elseif ($moyenne>=14 && $moyenne<16)
                    echo "Bien";
                else
                    echo "Très bien";
            else
                echo "Note invalide";
        ?>
    </body>
</html>