
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
      ?>

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
              
          <input type="hidden" name='action' value='<?php echo ($target); ?>'>

        <label for="id">Choisir le Couple ID PRODUCTEUR et ID VIN: </label> <select class="form-control" id='id' name='id' style="width: 300px">
            <?php
            foreach ($results as $id=>$val) {
                           
               
            

             echo ("<option>"."Id du Producteur : ".$val[producteur_id]." - Id du Vin : ".$val[vin_id]."</option>");
            
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