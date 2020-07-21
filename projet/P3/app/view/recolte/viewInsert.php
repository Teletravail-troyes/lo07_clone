
<!-- ----- début viewInsert -->
 
<?php 
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
      include $root . '/app/view/fragment/fragmentCaveMenu.html';
      include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
      echo ("<h3>Veuillez renseigner les informations sur la Recolte</h3>");

    ?> 
<p/>
<p/>
    <form role="form" method='get' action='router2.php'>
      <div class="form-group">
        <input type="hidden" name='action' value='recolteCreated'>        
        <label for="producteur_id">producteur_id : </label><input type="text" name='producteur_id'  value='14'> &nbsp;&nbsp;                          
        <label for="vin_id">vin_id : </label><input type="text" name='vin_id' value='15'>&nbsp;&nbsp;
        
        <label for="quantite">quantite : </label><input type="text" name='quantite' value='50'>                
      </div>
      <p/>
      <p/>
      <button class="btn btn-primary" type="submit">Submit Form</button>
    </form>
    <p/>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCaveFooter.html'; ?>

<!-- ----- fin viewInsert -->



