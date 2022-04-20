<?php

$error = "";
$details = "";

if ( isset($_GET['id']) ) {
    try {
        include('database.php');
        
        $query = "SELECT * FROM personne WHERE id = :id";
    
        $obj = $pdo->prepare($query);
        $obj->execute(array(
            ':id' => $_GET['id']
        ));
    
        $personne = $obj->fetchAll();

        if ( count($personne) == 1) {
            foreach($personne as $p) {
                $details .= "<div class='details'>";
                $details .= "<h1>Informations : </h1>";
                $details .= "<p>Nom : {$p["nom"]}</p>";
                $details .= "<p>Prénom : {$p["prenom"]}</p>";
                $details .= "<p>Sexe : {$p["sexe"]}</p>";
                $details .= "<h2>Adresse : </h2>";
                $details .= "<p>{$p["ad_num"]} {$p["ad_rue"]}</p>";
                $details .= "<p>{$p["ad_cp"]} {$p["ad_ville"]}</p>";
                $details .= "</div>";
            }
        }
        else {
            $details .= "<h2>Personne non trouvée.</h2>";
        }

        
        
    } catch (PDOException $e) {
        $error = "<p class='ErrorMessage'>" . $e->getMessage() . "</p>";
    }
} else {
    $error = "<p class='ErrorMessage'>Vous ne pouvez pas accéder à ces détails.</p>";
}


?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
    <title>Client</title>
    <link rel="stylesheet" href="style.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<?php include("menu.php"); ?>
    <?= $error; ?>

    <div class="container">

    <?= $details; ?>

    </div>
</body>
</html>