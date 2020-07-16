<!-- ----- debut de la page cave_acceuil -->
<?php include '/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/view/fragment/fragmentCaveHeader.html'; ?>
<style type="text/css">
h3 {
	text-align: center;
}
</style>
<body>
  <div class="container">
      
      
      
      
    <p>
      <?php
    include '/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/view/fragment/fragmentCaveMenu.html';
    include '/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/view/fragment/fragmentCaveJumbotron.html';
     ?>
    </p>
<h3><u>DOCUMENTATION PROJET LO07 TAMGNO Cedric:</u></h3>
<blockquote>
  <blockquote>
    <p>&nbsp;</p>
    <p><em><strong><u>I- Presentation générale du dossier Projet:</u></strong></em></p>
  </blockquote>
</blockquote>
    <p>	Notre projet s'articule autour de 3 dossiers:</p>
    <ul class="list-group">
  <li class="list-group-item">P1:  Les fichiers du Web 13. C'est dossier du TP13 (MVC1)</li>
  <li class="list-group-item">P2:  Les fichiers du Web 14. C'est dossier du TP14 (MVC2)</li>
  <li class="list-group-item">P3: Les fichiers web de notre projet. C'est ce dossier qui contient donc les fichiers du projet original.</li>
  </ul>
 
    <p>&nbsp;</p>
<blockquote>
  <blockquote>
    <p><em><strong><u>II- Presentation de notre Projet Original (Dossier P3):</u></strong></em>  </p>
  </blockquote>
</blockquote>

    <p>Notre projet original possede possede 4 Menu.</p>
    <p>&nbsp;</p>
    <blockquote>
  <blockquote>
      <p><em><strong> <u>1) Vin:</u></strong></em>  </p>
  </blockquote>
</blockquote>
<p>Il a des fonctionnalité tels que:</p>
    
    
    <ul class="list-group">
  <li class="list-group-item">Liste des vins</li>
  <li class="list-group-item">Selection d'un vin par son Id</li>
  <li class="list-group-item">Insertion d'un Vin, Suppression d'un vin</li>
  </ul>
    
    
    
    
    <blockquote>
  <blockquote>
      <p><em><strong><u>2) Producteur:</u></strong></em> </p>
  </blockquote>
</blockquote>


    <p>Il a des fonctionnalité tels que:</p>
    
    <ul class="list-group">
  <li class="list-group-item">Liste des producteurs</li>
  <li class="list-group-item">Selection d'un producteur par son Id</li>
  <li class="list-group-item">Insertion d'un producteur</li>
  <li class="list-group-item">Liste sans doublon des regions</li>
  <li class="list-group-item">Suppression d'un producteur</li>

  </ul>
   
    <p>&nbsp;</p>
    
    
    <blockquote>
  <blockquote>
      <p><em><strong><u>3) PROJET:</u></strong></em> </p>
  </blockquote>
</blockquote>


<p>Ce sont les 5 fonctionnalités originales que nous avons développé. Nous avons:</p>
    
    <ul >
        <li><strong>Liste des Recoltes: </strong> </li><p>
   Cette fonctionnalité permet de renvoyer une liste differentes recoltes que nous avons. Ceci en presentant l'Idenifiant du producteur, l'Identifiant du Vin, et la Quantité dans un tableau.
   <li ><strong>Inserer une Recolte:</strong></li><p>
  
   Cette fonctionnalité permet d'Inserer une recolte, en renseignant son l'Identifant du producteur, l'Identifiant du Vin et une Quantité.
   <li  ><strong>Suppression d'une Recolte</strong></li><p>
  
   Cette fonctionnalité permet de Supprimer une récolte, ceci en sélectionnant un couple d'Identifiants de Producteur et Vin.
   <li  ><strong>Modifier une Recolte:</strong></li><p>
   Cette fonctionnalité permet de Modifier une récolte, ceci en sélectionnant un couple d'Identifiants de Producteur et Vin. Ensuite, il faut renseigner son l'Identifant du producteur, l'Identifiant du Vin et une Quantité.
   <li  ><strong>Selection de producteur par annee avec quantité:</strong></li><p>
  
 
  Cette fonctionnalité permet d'afficher une liste des Producteurs par Année avec Quantité. Pour ce faire on selectionne d'abord puis après avoir validé le formulaire, nous avons accès a la liste, avec l'Identifiant des Producteurs, leurs Nom, Prenom, Region, et la Quantité de la Recolte.
    </ul>
   
   
   
   
   
   
    <blockquote>
  <blockquote>
    <p><em><strong><u>4) Documentation:</u></strong></em> </p>
  </blockquote>
</blockquote>
    <p>Il a des fonctionnalité tels que:</p>
   
    <ul class="list-group">
  <li class="list-group-item">MonProjet(Qui est cette page)</li>
  <li class="list-group-item">Proposition d'amelioration(demandée au TP13)</li>
  </ul>
   
   
    <p>&nbsp;</p>
    
    <p>&nbsp;</p>
<p><br>
</p>
    <p>
      <?php
  
    include '/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/view/fragment/fragmentCaveFooter.html';
    ?>
    </p>
<!-- ----- fin de la page cave_acceuil -->