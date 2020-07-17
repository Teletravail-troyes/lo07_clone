
<!-- ----- debut ControllerRecolte -->
<?php
require_once '/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/model/ModelRecolte.php';

class ControllerRecolte {
 // --- page d'acceuil
 public static function caveAccueil() {
  include 'config.php';
  $vue = $root . '/app/view/viewCaveAccueil.html';
  if (DEBUG){
   echo ("ControllerRecolte : caveAccueil : vue = $vue");
  }
 
   require ($vue);
 }

 // --- Liste des recoltes
 
 public static function recolteReadAll() {
  $results = ModelRecolte::getAll();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAll.php';
  if (DEBUG){
   echo ("ControllerRecolte : recolteReadAll : vue = $vue");
 }
   require ($vue);
  
 }

 // Affiche un formulaire pour sélectionner un id qui existe
 public static function recolteReadId($args) {
  include 'config.php';

     if (DEBUG){
   echo ("ControllerRecolte : recolteReadId : begin</br>");
 }
           $target = $args['target'];

     $results = ModelRecolte::getAllId();

  // ----- Construction chemin de la vue
  $vue = $root . '/app/view/recolte/viewId.php';
  require ($vue);
 }

 
 
 // Affiche un formulaire pour sélectionner un id qui existe
 public static function recolteReadAnnee($args) {
  include 'config.php';

     if (DEBUG){
   echo ("ControllerRecolte : recolteReadAnnee : begin</br>");
 }
           $target = $args['target'];

     $results = ModelRecolte::getAllAnnee();

  // ----- Construction chemin de la vue
  $vue = $root . '/app/view/recolte/viewAnnee.php';
  require ($vue);
 }
 
 
 
 // Affiche un recolte particulier (id)
 public static function recolteReadOne() {
  $recolte_id = $_GET['id'];
  $results = ModelRecolte::getOne($recolte_id);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewAllAnnee.php';
  require ($vue);
 }

 // Affiche le formulaire de creation d'un recolte
 public static function recolteCreate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInsert.php';
  require ($vue);
 }
 public static function recolteUpdate() {
  // ----- Construction chemin de la vue
  include 'config.php';
  
  $var = explode(" : ",$_GET['id']);
  $var1=$var[0];
  $var2=$var[1];
  $var3=$var[2];
  
  $val = explode ("-",$var2);
  
  $val1=$val[0];  
  
  
  
  
  $vue = $root . '/app/view/recolte/viewUpdate.php';
  require ($vue);
 }
 
 public static function recolteUpdated() {
  // ajouter une validation des informations du formulaire
  $ost = ModelRecolte::update(
      htmlspecialchars($_GET['producteur_id']), htmlspecialchars($_GET['vin_id']), htmlspecialchars($_GET['quantite']),
          htmlspecialchars($_GET['val1']), htmlspecialchars($_GET['val2'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewUpdated.php';
  require ($vue);
 }
 
 
 
 // Affiche un formulaire pour récupérer les informations d'un nouveau recolte.
 // La clé est gérée par le systeme et pas par l'internaute
 public static function recolteCreated() {
  // ajouter une validation des informations du formulaire
  $results = ModelRecolte::insert(
      htmlspecialchars($_GET['producteur_id']), htmlspecialchars($_GET['vin_id']), htmlspecialchars($_GET['quantite'])
  );
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewInserted.php';
  require ($vue);
 }
 
 
 
 // --- Liste des recoltes
 
 public static function recolteReadRegion() {
  $results = ModelRecolte::getAllRegion();
  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewRegion.php';
  if (DEBUG){
   echo ("ControllerRecolte : recolteReadAll : vue = $vue");
 }
   require ($vue);
  
 }
 
 //Suppression du recolte
  public static function recolteDeleted() {
  $var = explode(" : ",$_GET['id']);
  $var1=$var[0];
  $var2=$var[1];
  $var3=$var[2];
  
  $val = explode ("-",$var2);
  
  $val1=$val[0];  
  
  
  $results = ModelRecolte::delete($val1,$var3);

  // ----- Construction chemin de la vue
  include 'config.php';
  $vue = $root . '/app/view/recolte/viewDeleted.php';
  require ($vue);
 }
 
 
 
}
?>
<!-- ----- fin ControllerRecolte -->


