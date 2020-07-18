
<!-- ----- debut ModelRecolte -->
<?php
require_once 'Model.php';

class ModelRecolte {

 private $producteur_id, $vin_id, $quantite;

 // pas possible d'avoir 2 constructeurs
 public function __construct($producteur_id = NULL, $vin_id = NULL, $quantite = NULL) {
  // valeurs nulles si pas de passage de parametres
  if (!is_null($producteur_id)) {
   $this->producteur_id = $producteur_id;
   $this->vin_id = $vin_id;
   $this->quantite = $quantite;
  }
 }

 function setProducteur_id($producteur_id) {
  $this->producteur_id = $producteur_id;
 }

 function setVin_id($vin_id) {
  $this->vin_id = $vin_id;
 }

 function setQuantite($quantite) {
  $this->quantite = $quantite;
 }


 
 

 function getProducteur_id() {
  return $this->producteur_id;
 }

 function getVin_id() {
  return $this->vin_id ;
 }

 function getQuantite() {
  return $this->quantite;
 }


 public function __toString() {
  return $this->producteur_id;
 }

 // Persistance .......


 public static function view() {
  printf("<tr><td>%d</td><td>%d</td><td>%d</td></tr>", $this->getProducteur_id(), $this->getVin_id(), $this->getQuantite());
 }

// retourne une liste des id
 public static function getAllId() {
  try {
   $database = Model::getInstance();
   $query = "select producteur_id,vin_id from recolte order by producteur_id,vin_id  ASC";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll();
     return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 public static function getAllAnnee() {
  try {
   $database = Model::getInstance();
   $query = "select annee from vin order by annee  ASC";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll();
     return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }
 
 
//Je sais pas
 public static function getMany($query) {
  try {
   $database = Model::getInstance();
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 //Liste des Recoltes
 public static function getAll() {
  try {
   $database = Model::getInstance();
   $query = "select * from recolte";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 //Liste des recoltes Selon ID
 public static function getOne($id) {
  try {
   $database = Model::getInstance();
   $query = "select distinct p.id, p.nom, p.prenom, p.region,r.quantite from vin v, recolte r, producteur p
				WHERE r.vin_id=v.id and r.producteur_id=p.id and v.annee=:id ";
   $statement = $database->prepare($query);
   $statement->execute([
     'id' => $id
   ]);
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 //Insertion d'un recolte
 public static function insert($producteur_id, $vin_id, $quantite) {
  try {
   $database = Model::getInstance();

   
   // ajout d'un nouveau tuple;
   $query = "insert into recolte value (:producteur_id, :vin_id, :quantite)";
   $statement = $database->prepare($query);
   $i=$statement->execute([
     'producteur_id' => $producteur_id,
     'vin_id' => $vin_id,
     'quantite' => $quantite,
   ]);
   return $i;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }

 //Liste Sans doublon des Regions
 public static function getAllRegion() {
  try {
   $database = Model::getInstance();
   $query = "select distinct region from recolte";
   $statement = $database->prepare($query);
   $statement->execute();
   $results = $statement->fetchAll(PDO::FETCH_CLASS, "ModelRecolte");
   return $results;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return NULL;
  }
 }

 
 
 
 public static function update($producteur_id, $vin_id, $quantite, $val1,$val2) {
  try {
   $database = Model::getInstance();

   
   // ajout d'un nouveau tuple;
   $query = "UPDATE recolte SET producteur_id = :producteur_id, vin_id = :vin_id, quantite = :quantite WHERE producteur_id=:val1 AND vin_id=:val2 "; 
   $statement = $database->prepare($query);
   $i=$statement->execute([
     'producteur_id' => $producteur_id,
     'vin_id' => $vin_id,
     'quantite' => $quantite,
     'val1' => $val1,
     'val2' => $val2,
     
   ]);
   return $i;
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
 }

 public static function delete($prod,$vin) {
 
   try {
   $database = Model::getInstance();
   $som=$prod;
   $query = "delete from recolte where producteur_id = :prod and vin_id=:vin";
   $statement = $database->prepare($query);
   $statement->execute([
     'prod' => $prod,
     'vin' => $vin
           
   ]);
  
   return $som;
   
  } catch (PDOException $e) {
   printf("%s - %s<p/>\n", $e->getCode(), $e->getMessage());
   return -1;
  }
   
 }


}
?>
<!-- ----- fin ModelRecolte -->
