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
  /* Programme servant au calcul de la tendance en fonction des critères utilisateur avec connexion à la base de données
   * Auteurs : Jean AGUIRRE et Maialen TEILLERY
   * Date : 13/11/2018
   * Total commande = 1717
   */

/********* Déclaration et initialisation des variables **********/
//Entier de récupération du numéro de commande
$numCommande = 1;
// Float contenant le prix total de la commande
$prixTotalCommande = 0;
//String contenant le nom de l'host
$host = 'localhost';
//String contenant le nom de l'utilisateur
$user = 'root';
//String contenant le mot de passe utilisateur
$pass = 'root';
//String contenant le nom de la base de données utilisée
$bd = 'bd_cdpplatscuisines';
//Entier contenant le nombre de plat dans la commande
$n=0 ;
//String conatenant la requête de la commande
$req_commande = "";
//String contenant le prix de chaque plat
$req_prix = "";
//$resultat_commande : objet contenant le résultat de la commande
//$resultat_prix : objet contenant tous les prix
//$res_commande : objet contenant une ligne de $resultat_commande
//$res_prix : objet contenant une ligne de $resultat_prix

/********************* Début des traitements *********************/
try {
  //Connexion à la base de données
  $connexion = mysqli_connect($host, $bd, $user, $pass);
}	catch (mysqli_sql_exception  $e) {
  //Dès qu'il y a une erreur on affiche le message d'erreur et on arrête le programme
  print "Error!: " . $e->getMessage() . "<br/>";
  die();
}
  //Initialisation des requêtes
  $req_commande="SELECT * FROM commande WHERE id=$numCommande";
  $req_prix="SELECT * FROM prix Where id=1";

  //Interrogation de la base de données
  $resultat_commande = mysqli_query($connexion, $req_commande);
  $resultat_prix = mysqli_query($connexion, $req_prix);

  //On compte le nombre de plats dans la commande
  $n=mysqli_field_count ($resultat_commande);

  //On récupère la première ligne des requêtes
  $res_commande = mysqli_fetch_assoc($resultat_commande);
  // résultat attendu : 0 0 1 2 25 0 25 0 0 0 2 4 3 4 5 10 2 0 10 0 0 5 0 0 3 2 10 5 0 0 4 2 0 0 5 5
  $res_prix = mysqli_fetch_assoc($resultat_prix);
  // résultat attendu : 0 10 19 37 3 5 9 17 0 0 14 23 5 9 17 33 6 11 21 41 7 13 0 0 3.5 6 11 21 0 0 6 11 0 0 12 22
  //On calcule le total de la commande
  for ($i = 1; $i < $n; $i++){
    $prixTotalCommande = $prixTotalCommande + ($res_prix[$i]*$res_commande[$i]);
    // résultat attendu : 0 + 0 + 19 + 74 + 75 + 0 + 225 + 0 + 0 + 0 + 28 + 92 + 15 + 36 + 85 + 330 + 12 + 0 + 210 + 0 + 0 + 65 + 0 + 0 + 10.5 + 12 + 110 + 105 + 0 + 0 + 24 + 22 + 0 + 0 + 57.5 + 110
    // total : 1717
  }
  //On ferme la conexion à la base de données
  $connexion = null;
  //On affiche le total de la commande
  echo "Total de la commande $numCommande : $prixTotalCommande";
}
function platscuisines_V04(){
    /* Programme servant au calcul de la tendance en fonction des critères utilisateur avec connexion à la base de données
     * Auteurs : Jean AGUIRRE et Maialen TEILLERY
     * Date : 13/11/2018
     * Total commande = 1717
     */

  /********* Déclaration et initialisation des variables **********/
  //Entier de récupération du numéro de commande
  $numCommande = $_POST['numCommande'];
  // Float contenant le prix total de la commande
  $prixTotalCommande = 0;
  //String contenant le nom de l'host
  $host = 'localhost';
	//String contenant le nom de l'utilisateur
	$user = 'root';
	//String contenant le mot de passe utilisateur
	$pass = 'root';
	//String contenant le nom de la base de données utilisée
	$bd = 'bd_cdpplatscuisines';
  //Entier contenant le nombre de plat dans la commande
  $n=0 ;
  //String conatenant la requête de la commande
  $req_commande = "";
  //String contenant le prix de chaque plat
  $req_prix = "";
  //$resultat_commande : objet contenant le résultat de la commande
  //$resultat_prix : objet contenant tous les prix
  //$res_commande : objet contenant une ligne de $resultat_commande
  //$res_prix : objet contenant une ligne de $resultat_prix

  /********************* Début des traitements *********************/
	try {
    //Connexion à la base de données
		$connexion = mysqli_connect($host, $user, $pass, $bd);
  }	catch (mysqli_sql_exception  $e) {
    //Dès qu'il y a une erreur on affiche le message d'erreur et on arrête le programme
    print "Error!: " . $e->getMessage() . "<br/>";
		die();
	}
    //Initialisation des requêtes
		$req_commande="SELECT * FROM commande WHERE id=$numCommande";
		$req_prix="SELECT * FROM prix Where id=1";

    //Interrogation de la base de données
		$resultat_commande = mysqli_query($connexion, $req_commande);
    $resultat_prix = mysqli_query($connexion, $req_prix);

    //On compte le nombre de plats dans la commande
		$n=mysqli_num_fields ($resultat_commande);

    //On récupère la première ligne des requêtes
    $res_commande = mysqli_fetch_array($resultat_commande);
    $res_prix = mysqli_fetch_array($resultat_prix);

    //On calcule le total de la commande
    for ($i = 1; $i < $n; $i++){
      $prixTotalCommande = $prixTotalCommande + ($res_prix[$i]*$res_commande[$i]);
    }
    //On ferme la conexion à la base de données
    $connexion = null;
    //On affiche le total de la commande
    echo "Total de la commande $numCommande : $prixTotalCommande";
}
