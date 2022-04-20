<?php 
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__."/class/Homme.php");
require_once(__ROOT__. "/class/Femme.php");
// créer jules
$jules = new Homme();
// créer cleopatre
$cleopatre = new Femme();
// changer de nom et prénom à cléopatre
$cleopatre->setNom("D'egypte");
$cleopatre->setPrenom("Cléopâtre");
$cleopatre->setFiance(true);
$cleopatre->setSexe("f");
echo "<p>" . $cleopatre->getPrenom() ." " . $cleopatre->getFiancePhrase() . "</p>" ;
$reponse = "oui";
echo "<p>La réponse est : $reponse";
$jules->repondreDemandeMariage($cleopatre, $reponse);

echo "<p>" . $jules->getPrenom() ." " . $jules->getFiancePhrase() . "</p>";
echo "<p>" . $cleopatre->getPrenom() ." " . $cleopatre->getFiancePhrase() . "</p>" ;
?>