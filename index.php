<?php var_dump($_GET["page"]);

$page = isset($_GET["page"])? $_GET["page"] : "accueil";

switch ($page) {
    case "accueil":
        $include="recettes/accueil.html";
        break;
    case "entree":
        $include="recettes/entree.html";
        break;
    case "plat":
        $include="recettes/plat.html";
        break;
    case "dessert":
        $include="recettes/dessert.html";
        break;
    default : echo "Vous avez demandé la page d'accueil !";
}
?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <title>Mon livre de recettes</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
        <?php require "html/menu.php" ?>
        </header>
        <article>
            <?php require $include ?>
        </article>
    </body>

</html>