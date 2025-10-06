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

// Opérations a faire 
//crediter(200); = fonction depuis compte
// debiter(1000); = fonction depuis compte
// virementVers(300); = fonction depuis compte



// Affichage
$t1->AfficherInfos();
$t2->AfficherInfos();
$t2->CrediterCompte();

// $c1->afficherInfos();
// $c2->afficherInfos();
// $c3->afficherInfos();

//gestion de la session
// session_start();
// include("Compte.php");
// include("Titulaire.php");


