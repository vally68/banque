<?php
// Titulaire.php
class Titulaire {
    private string $_nom;
    private string $_prenom;
    private DateTime $_dateNaissance;
    private string $_ville;
    private array $_comptes = [];

    public function __construct(string $_nom, string $_prenom, string $_dateNaissance, string $_ville) {
        $this->nom = $_nom;
        $this->prenom = $_prenom;
        $this->dateNaissance = new DateTime($_dateNaissance);
        $this->ville = $_ville;
    }

    public function getNom(): string { return $this->nom; }
    public function getPrenom(): string { return $this->prenom; }
    public function getVille(): string { return $this->ville; }

    public function getAge(): int {
        $now = new DateTime();
        $diff = $now->diff($this->dateNaissance);
        return $diff->y;
    }

    // Ajouter un compte à la liste
    public function AjouterCompte(Compte $compte): void {
        $this->comptes[] = $compte;
    }

    // Afficher les infos du titulaire et ses comptes
    public function AfficherInfos(): void {
        echo "<h3>{$this->prenom} {$this->nom}</h3>";
        echo "Âge : " . $this->getAge() . " ans<br>";
        echo "Ville : {$this->ville}<br>";
        echo "<strong>Comptes :</strong><br>";
        foreach ($this->comptes as $compte) {
            echo "- " . $compte . "<br>";
        }
        echo "<br>";
    }
}


// // Définir la classe Person
// cl ass Titulaire {
//     // Déclarer une variable privée pour stocker le nom 
//     private $nom;
//     // Déclarer une variable privée pour stocker le prénom
//     private $prenom;

//     private $_Birth;
// 	private $_City;

//     // Constructeur de la classe Person qui initialise
//     // les variables nom et pren-om
//     public function __construct($nom, $prenom, $_Birth, $_City) {
//         // Attribuer à la variable nom la valeur du paramètre nom
//         $this->nom = $nom;
//         // Attribuer à la variable prenom la valeur du paramètre prenom
//         $this->prenom = $prenom;
//         $this ->birth = $_Birth;
// 		$this ->City = $_City;
//     }

//     // Méthode pour récupérer le nom de la personne
//     public function getNom() {
//         // Retourner la valeur de la variable prenom
//         return $this->nom;
//     }

//     // Méthode pour récupérer le prenom
//     public function getPrenom() {
//         // Retourner la valeur de la variable 
//         return $this->prenom;
//     }

//     // Méthode pour récupérer le nom de la personne
//     public function getBirth() {
//         // Retourner la valeur de la variable prenom
//         return $this->birth;
//     }

//     // Méthode pour définir le nom de la personne
//     public function setNom($nom) {
//         // Attribuer à la variable nom  la valeur du paramètre nom
//         $this->nom = $nom;
//     }

//     // Méthode pour définir le prenom
//     public function setPrenom($prenom) {
//         // Attribuer à la variable prenom la valeur du paramètre prenom
//         $this->prenom = $prenom;
//     }

//      // Méthode pour récupérer le nom de la personne
//     public function setBirth($_Birth) {
//         // Retourner la valeur de la variable prenom
//         return $this->birth;
//     }
// 	 public function getCity() {
//         // Retourner la valeur de la variable prenom
//         return $this->City;
//     }
	
// 	public function setCity($_City) {
//         // Retourner la valeur de la variable prenom
//         return $this->City;
//     }

//  public function __toString()
//     {
//        return "Auteur : {$this->prenom} {$this->nom}, né le {$this->birth}";
//     }

    

// }
// class AgeCalculator {
//     private $birthDate; 
//     function __construct($birthDate)
//     {
//         if ($birthDate) {
//             $this->birthDate = new DateTime($birthDate);
//         }
//     }
 
//     public function setBirthDate($birthDate)
//     {
//         $this->birthDate = new DateTime($birthDate);
//     }
 
//     public function getAge()
//     {
//         if (!$this->birthDate) {
//             return "Date de naissance non définie.";
//         }

//         $today = new DateTime();
//         $age = $today->diff($this->birthDate);
//         return $age->y; 
//     }


    
// }




// function Age($date_naissance) {
//     $arr1 = explode('/', $date_naissance);
//     $arr2 = explode('/', date('d/m/Y'));
//     if(($arr1[1] < $arr2[1]) || (($arr1[1] == $arr2[1]) && ($arr1[0] <= $arr2[0])))
//     return $arr2[2] - $arr1[2];
//     return $arr2[2] - $arr1[2] - 1;
// }

// $ma_date_de_naissance = '19/07/1992';
// $mon_age = Age($ma_date_de_naissance);
// echo $mon_age ." ans.";

//   $dateNaissance = "21-12-1947";
//   $aujourdhui = date("Y-m-d");
//   $diff = date_diff(date_create($dateNaissance), date_create($aujourdhui));
//   echo 'BLABLA '.$diff->format('%y');

?>
