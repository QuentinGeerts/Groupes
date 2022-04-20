<?php 
    // === DECLARATION ===
    // FONCTION -> RETURN
    function bonjour($nomUtilisateur)
    {
        return "Bonjour " . $nomUtilisateur;
    }

    // PROCEDURE
    function direBonjour($nomUtilisateur)
    {
        echo "Bonjour " . $nomUtilisateur;
    }

    // === UTILISATION ===
    // fonction
    // variable qui récupérer le return
    $phrase = bonjour("Melanie");
    echo $phrase;
    // sans la variable
    echo bonjour("Louis");

    // procedure
    direBonjour("Philippe");

?>