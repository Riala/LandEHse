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
	$commande[0][0] = 0;
	$commande[0][1] = 0;
	$commande[0][2] = 2;
	$commande[0][3] = 1;
	$commande[1][0] = 25;
	$commande[1][1] = 0;
	$commande[1][2] = 25;
	$commande[1][3] = 0;
	$commande[2][0] = 0;
	$commande[2][1] = 0;
	$commande[2][2] = 2;
	$commande[2][3] = 4;
	$commande[3][0] = 3;
	$commande[3][1] = 4;
	$commande[3][2] = 5;
	$commande[3][3] = 10;
	$commande[4][0] = 2;
	$commande[4][1] = 0;
	$commande[4][2] = 10;
	$commande[4][3] = 0;
	$commande[5][0] = 0;
	$commande[5][1] = 5;
	$commande[5][2] = 0;
	$commande[5][3] = 0;
	$commande[6][0] = 3;
	$commande[6][1] = 2;
	$commande[6][2] = 10;
	$commande[6][3] = 5;
	$commande[7][0] = 0;
	$commande[7][1] = 0;
	$commande[7][2] = 4;
	$commande[7][3] = 2;
	$commande[8][0] = 0;
	$commande[8][1] = 0;
	$commande[8][2] = 5;
	$commande[8][3] = 5;


    //Tableaux à deux dimensions de float contenant le prix de chaque plat et portion
	$prix[0][0]=0;
	$prix[0][1]=10;
	$prix[0][2]=19;
	$prix[0][3]=37;
	$prix[1][0]=3;
	$prix[1][1]=5;
	$prix[1][2]=9;
	$prix[1][3]=17;
	$prix[2][0]=0;
	$prix[2][1]=0;
	$prix[2][2]=14;
	$prix[2][3]=23;
	$prix[3][0]=5;
	$prix[3][1]=9;
	$prix[3][2]=17;
	$prix[3][3]=33;
	$prix[4][0]=6;
	$prix[4][1]=11;
	$prix[4][2]=21;
	$prix[4][3]=41;
	$prix[5][0]=7;
	$prix[5][1]=13;
	$prix[5][2]=0;
	$prix[5][3]=0;
	$prix[6][0]=3.5;
	$prix[6][1]=6;
	$prix[6][2]=11;
	$prix[6][3]=21;
	$prix[7][0]=0;
	$prix[7][1]=0;
	$prix[7][2]=6;
	$prix[7][3]=11;
	$prix[8][0]=0;
	$prix[8][1]=0;
	$prix[8][2]=11.5;
	$prix[8][3]=22;
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
    $prixTotalCommande = 0;

    //Tableaux à deux dimensions d'entiers contenant la quantité commandée par plat et par portion
   	$commande[0][0] = 0;
	$commande[0][1] = 0;
	$commande[0][2] = 1;
	$commande[0][3] = 2;
	$commande[1][0] = 25;
	$commande[1][1] = 0;
	$commande[1][2] = 25;
	$commande[1][3] = 0;
	$commande[2][0] = 0;
	$commande[2][1] = 0;
	$commande[2][2] = 2;
	$commande[2][3] = 4;
	$commande[3][0] = 3;
	$commande[3][1] = 4;
	$commande[3][2] = 5;
	$commande[3][3] = 10;
	$commande[4][0] = 2;
	$commande[4][1] = 0;
	$commande[4][2] = 10;
	$commande[4][3] = 0;
	$commande[5][0] = 0;
	$commande[5][1] = 5;
	$commande[5][2] = 0;
	$commande[5][3] = 0;
	$commande[6][0] = 3;
	$commande[6][1] = 2;
	$commande[6][2] = 10;
	$commande[6][3] = 5;
	$commande[7][0] = 0;
	$commande[7][1] = 0;
	$commande[7][2] = 4;
	$commande[7][3] = 2;
	$commande[8][0] = 0;
	$commande[8][1] = 0;
	$commande[8][2] = 5;
	$commande[8][3] = 5;


    //Tableaux à deux dimensions de float contenant le prix de chaque plat et portion
	$prix[0][0]=0;
	$prix[0][1]=10;
	$prix[0][2]=19;
	$prix[0][3]=37;
	$prix[1][0]=3;
	$prix[1][1]=5;
	$prix[1][2]=9;
	$prix[1][3]=17;
	$prix[2][0]=0;
	$prix[2][1]=0;
	$prix[2][2]=14;
	$prix[2][3]=23;
	$prix[3][0]=5;
	$prix[3][1]=9;
	$prix[3][2]=17;
	$prix[3][3]=33;
	$prix[4][0]=6;
	$prix[4][1]=11;
	$prix[4][2]=21;
	$prix[4][3]=41;
	$prix[5][0]=7;
	$prix[5][1]=13;
	$prix[5][2]=0;
	$prix[5][3]=0;
	$prix[6][0]=3.5;
	$prix[6][1]=6;
	$prix[6][2]=11;
	$prix[6][3]=21;
	$prix[7][0]=0;
	$prix[7][1]=0;
	$prix[7][2]=6;
	$prix[7][3]=11;
	$prix[8][0]=0;
	$prix[8][1]=0;
	$prix[8][2]=11.5;
	$prix[8][3]=22;



    //On calcule le prix d'une facture
	//On parcourt chaque ligne
for ($i = 0; $i <= 8; $i++)
{
	for ($j = 0; $j <=3; $j++){
	$prixproduit=$commande[$i][$j]*$prix[$i][$j];
	$PrixTotalProduit[$i][$j]=$prixproduit;

	}
}

for ($i = 0; $i <= 8; $i++)
{
	for ($j = 0; $j <=3; $j++){
	$prixTotalCommande=$prixTotalCommande+$PrixTotalProduit[$i][$j];

	}
}

    //On affiche le prix total
	echo "Prix total : " . $prixTotalCommande;
}

function platscuisines_V03(){
    /* Programme servant au calcul de la tendance en fonction des critères utilisateur
     * Auteurs : Jean AGUIRRE et Maialen TEILLERY
     * Date : 24/10/2018
     * Tendance : pas encore calculée
     */

    // Déclaration et initialisation des variables

    //Entier de récupération du numéro de commande
    $numCommande = $_POST['numCommande'];
    echo $numCommande;
    // Float contenant le prix total de la commande
    $prixTotalCommande = 0;

    //On calcule le prix d'une
    //On parcourt chaque ligne
    // for ($i = 0; $i <= 8; $i++)
    // {
    // 	for ($j = 0; $j <=3; $j++){
    // 	$prixproduit=$commande[$i][$j]*$prix[$i][$j];
    // 	$PrixTotalProduit[$i][$j]=$prixproduit;
    //
    // 	}
    // }
    //
    // for ($i = 0; $i <= 8; $i++)
    // {
    // 	for ($j = 0; $j <=3; $j++){
    // 	$prixTotalCommande=$prixTotalCommande+$PrixTotalProduit[$i][$j];
    //
    // 	}
    // }
    //On affiche le prix total
    //echo "Prix total : " . $prixTotalCommande;
}
