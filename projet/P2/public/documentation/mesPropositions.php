<!-- ----- debut de la page cave_acceuil -->
<?php include '/home/etu/tamgnoce/www/lo07_tp/projet/P2/app/view/fragment/fragmentCaveHeader.html'; ?>
<style type="text/css">
h3 {
	text-align: center;
}
</style>
<body>
  <div class="container">
      
      
      
      
    <p>
      <?php
    include '/home/etu/tamgnoce/www/lo07_tp/projet/P2/app/view/fragment/fragmentCaveMenu.html';
    include '/home/etu/tamgnoce/www/lo07_tp/projet/P2/app/view/fragment/fragmentCaveJumbotron.html';
     ?>
    </p>
<h3><u>PROPOSITION D'AMELIORATION:</u></h3>
<blockquote>
  <blockquote>
    <p>&nbsp;</p>
    <p><em><strong>Iere PROPOSITION: Correction de Bug</strong></em></p>
  </blockquote>
</blockquote>
    <p>	Lorsque le programme de cours_mvc était executé, il presentait un bug .</p>
    <p>Celui-ci était: &quot;Constant DEBUG already defined&quot;. </p>
    <p>Pour lecorriger nous avons changé le controle de Debug dans le fichier &quot;config.php&quot;:</p>
    <p>const DEBUG = FALSE; 
    // Code de Depart</p>
    <p>if (!defined('DEBUG')) define('DEBUG, 'FALSE'); //Nouveau Code</p>
    <blockquote>
      <blockquote>
        <p><em><strong>2e PROPOSITION: Idée Simplificatrice</strong></em></p>
      </blockquote>
    </blockquote>
<p> Lorsque nous avons voulu ajouter les fonctionnalités du producteur, nous avons eu un probleme dans le fichier routeur.php, car le Switch Case present permettait uniquement de renvoyer des fonctions liées au Vin:</p>
<p>//Code de Depart</p>
<p>switch ($action) {<br>
  case &quot;vinReadAll&quot; :<br>
  case &quot;vinReadOne&quot; :<br>
  case &quot;vinReadId&quot; :<br>
  case &quot;vinCreate&quot; :<br>
  case &quot;vinCreated&quot; :<br>
  ControllerVin::$action();<br>
  break;</p>
<p> // Tache par défaut<br>
  default:<br>
  $action = &quot;caveAccueil&quot;;<br>
  ControllerVin::$action();<br>
  }</p>
<p>Pour resoudre le probleme nous avons imbriqué deux boucles Switch Case:</p>
<p>switch ($action) {<br>
case &quot;vinReadAll&quot; : </p>
<p> case &quot;vinReadOne&quot; : <br>
  <br>
  case &quot;vinReadId&quot; : </p>
<p> case &quot;vinCreate&quot; : </p>
<p> case &quot;vinCreated&quot; : <br>
  ControllerVin::$action();<br>
  break;</p>
<p> // Tache par défaut<br>
  default:<br>
  <br>
  switch ($action) {<br>
  case &quot;producteurReadAll&quot;: </p>
<p> case &quot;producteurReadId&quot;: <br>
  <br>
  case &quot;producteurReadOne&quot;: </p>
<p> case &quot;producteurCreate&quot;: </p>
<p> case &quot;producteurCreated&quot;:</p>
<p> case &quot;producteurReadRegion&quot;:<br>
  ControllerProducteur::$action();<br>
  break;</p>
<p> default:<br>
  $action = &quot;caveAccueil&quot;;<br>
  ControllerVin::$action();<br>
  }<br>
  }</p>
<p><br>
</p>
    <p>
      <?php
  
    include '/home/etu/tamgnoce/www/lo07_tp/projet/P2/app/view/fragment/fragmentCaveFooter.html';
    ?>
    </p>
<!-- ----- fin de la page cave_acceuil -->