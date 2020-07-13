
<!-- ----- début viewDeleted -->
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
    if ($results==-1) {
     
     echo ("<h3>Problème d'insertion du Producteur. Il est probable qu'il soit présent dans la table des récoltes</h3>");
       
    } else {
     echo ("<h3>Le Producteur a bien été Supprimé </h3>");
     echo $results;
     echo("<ul>");
     echo("</ul>");
    }

    echo("</div>");

    include $root . '/app/view/fragment/fragmentCaveFooter.html';
    ?>
    <!-- ----- fin viewDeleted -->    

    
    