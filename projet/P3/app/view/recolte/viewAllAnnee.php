




<!-- ----- début viewAll -->
<?php


// J'ai enlevé les require config.php

require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      
echo ("<h3>Liste des Producteurs par Année avec Quantité</h3>");

?>
    <table class = "table table-striped table-bordered">
      <thead>
        <tr>
          <th scope = "col">Id</th>
          <th scope = "col">Nom</th>
          <th scope = "col">Prenom</th>
          <th scope = "col">Region</th>
          <th scope = "col">Quantite</th>
        </tr>
      </thead>
      <tbody>
           <?php
          // La liste des vins est dans une variable $results             
          foreach ($results as $element) {
           printf("<tr><td>%d</td><td>%s</td><td>%s</td><td>%s</td><td>%d</td></tr>", $element->id, $element->nom,$element->prenom, $element->region, $element->getQuantite());
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewAll -->