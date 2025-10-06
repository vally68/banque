<?php
include "Titulaire.php";
include "Compte.php";

// Création des titulaires
$t1 = new Titulaire("Dupont", "Jean", "1980-05-12", "Paris");
$t2 = new Titulaire("Martin", "Sophie", "1990-08-24", "Lyon");

// Création des comptes
$c18 = new Compte("Compte joint", 1500, "€", $t1);
$c1 = new Compte("Compte chèque", 500, "€", $t1);
$c2 = new Compte("Livret A", 3000, "€", $t1);
$c3 = new Compte("Compte courant", 500, "€", $t2);





// Affichage
$t1->AfficherInfos();
$t2->AfficherInfos();
$c3->CrediterCompte(500);
$c3->DebiterCompte(100);
$t2->AfficherInfos();
$c1->VirementCompte(600,$c2);
$t1->AfficherInfos();



//gestion de la session
// session_start();
// include("Compte.php");
// include("Titulaire.php");


