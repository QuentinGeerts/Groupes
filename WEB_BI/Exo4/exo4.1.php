<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <form action="exo4.1.php" method="get">
        <input type="number" name="annee" placeholder="annee">
        <input type="submit" value="Envoyer">
    </form>

    <?php

        /*
            Année bissextile
            Réaliser un petit algorithme qui sur base d’une année donnée va déterminer 
            s’il s’agit d’une année bissextile. Une année est bissextile si elle est 
            divisible par 4, mais non divisible par 100. Ou si elle est divisible par 400.
        */

        // Vérifier si la variable $_GET['annee'] existe
        if(isset($_GET['annee'])) {
            $annee = $_GET['annee'];

            if($annee % 4 == 0 && $annee % 100 != 0 || $annee % 400 == 0) {
                // Année est bissextile
                echo "<p>Année $annee est bissextile</p>";
            } else {
                // Année n'est pas bissextile
                echo "<p>Année $annee n'est pas bissextile</p>";

            }
        }

    ?>
</body>
</html>