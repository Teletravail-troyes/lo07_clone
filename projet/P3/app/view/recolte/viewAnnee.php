
<!-- ----- début viewId -->
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
      <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';

      // $results contient un tableau avec la liste des clés.
echo ("<h3></h3>");
echo ("<h3>Veuillez Selectionner l'Année pour afficher la Liste des Producteurs par Année avec Quantité </h3>");

      
      ?>

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='<?php echo ($target); ?>'>
        
        <label for="ANNEE">ANNEE : </label> <select class="form-control" id='id' name='id' style="width: 200px">
            <?php
            foreach ($results as $id=>$val) {
             echo ("<option>".$val[annee]."</option>");
            }
            ?>
        </select>
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Submit form</button>
    </form>
    <p/>
  </div>

  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

  <!-- ----- fin viewId -->