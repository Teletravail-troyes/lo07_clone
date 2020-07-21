
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?> 

    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='recolteUpdated'>   
         <input type="hidden" name='val1' value='<?php  echo $val1?>'> 
         <input type="hidden" name='val2' value='<?php  echo $var3?>'> 
        <label for="producteur_id">producteur_id : </label><input type="text" name='producteur_id'  value='14'>                           
        <label for="vin_id">vin_id : </label><input type="text" name='vin_id' value='15'>
        <label for="quantite">quantite : </label><input type="text" name='quantite' value='50'>                
      </div>
      <p/>
      <button class="btn btn-primary" type="submit">Modifier</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



