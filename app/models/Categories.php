<?php
 class Categorie extends BaseModel {
    private int $id_C;
    private string $nom;
    private string $description;
    private array $vehicules = [];

   public function __construct(PDO $pdo, int $id_C = 0, string $nom = '',  string $description = '')
   { parent::__construct($pdo);
     $this->id_C = $id_C;
     $this->nom = $nom;
     $this->description = $description;

   }

   //Getters encapsulation
   public function getId(): int {return $this->id_C;}
   public function getNom(): string {return $this->nom;}
   public function getDescription(): string {return $this->description;}
   public function getVehicules(): array {return $this->vehicules;}

   public function loadVehicules(): void 
   { $sql = 'SELECT v.*, c.nom as categorie
            FROM categories c
            INNER JOIN vehicules v ON v.id_cate = c.id_C
            WHERE c.id_C = :id_C';
       $stmt = $this->pdo->prepare($sql);
       $stmt->bindValue(':id_C', $this->id_C, PDO::PARAM_INT);
       $stmt->execute();

       $this->vehicules = $stmt->fetchAll(PDO::FETCH_ASSOC);

   }
   public function save(): bool
   { $sql = 'INSERT INTO categories (nom,description) VALUES(:nom, :description)';
      $stmt = $this->pdo->prepare($sql);
      $stmt->execute([ 
        ":nom" => $this->nom,
        ":description" => $this->description
      ]);
      return true;

   }




   public static function find(int $id_C)
   { $sql = 'SELECT*FROM categories WHERE id_C = :id_C';
      $stmt = self::$pdo->prepare($sql);
      $stmt->execute([':id_C'=> $id_C]);
       
      return $stmt->fetch(PDO::FETCH_ASSOC);



   } 


 }



?>