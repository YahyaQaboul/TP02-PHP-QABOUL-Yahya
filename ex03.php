<!DOCTYPE html>
<html>
    <head>
        <title>Ex 03</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h3> Récapitulatif de l'exercice 3 :</h3>
        <?php
            define("TAUX_TVA", 20);
            define("DEVISE", "MAD");
            $prix_HT = 60;
            $quantite = 3;
            $total_HT = $prix_HT*$quantite;
            echo "<ul><li>Total HT = $total_HT"." ".DEVISE."</li>";
            $TVA = $total_HT*TAUX_TVA/100;
            echo "<li>TVA = $TVA"." ".DEVISE."</li>";
            $total_TTC = $total_HT + $TVA;
            echo "<li>Total TTC = $total_TTC"." ".DEVISE."</li>";
            $total_TTC += 15;
            echo "<li>Montant final = $total_TTC"." ".DEVISE."</li>";
            echo defined("TAUX_TVA") ? "<li>La constante TAUX_TVA existe.</li></ul>" : "<li>La constante TAUX_TVA n'existe pas.</li></ul>";
        ?>
    </body>
</html>