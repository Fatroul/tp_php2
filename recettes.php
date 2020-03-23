<?php

    $recettes = [
        "titre"=>"Plat 1",
        "image" => "img/plat1.jpg",
        "description" => "encore les lasagnes",
        "temps" => "2h05",
        "personnes" => "8",
        "difficulte" => "3/4",
        "cout" => "3/4",
        "ingredients" => "1 paquet de pâtes de lasagnes///3 oignons jaunes///3 gousses d'ail///1 branche de céleri///1 carotte///etc ...",
        "etapes" => "Faire revenir gousses hachées d'ail et les oignons émincés dans un peu d'huile d'olive.///Ajouter la carotte et la branche de céleri hachée puis la viande et faire revenir le tout.///Au bout de quelques minutes, ajouter le vin rouge. Laisser cuire jusqu'à évaporation."
    ];
?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>Plat 1</title>
        <meta charset="utf-8">
         <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
    
    <body>
        <header>
            <nav class="menu">
                <ul>
                    <li><a href ="../../index.html">Page d'accueil</a></li>
                    <li><a href ="../../recettes/entree.html">Les entrées</a>
                        <ul class="sous-menu">
                            <li><a href ="../../recettes/entrees/entree1.html">Entrée 1</a></li>
                            <li><a href ="../../recettes/entrees/entree2.html">Entrée 2</a></li>
                            <li><a href ="../../recettes/entrees/entree3.html">Entrée 3</a></li>
                        </ul>
                    </li>
                    <li><a href ="../../recettes/plat.html">Les plats</a>
                        <ul class="sous-menu">
                            <li><a href ="../../recettes/plats/plat1.html">Plat 1</a></li>
                            <li><a href ="../../recettes/plats/plat2.html">Plat 2</a></li>
                            <li><a href ="../../recettes/plats/plat3.html">Plat 3</a></li>
                        </ul>
                    </li>
                    <li><a href ="../../recettes/dessert.html">Les desserts</a>
                        <ul class="sous-menu">
                            <li><a href ="../../recettes/desserts/dessert1.html">Dessert 1</a></li>
                            <li><a href ="../../recettes/desserts/dessert2.html">Dessert 2</a></li>
                            <li><a href ="../../recettes/desserts/dessert3.html">Dessert 3</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
        </header>

        <h1 class="recipe-head"><?php echo $recettes["titre"] ?></h1>
        <div class="illustration img-block"><a href="plat1.html"><img src="<?php echo $recettes["image"] ?>" alt="Image plat 1"></a></div>
        <section class="row bg-light">
            <div class="col-6">
                <table><tr><th>Temps de préparation</th><th>Personnes</th><th>Difficulté</th><th>Coût</th></tr>
                <tr>
                        <td><?php echo $recettes["temps"] ?></td>
                        <td><?php echo $recettes["personnes"] ?></td>
                        <td><?php echo $recettes["difficulte"] ?></td>
                        <td><?php echo $recettes["cout"] ?></td>
                    </tr>
                </table>

    </body>   
</html>



