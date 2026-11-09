<?php
/*
    
    # Sans la partie C de l'exercice :

    "Bienvenue ".$_POST['nom']." ".$_POST['prenom']." au groupe ".$_POST['groupe'].".";
    # Autre méthode :
    # echo "Bienvenue {$_POST['nom']} {$_POST['prenom']} au groupe {$_POST['groupe']}.";
*/
?>

<?php
    
    # Avec la partie C de l'exercice :

    // C-1-1 (Vérifie si les champs existent pour éviter l'erreur "Undefined array key" lors d'un accès direct)
    if (isset($_POST['nom'], $_POST['prenom'], $_POST['groupe'])) {

        // Aide-2 (Nettoyage des espaces superflus avec trim())
        $nom = trim($_POST['nom']);
        $prenom = trim($_POST['prenom']);
        $groupe = trim($_POST['groupe']);

        // C-1-2 (Vérification que les valeurs ne sont pas vides)
        if ($nom !== '' && $prenom !== '' && $groupe !== '') {
            
            // Échappement des caractères spéciaux pour contrer les failles XSS
            $nom = htmlspecialchars($nom, ENT_QUOTES, 'UTF-8');
            $prenom = htmlspecialchars($prenom, ENT_QUOTES, 'UTF-8');
            $groupe = htmlspecialchars($groupe, ENT_QUOTES, 'UTF-8');

            echo "Bienvenue " . $nom . " " . $prenom . " au groupe " . $groupe . ".";
        
        } else {
            echo "Erreur : Tous les champs doivent être remplis et ne doivent pas comporter que des espaces.";
        }

    } else {
        // C-2 (Message affiché en cas d'accès direct à la page sans soumettre le formulaire)
        echo "Veuillez passer par le formulaire <a href='ex10_POST.html'>ex10_POST.html</a> pour vous connecter.";
    }
?>