<!DOCTYPE html>
<html>
    <head>
        <title>Ex 04</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            // 1
            $var1 = 42;     $var2 = "42";    $var3 = 15.8;
            $var4 = true;   $var5 = false;   $var6 = null;
            // 2
            echo '<pre>';
            var_dump($var1, $var2, $var3, $var4, $var5, $var6);
            echo '</pre>';
            // 3
            $var2 = (int) $var2;
            echo '"42" en entier : ';
            var_dump($var2);
            settype($var3, 'int');
            echo "<br>15.8 en entier : ";
            var_dump($var3);
            $var1 = strval($var1);
            echo "<br>42 en chaîne de caractères : ";
            var_dump($var1);
            // 4
            echo "<br><br>Affichage de true et false par echo : ";
            echo "<br>echo : $var4 et $var5<br>";
            echo "Affichage de true et false par var_dump() : <br>";
            var_dump($var4, $var5);
            // 5
            $var7 = (bool) 0;
            echo "<br><br>0 en booléen : ";
            var_dump($var7);
            # -----
            $var7 = "0"; $var7 = (bool) $var7;
            echo '<br>"0" en booléen : ';
            var_dump($var7);
            # -----
            $var7 = "PHP"; $var7 = (bool) $var7;
            echo '<br>"PHP" en booléen : ';
            var_dump($var7);
            # -----
            $var7 = array(); $var7 = (bool) $var7;
            echo '<br>Tableau vide en booléen : ';
            var_dump($var7);
        ?>
    </body>
</html>