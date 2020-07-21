
<!-- ----- début viewInserted -->
<?php
require ($root . '/app/view/fragment/fragmentCaveHeader.html');
?>

<body>
  <div class="container">
    <?php
    include $root . '/app/view/fragment/fragmentCaveMenu.html';
    include $root . '/app/view/fragment/fragmentCaveJumbotron.html';
    ?>
    <!-- ===================================================== -->
    <?php
        
   
    switch ($ost) {
 case 1 : {
     
        echo ("<h3>La nouvelle recolte a été modifié </h3>");
     
     echo ("<li>producteur_id = " . $_GET['producteur_id'] . "</li>");
     echo ("<li>vin_id = " . $_GET['vin_id'] . "</li>");
     echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
     echo("</ul>");
       
    } 
 break;
 default :{
     echo ("<h3>Problème de modification de la recolte</h3>");
      echo("<ul>");
     echo ("<li>producteur_id = " . $_GET['producteur_id']. "</li>");
     echo ("<li>vin_id = " . $_GET['vin_id'] . "</li>");
     echo ("<li>quantite = " . $_GET['quantite'] . "</li>");
     echo("</ul>");

        
    }

    
    }
    
    
  
    echo("</div>");
    
    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewInserted -->    

    
    