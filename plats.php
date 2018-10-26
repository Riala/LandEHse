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

    // Déclaration des variables

    $commande = array("Chipirons"=>array(2=>0,
                                        4=>1,
                                        8=>2)),
                array("Axoa"=>array(1=>25,
                                    2=> 0,
                                    3=>25,
                                    4=>0)),
                array("GateauB"=>array(4 => 2,
                                      8 => 4)),
                array("PotAuFeu"=>array(1 => 3,
                                      2 => 4,
                                      4 => 5,
                                      8 => 10)),
                array("BoeufBourguignon"=>array(1 => 2,
                                  2 => 0,
                                  4 => 10,
                                  8 => 0)),
                array("EscargotsAilPersil"=>array(1 => 0,
                                      2 => 5)),
                array("AssietteLandaise"=>array(1 => 3,
                                      2 => 2,
                                      4 => 10,
                                      8 => 5)),
                array("Tourtiere"=>array(4 => 4,
                                      8 => 2)),
                array("Pastis"=>array(4 => 5,
                                      8 => 5)));

    $prix = array("Chipirons"=>array(2=>10,
                                     4=>19,
                                     8=>37)),
                array("Axoa"=>array(1=>3,
                                    2=> 5,
                                    3=>9,
                                    4=>17)),
                array("GateauB"=>array(4 => 14,
                                      8 => 23)),
                array("PotAuFeu"=>array(1 =>5,
                                      2 => 9,
                                      4 => 17,
                                      8 => 33)),
                array("BoeufBourguignon"=>array(1 => 6,
                                  2 => 11,
                                  4 => 21,
                                  8 => 41)),
                array("EscargotsAilPersil"=>array(1 => 7,
                                      2 => 13)),
                array("AssietteLandaise"=>array(1 => 3.5,
                                      2 => 6,
                                      4 => 11,
                                      8 => 21)),
                array("Tourtiere"=>array(4 => 6,
                                      8 => 11)),
                array("Pastis"=>array(4 => 11.5,
                                      8 => 22)));
    echo "Chipirons : " . $commande["Chipirons"][4] . " prix " . $prix["Chipirons"][4];

    //On calcule le prix d'une facture

}
