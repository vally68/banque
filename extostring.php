<?php
class AgeCalculator {
    private $birthDate; 
    function __construct($birthDate)
    {
        if ($birthDate) {
            $this->birthDate = new DateTime($birthDate);
        }
    }
 
    public function setBirthDate($birthDate)
    {
        $this->birthDate = new DateTime($birthDate);
    }
 
    public function getAge()
    {
        if (!$this->birthDate) {
            return "Date de naissance non définie.";
        }

        $today = new DateTime();
        $age = $today->diff($this->birthDate);
        return $age->y; 
    }


    
}
 
// Exemple d'utilisation :
$cal = new AgeCalculator("2032-04-12"); 
echo  $cal->getAge() . " ans";


 






/*---------------------------------------------------------------*/
/*
    Titre : Calcul l'age à partir d'une date de naissance                                                               
                                                                                                                          
    URL   : https://phpsources.net/code_s.php?id=590
    Auteur           : anakink                                                                                            
    Date édition     : 08 Juin 2010                                                                                       
    Date mise à jour : 11 Aout 2019                                                                                      
    Rapport de la maj:                                                                                                    
    - fonctionnement du code vérifié                                                                                
    - modification de la description                                                                                      
*/
/*---------------------------------------------------------------*/  

    // function age($date) { 
    //      $age = date('Y') - $date; 
    //     if (date('md') < date('md', strtotime($date))) { 
    //         return $age - 1; 
    //     } 
    //     return $age; 
    // } 

    //  echo age('1900-01-01');
    // // en 2019.. affiche 39 ans

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




// // Déclaration d'une classe simple
// class ClasseTest
// {
//     public $foo;

//     public function __construct($foo)
//     {
//         $this->foo = $foo;
//     }

//     public function __toString()
//     {
//         return $this->foo;
//     }
// }

// $class = new ClasseTest('Bonjour<br>');
// echo $class;

// class Auteur {
//     // Déclarer une variable privée pour stocker le nom 
//     private $nom;
//     // Déclarer une variable privée pour stocker le prénom
//     private $prenom;

//     private $_Birth;

//     // Constructeur de la classe Person qui initialise
//     // les variables nom et pren-om
//     public function __construct($nom, $prenom, $_Birth) {
//         // Attribuer à la variable nom la valeur du paramètre nom
//         $this->nom = $nom;
//         // Attribuer à la variable prenom la valeur du paramètre prenom
//         $this->prenom = $prenom;
//         $this ->birth = $_Birth;
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

//  public function __toString()
//     {
//        return "Auteur : {$this->prenom} {$this->nom}, né le {$this->birth}";
//     }



// }

// $class = new Auteur('Balga','Valéria','09/04/1983');
// echo $class;


?>