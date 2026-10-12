<!DOCTYPE html>
<html>
    <head>
        <title>Ex 09</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            $notes = [
                "Amine" => 12,
                "Sara" => 16,
                "Youssef" => 8,
                "Lina" => 14,
                "Adam" => 10
            ];
        ?>
        <!-- 1 et 2 -->
        <table border=2>
            <tr>
                <td> Etudiants </td>
                <td> Notes </td>
                <td> Résultat </td>
            </tr>
            <?php
                foreach ($notes as $key => $value) {
                    echo "<tr> <td> $key </td> <td> $value </td>";
                    if ($value<10) :
                        echo "<td> Non validé </td> </tr>";
                    else :
                        echo "<td> Validé </td> </tr>";
                    endif;
                }
            ?>
        </table>
        <?php
            // 3
            $Somme=0;
            foreach ($notes as $value) {
                $Somme += $value;
            }
            echo "La somme des notes : $Somme.<br>";
            echo 'La moyenne de la classe : '.$Somme/count($notes).'.<br>';
            // 4
            $nbr_valides = 0;
            foreach ($notes as $note) {
                if ($note>=10)
                    $nbr_valides += 1;
            }
            echo "Le nombre des étudiants ayant validé : $nbr_valides.<br>";
            // 5
            $nom_meilleur = "";
            $note_meilleur = 0;
            foreach ($notes as $nom => $note) {
                if ($note>$note_meilleur) {
                    $note_meilleur = $note;
                    $nom_meilleur = $nom;
                }
            }
            echo "Le meilleur étudiant est $nom_meilleur qui a obtenu $note_meilleur.";
        ?>
    </body>
</html>