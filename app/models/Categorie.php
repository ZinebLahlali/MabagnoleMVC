<?php
namespace app\models;
require_once __DIR__ . '/BaseModel.php';
use PDO, app\models\vehicule;

 class Categorie extends BaseModel {
    // $pdo
    private int $id_C;
    private string $nom;
    private string $description;
    private array $vehicules = [];


  //  public function __construct(PDO $pdo,int $id_C = 0, string $nom = '',  string $description = '')
  // {  if($pdo !== null){
  //       parent::__construct($pdo);
  //      }
  //   //  $this->id_C = $id_C;
  //   //  $this->nom = $nom;
  //   //  $this->description = $description;
   
  //  }

   //Getters encapsulation
   public function getId():int {return $this->id_C;}
   public function getNom():string {return $this->nom;}
   public function getDescription():string {return $this->description;}
   public function getVehicules():array {return $this->vehicules;}

   public function getAllWithVehicules()
   { $sql = 'SELECT v.*, c.nom as categorie
            FROM categories c
            INNER JOIN vehicules v ON v.id_cate = c.id_C
            ';
       $stmt = self::$db->prepare($sql);
       $stmt->execute();

       return $this->vehicules = $stmt->fetchAll(PDO::FETCH_CLASS, Vehicule::class);

   }
   public function save(): bool
   { 
    try{
      $sql = 'INSERT INTO categories (nom,description) VALUES(:nom, :description)';
      $stmt = self::$db->prepare($sql);
      $stmt->execute([ 
        ":nom" => $this->nom,
        ":description" => $this->description
      ]);
      return true;
    }catch(PDOEXCEPTION $e){
        return false;
    }

   }

   public static function find(int $id_C)
   {  try {$sql = 'SELECT*FROM categories WHERE id_C = :id_C';
            $stmt =  self::$db->prepare($sql);
            $stmt->execute([':id_C'=> $id_C]);
            $stmt->setFetchMode(PDO::FETCH_CLASS, self::class);
            return $stmt->fetch();
        } catch(PDOException $e){
            return $e;
        }


   } 


 }



?>