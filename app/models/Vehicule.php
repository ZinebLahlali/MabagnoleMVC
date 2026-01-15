
<?php
         class Vehicule extends BaseModel {
            private int  $id_car;
            private string $modele;
            private  int $prix;
            private string $disponible;
            private  string $carburant;
            private  string $boit_vitesse;
            private  int $nb_places;
            private  string $marque;
            private  int $bagages;
            private  string $image;
            private  int $id_cate;




         public function __construct(PDO $pdo, $id_car,$modele, $prix, $disponible, $carburant,$boit_vitesse, $nb_places, $marque, $bagages,$image, $id_cate)
         { parent::__construct($pdo);
           $this->id_car = $id_car;
           $this->modele = $modele;
           $this->prix = $prix;
           $this->disponible = $disponible;
           $this->carburant = $carburant;
           $this->boit_vitesse = $boit_vitesse;
           $this->nb_places = $nb_places;
           $this->marque = $marque;
           $this->bagages = $bagages;
           $this->image = $image;
           $this->id_cate = $id_cate;
         } 

         public function getId(): int {return $this->id_car;}  
         public function getModele(): string {return $this->modele;}
         public function getPrix(): int {return $this->prix;}  
         public function getDisponible(): string  {return $this->disponible;}  
         public function getCarburant(): string  {return $this->carburant;}
         public function getBoiteVitesse(): string {return $this->boit_vitesse;}  
         public function getNbPlaces(): int {return $this->nb_places;}  
         public function getMarque(): string  {return $this->marque;}
         public function getBagages(): int {return $this->bagages;}
         public function getImage():string  {return $this->image;}  
         public function getIdCate(): int {return $this->id_cate;}
           
  
  
   



   }



?>