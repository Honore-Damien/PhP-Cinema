<?php

$films = [
    "Snatch",
    "Shaun of the dead",
    "Deadpool",
    "La 7eme compagnie",
    "Dirty Dancing",

];
$i = 0;
$nbFilms = 5;
// Inclusion du header
include "./incs/header.php";
?>
<h1 class="page__title">En salle</h1>
<section>

    <h2>
        Mes films en salle :
    </h2>

    <ul>
        <!-- boucles qui parcourt le tableau -->
        <?php
        // on utilise le compteur de la boucle pour aller chercher les différents indexs du tableau
        for ($i == $nbFilms; $i != $nbFilms; $i++) {
            // affichage du html avec echo
            echo "<li>";
            echo $films[$i] . "</br>";
            echo "</li>";
        }
        ?>
        <!-- fin de boucle -->
    </ul>

    <h2>
        Salles
    </h2>
      <?php
          $rooms = [
            'Athéna', // => index 0
            'Dyonisos', // => index 1
            'Hadès', // => index 2
            'Zeus' // => index 3
          ];
        $i = 0;
        $nbSalles = 4;
          ?>
    <ul>
        <li>
    
        <?php
        
        for ($i == $nbSalles ; $i != $nbSalles; $i++) {
            echo "<li>";
            echo $rooms[$i] . "</br>";
            echo "</li>";
        }
        ?>
        </li>
    </ul>
</section>

<?php
// Inclusion du footer
include "./incs/footer.php";
?>