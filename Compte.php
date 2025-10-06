<?php
// Compte.php
class Compte {
    private string $_libelle;
    private float $_solde;
    private string $_devise;
    private Titulaire $_titulaire;
    private $_decouvert;

    public function __construct(string $_libelle, float $_solde, string $_devise, Titulaire $_titulaire, int $_decouvert = 0) {
        $this->libelle = $_libelle;
        $this->solde = $_solde;
        $this->devise = $_devise;
        $this->titulaire = $_titulaire;
        $this->decouvert = $_decouvert;

        // On ajoute ce compte à la liste des comptes du titulaire
        $_titulaire->AjouterCompte($this);
    }


    // Afficher les infos d'un compte
    public function AfficherInfos(): void {
        echo "<strong>{$this->libelle}</strong> : {$this->solde} {$this->devise} (Titulaire : {$this->titulaire->getPrenom()} {$this->titulaire->getNom()})<br>";
    }

    public function __toString(): string {
        return "{$this->libelle} : {$this->solde} {$this->devise}";
    }

    public function CrediterCompte(float $montant): void {
    $this->solde += $montant;
}

public function DebiterCompte(float $montant): void {
    $this->solde -= $montant;
}

public function VirementCompte(float $montant, Compte $destinataire): void {
    if ($montant <= 0) {
        echo "Le montant doit être supérieur à zéro.<br>";
        return;
    }

    if ($this->solde - $montant < -$this->decouvert) {
        echo "Solde insuffisant pour effectuer le virement.<br>";
        return;
    }

    $this->DebiterCompte($montant);
    $destinataire->CrediterCompte($montant);

    echo "Virement de {$montant} {$this->devise} effectué de {$this->libelle} vers {$destinataire->libelle}.<br>";
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
