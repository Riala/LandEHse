<?php
function platscuisines_V00(){
    /* Programme servant au calcul de la tendance en fonction des critères utilisateur
     * Auteurs : Jean AGUIRRE et Maialen TEILLERY
     * Date : 24/10/2018
     * Tendance : pas encore calculée
     */
    // Déclaration des variables
    //On calcule le prix d'une facture

}

function platscuisines_V01(){
    /* Programme servant au calcul de la tendance en fonction des critères utilisateur
     * Auteurs : Jean AGUIRRE et Maialen TEILLERY
     * Date : 24/10/2018
     * Tendance : pas encore calculée
     */

    // Déclaration et initialisation des variables
    // Float contenant le prix total de la commande
    $prixTotal = 0;

    //Tableaux à deux dimensions d'entiers contenant la quantité commandée par plat et par portion
    $commande = array("Chipirons"=>array(2=>0, 4=>1, 8=>2),
                      "Axoa"=>array(1=>25, 2=> 0, 4=>25, 8=>0),
                      "GateauB"=>array(4 => 2, 8 => 4),
                      "PotAuFeu"=>array(1 => 3, 2 => 4, 4 => 5, 8 => 10),
                      "BoeufBourguignon"=>array(1 => 2, 2 => 0, 4 => 10, 8 => 0),
                      "EscargotsAilPersil"=>array(1 => 0, 2 => 5),
                      "AssietteLandaise"=>array(1 => 3, 2 => 2, 4 => 10, 8 => 5),
                      "Tourtiere"=>array(4 => 4, 8 => 2),
                      "Pastis"=>array(4 => 5, 8 => 5));
    //Tableaux à deux dimensions de float contenant le prix de chaque plat et portion
    $prix = array("Chipirons"=>array(2=>10, 4=>19, 8=>37),
                  "Axoa"=>array(1=>3, 2=> 5, 4=>9, 8=>17),
                  "GateauB"=>array(4 => 14, 8 => 23),
                  "PotAuFeu"=>array(1 =>5, 2 => 9, 4 => 17, 8 => 33),
                  "BoeufBourguignon"=>array(1 => 6, 2 => 11, 4 => 21, 8 => 41),
                  "EscargotsAilPersil"=>array(1 => 7, 2 => 13),
                  "AssietteLandaise"=>array(1 => 3.5, 2 => 6, 4 => 11, 8 => 21),
                  "Tourtiere"=>array(4 => 6, 8 => 11),
                  "Pastis"=>array(4 => 11.5, 8 => 22));
                  
    //On calcule le prix d'une facture

}

function platscuisines_V02(){
    /* Programme servant au calcul de la tendance en fonction des critères utilisateur
     * Auteurs : Jean AGUIRRE et Maialen TEILLERY
     * Date : 24/10/2018
     * Tendance : pas encore calculée
     */

    // Déclaration et initialisation des variables
    // Float contenant le prix total de la commande
    $prixTotal = 0;

    //Tableaux à deux dimensions d'entiers contenant la quantité commandée par plat et par portion
    $commande = array("Chipirons"=>array(2=>0, 4=>1, 8=>2),
                      "Axoa"=>array(1=>25, 2=> 0, 4=>25, 8=>0),
                      "GateauB"=>array(4 => 2, 8 => 4),
                      "PotAuFeu"=>array(1 => 3, 2 => 4, 4 => 5, 8 => 10),
                      "BoeufBourguignon"=>array(1 => 2, 2 => 0, 4 => 10, 8 => 0),
                      "EscargotsAilPersil"=>array(1 => 0, 2 => 5),
                      "AssietteLandaise"=>array(1 => 3, 2 => 2, 4 => 10, 8 => 5),
                      "Tourtiere"=>array(4 => 4, 8 => 2),
                      "Pastis"=>array(4 => 5, 8 => 5));
    //Tableaux à deux dimensions de float contenant le prix de chaque plat et portion
    $prix = array("Chipirons"=>array(2=>10, 4=>19, 8=>37),
                  "Axoa"=>array(1=>3, 2=> 5, 4=>9, 8=>17),
                  "GateauB"=>array(4 => 14, 8 => 23),
                  "PotAuFeu"=>array(1 =>5, 2 => 9, 4 => 17, 8 => 33),
                  "BoeufBourguignon"=>array(1 => 6, 2 => 11, 4 => 21, 8 => 41),
                  "EscargotsAilPersil"=>array(1 => 7, 2 => 13),
                  "AssietteLandaise"=>array(1 => 3.5, 2 => 6, 4 => 11, 8 => 21),
                  "Tourtiere"=>array(4 => 6, 8 => 11),
                  "Pastis"=>array(4 => 11.5, 8 => 22));

    //On calcule le prix d'une facture
    foreach($commande as $plat=>$une_commande){
        foreach($commande[$plat] as $qte => $qte_prix){
           $prixTotal += $commande[$plat][$qte] * $prix[$plat][$qte];
        }
    }

    echo "Prix total : " . $prixTotal;
}

function platscuisines_V03(){
    /* Programme servant au calcul de la tendance en fonction des critères utilisateur
     * Auteurs : Jean AGUIRRE et Maialen TEILLERY
     * Date : 24/10/2018
     * Tendance : pas encore calculée
     */

    // Déclaration et initialisation des variables
    // Float contenant le prix total de la commande
    $prixTotal = 0;

    //Tableaux à deux dimensions d'entiers contenant la quantité commandée par plat et par portion
    $commande = array("Chipirons"=>array(2=>0, 4=>1, 8=>2),
                      "Axoa"=>array(1=>25, 2=> 0, 4=>25, 8=>0),
                      "GateauB"=>array(4 => 2, 8 => 4),
                      "PotAuFeu"=>array(1 => 3, 2 => 4, 4 => 5, 8 => 10),
                      "BoeufBourguignon"=>array(1 => 2, 2 => 0, 4 => 10, 8 => 0),
                      "EscargotsAilPersil"=>array(1 => 0, 2 => 5),
                      "AssietteLandaise"=>array(1 => 3, 2 => 2, 4 => 10, 8 => 5),
                      "Tourtiere"=>array(4 => 4, 8 => 2),
                      "Pastis"=>array(4 => 5, 8 => 5));
    //Tableaux à deux dimensions de float contenant le prix de chaque plat et portion
    $prix = array("Chipirons"=>array(2=>10, 4=>19, 8=>37),
                  "Axoa"=>array(1=>3, 2=> 5, 4=>9, 8=>17),
                  "GateauB"=>array(4 => 14, 8 => 23),
                  "PotAuFeu"=>array(1 =>5, 2 => 9, 4 => 17, 8 => 33),
                  "BoeufBourguignon"=>array(1 => 6, 2 => 11, 4 => 21, 8 => 41),
                  "EscargotsAilPersil"=>array(1 => 7, 2 => 13),
                  "AssietteLandaise"=>array(1 => 3.5, 2 => 6, 4 => 11, 8 => 21),
                  "Tourtiere"=>array(4 => 6, 8 => 11),
                  "Pastis"=>array(4 => 11.5, 8 => 22));

    //On calcule le prix d'une facture
    foreach($commande as $plat=>$une_commande){
        foreach($commande[$plat] as $qte => $qte_prix){
           $prixTotal += $commande[$plat][$qte] * $prix[$plat][$qte];
        }
    }

    echo "Prix total : " . $prixTotal;
}

//Ceci est un commentaire ajouté par le contributeur Jean AGUIRRE
