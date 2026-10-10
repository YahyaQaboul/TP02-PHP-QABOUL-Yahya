<!DOCTYPE html>
<html>
    <head>
        <title>Ex 02</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            $nom = 'Alawi';
            $prenom = 'Ali';
            $age = 99;
            $formation = 'PHP';
            $phrase = 'Je m\'appelle '.$prenom.' '.$nom.', j\'ai '.$age.', je suis une formation en gestion de projet.';
            echo $phrase.'<br>';
            $phrase .= ' J\'apprends PHP ';
            echo $phrase.'<br>';
            $note = 12;
            $Note = 16;
            echo 'Valeur 1 : '.$note.'<br>';
            echo 'Valeur 2 : '.$Note;
        ?>
    </body>
</html>