    <?phpS
    
    // Virement d'un compte à l'autre
    public function virementVers(Compte $compteDest, float $montant): void {
        if ($montant <= $this->solde) {
            $this->debiter($montant);
            $compteDest->crediter($montant);
            echo "Virement de {$montant} {$this->devise} effectué de {$this->titulaire->getPrenom()} {$this->titulaire->getNom()} vers {$compteDest->titulaire->getPrenom()} {$compteDest->titulaire->getNom()}<br>";
        } else {
            echo "Échec du virement : solde insuffisant<br>";
        }
    }

     public function getSolde(): float { return $this->solde; }

    // Créditer le compte
    public function crediter(float $montant): void {
        $this->solde += $montant;
    }

    // Débiter le compte
    public function debiter(float $montant): void {
        if ($montant <= $this->solde) {
            $this->solde -= $montant;
        } else {
            echo "Solde insuffisant pour débiter {$montant} {$this->devise}<br>";
        }
    }