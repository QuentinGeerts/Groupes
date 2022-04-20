<?php 
    ob_start();
    try {
        require_once("model/Personne.php");
        require_once("view/html/head.php");
        require_once("view/menu/menu.php");
    
        require_once("controller/router.php");
    
    
        require_once("view/html/footer.php");
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }
   
?>