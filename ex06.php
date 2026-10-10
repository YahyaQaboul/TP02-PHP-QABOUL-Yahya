<!DOCTYPE html>
<html>
    <head>
        <title>Ex 06</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            // 1
            $numeroMois = 3;
            switch ($numeroMois){
                // 2
                case 1:
                    echo "Janvier";
                    break;
                case 2:
                    echo "Février";
                    break;
                case 3:
                    echo "Mars";
                    break;
                case 4:
                    echo "Avril";
                    break;
                case 5:
                    echo "Mai";
                    break;
                case 6:
                    echo "Juin";
                    break;
                case 7:
                    echo "Juillet";
                    break;
                case 8:
                    echo "Août";
                    break;
                case 9:
                    echo "Septembre";
                    break;
                case 10:
                    echo "Octobre";
                    break;
                case 11:
                    echo "Novembre";
                    break;
                case 12:
                    echo "Décembre";
                    break;
                // 3
                default:
                    echo "Numéro de mois invalide";
                    break;
            }
        ?>
    </body>
</html>