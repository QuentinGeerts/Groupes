<?php 
    $resultat = "";
    $note = "";
    $color = "";

    if(isset($_POST["note"]))
    {
        $note = $_POST["note"];
        
        if ($note >= 0 && $note <= 20) {
            // note valide
            if ($note < 10) {
                $resultat = "La note $note correspond à I";;
                $color = 'style="color:orange"';
            }
            elseif ($note < 13) {
                $resultat = "La note $note correspond à S";
                $color = 'style="color:yellow"';
            }
            elseif ($note < 16) {
                $resultat = "La note $note correspond à B";
                $color = 'style="color:lightgreen"';
            }
            elseif ($note < 19) {
                $resultat = "La note $note correspond à TB";
                $color = 'style="color:green"';
            }
            else {
                $resultat = "La note $note correspond à Excellent";
                $color = 'style="color:gold"';
            }

        }
        else {
            $resultat = "Erreur : note non valide";
            $color = 'style="color:red"';
        }

    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Appréciation</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h2>Appréciation avec flexbox</h2>
    <div class="flex">
        <div class="gauche">
            <code>
            table>(tr>th*3)+(tr*5>td*3)
            </code>
            <table>
                <tr>
                    <th>Note</th>
                    <th>Appréciation</th>
                    <th>Couleur</th>
                </tr>
                <tr>
                    <td>&lt; 10</td>
                    <td>I</td>
                    <td>orange</td>
                </tr>
                <tr>
                    <td>10-12</td>
                    <td>S</td>
                    <td>yellow</td>
                </tr>
                <tr>
                    <td>13-15</td>
                    <td>B</td>
                    <td>lightgreen</td>
                </tr>
                <tr>
                    <td>16-18</td>
                    <td>TB</td>
                    <td>green</td>
                </tr>
                <tr>
                    <td>&gt;=19</td>
                    <td>Excellent</td>
                    <td>gold</td>
                </tr>
            </table> 
            
        </div>
        <div class="droite">
            
            <form action="#" method="post">
                <label for="note">Entrez la note de l'étudiant :</label>
                <input type="number" name="note" id="note" step="any" value="<?= $note; ?>">
                <input type="submit" value="Tester">
            </form>
            <p <?= $color; ?>><?= $resultat; ?> </p>
        </div>
    </div>
    
    
</body>
</html>