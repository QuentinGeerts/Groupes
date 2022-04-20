<?php

if(isset($_POST['info'])) {

    echo "Informations demandées";

}

if(isset($_POST['modif'])) {

    echo "Informations modifiées";

}

if(isset($_POST['supp'])) {

    echo "Informations supprimées";

}

?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>

    <form action="./form.php" method="post">

        <input type="submit" value="Info" name="info">
        <input type="submit" value="Modifier" name="modif">
        <input type="submit" value="Supprimer" name="supp">

    </form>

</body>

</html>