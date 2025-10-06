<?php
// Compte.php
class Compte {
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;

    public function __construct(string $_libelle, float $_solde, string $_devise, Titulaire $_titulaire) {
        $this->libelle = $_libelle;
        $this->solde = $_solde;
        $this->devise = $_devise;
        $this->titulaire = $_titulaire;

        // On ajoute ce compte à la liste des comptes du titulaire
        $_titulaire->AjouterCompte($this);
    }

   //faire opération + et - 
   // $_solde - (montant) d'un compte et $_solde + (meme montant) sur un autre compte
   /* 
   
    public fonction _VirementCompte{
    
        $_solde(compte 1) - float && $_solde(compte2) + float;
         
    }*/
   
    

  /*  public foncion _DebiterCompte{
    
        $_solde - (montant);
        return nouveau montant
    }
   
   
   */
    


    // Afficher les infos d'un compte
    public function AfficherInfos(): void {
        echo "<strong>{$this->libelle}</strong> : {$this->solde} {$this->devise} (Titulaire : {$this->titulaire->getPrenom()} {$this->titulaire->getNom()})<br>";
    }

    public function __toString(): string {
        return "{$this->libelle} : {$this->solde} {$this->devise}";
    }


    public function CrediterCompte(): float {
        $_solde + (300);
        return $this-> $_solde;
    
    }
}


// // Définir la classe Person
// class Compte{
//     // Déclarer une variable privée pour stocker le Label 
//     private $_Label;
//     // Déclarer une variable privée pour stocker le préLabel
//     private $_Solde;

//     private $_Devise;

//     private $_prix;

   
//     public function __construct($_Label, $_Solde, $_Devise) {
//         // Attribuer à la variable Label la valeur du paramètre Label
//         $this->Label = $_Label;
//         // Attribuer à la variable Solde la valeur du paramètre Solde
//         $this->Solde = $_Solde;
//         $this->Devise = $_Devise;
       
//     }

//     // Méthode pour récupérer le Label de la personne
//     public function getLabel() {
//         // Retourner la valeur de la variable Solde
//         return $this->Label;
//     }

//     // Méthode pour récupérer le Solde
//     public function getSolde() {
//         // Retourner la valeur de la variable 
//         return $this->Solde;
//     }

//     public function getDevise() {
//         // Retourner la valeur de la variable Solde
//         return $this->Devise;
//     }

//      public function getPrix() {
//         // Retourner la valeur de la variable Solde
//         return $this->prix;
//     }

//     // Méthode pour définir le Label de la personne
//     public function setLabel($_Label) {
//         // Attribuer à la variable Label  la valeur du paramètre Label
//         $this->Label = $_Label;
//     }

//     // Méthode pour définir le Solde
//     public function setSolde($_Solde) {
//         // Attribuer à la variable Solde la valeur du paramètre Solde
//         $this->Solde = $_Solde;
//     }

//   public function setDevise($_Devise) {
//         // Attribuer à la variable Solde la valeur du paramètre Solde
//         $this->Devise = $_Devise;
//     }


//   public function setPrix($_prix) {
//         // Attribuer à la variable Solde la valeur du paramètre Solde
//         $this->prix = $_prix;
//     }


// }

?>
