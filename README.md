# TP 02 PHP — Programmation Web 2 — 2026/2027

* **Nom :** QABOUL
* **Prénom :** Yahya
* **Groupe :** Groupe 4


---


## Liste des exercices
* **Exercice 1 :** `ex01.php`
* **Exercice 2 :** `ex02.php`
* **Exercice 3 :** `ex03.php`
* **Exercice 4 :** `ex04.php`
* **Exercice 5 :** `ex05.php`
* **Exercice 6 :** `ex06.php`
* **Exercice 7 :** `ex07.php`
* **Exercice 8 :** `ex08.php`
* **Exercice 9 :** `ex09.php`
* **Exercice 10 (GET) :** `ex10_get.html` & `ex10_get.php`
* **Exercice 10 (POST) :** `ex10_post.html` & `ex10_post.php`


---


## Réponses complémentaires aux exercices du TP

### Exercice 2 — Question 5

   #### Instructions d'exécution :
     $note = 12;
     $Note = 16;
   #### Explication :
     Les variables $note et $Note sont différentes, car PHP est sensible à la casse dans les noms des variables.

   #### Noms de variables valides :
     $a, $_a, $a_a, $AAA et $a1.

### Exercice 4 — Question 6

   #### Instructions d'exécution :
     $var4 = true;
     $var5 = false;
     echo "<br>echo : $var4 et $var5<br>";
     var_dump($var4, $var5);
   #### Explication de la différence d'affichage :
     echo transforme tout ce qu'il affiche en chaîne de caractères avant l'affichage, donc il transforme false en une chaîne vide "", tandis que var_dump() affiche le type exact sans aucune conversion.