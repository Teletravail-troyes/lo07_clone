
<!-- ----- debut Router1 -->
<?php
require ('/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/controller/ControllerVin.php');
require ('/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/controller/ControllerProducteur.php');
require ('/home/etu/tamgnoce/www/lo07_tp/projet/P3/app/controller/ControllerRecolte.php');

// --- récupération de l'action passée dans l'URL
$query_string = $_SERVER['QUERY_STRING'];

// fonction parse_str permet de construire 
// une table de hachage (clé + valeur)
parse_str($query_string, $param);

// --- $action contient le nom de la méthode statique recherchée
$action = htmlspecialchars($param["action"]);



$action = $param['action'];

unset($param['action']);

$args=$param;




// --- Liste des méthodes autorisées
switch ($action) {
 case "vinReadAll" :  

 case "vinReadOne" : 
     
 case "vinReadId" :  

 case "vinCreate" : 

 case "vinCreated" : 
     
 case "vinDeleted" :
     
     ControllerVin::$action($args);
  break;

 // Tache par défaut
 default:
     
        switch ($action) {
            case "producteurReadAll": 

            case "producteurReadId": 
                
            case "producteurReadOne": 

            case "producteurCreate": 

            case "producteurCreated":

            case "producteurReadRegion":
               
            case "producteurDeleted" :

                         ControllerProducteur::$action($args);
        break;

        default:
            
                     switch ($action) {
            case "recolteReadAll": 

            case "recolteReadId": 
                
            case "recolteReadAnnee":
                
            case "recolteReadOne": 

            case "recolteCreate": 

            case "recolteCreated":

            case "recolteReadRegion":
               
            case "recolteDeleted" :
                
            case "recolteUpdate" :
            
            case "recolteUpdated" :

                ControllerRecolte::$action($args);
        break;

        default:
            
            switch ($action) {
            case "proposition":
            case "monProjet":

                         ControllerVin::$action($args);
        break;

        default:
                       
            
                 $action = "caveAccueil";
                 ControllerVin::$action($args);
                           }
        }
}
}

// --- Liste des méthodes autorisées



 


?>
<!-- ----- Fin Router1 -->

