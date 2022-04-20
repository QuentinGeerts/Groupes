<?php 
    // récupérer le champ annee
    $annee = $_POST["annee"];

    // Si l'année est divisble par 4 et non par 100 ou par 400 elle est bissextile
    if ($annee%4== 0 && $annee % 100 != 0 || $annee % 400 == 0) {
        echo "L'année $annee est bissextile";
    }
    else{
        echo "L'année $annee n'est pas bissextile";
    }

?>