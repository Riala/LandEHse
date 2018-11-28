<?php
function previsionCoutsPlats_V00(){
    /* Programme servant au calcul de la tendance en fonction des critères utilisateur avec connexion à la base de données
     * Auteurs : Jean AGUIRRE et Maialen TEILLERY
     * Date : 13/11/2018
     * Total commande = 1717
     */
   }
function previsionCoutsPlats_V01(){
     /* Programme servant au calcul de la tendance en fonction des critères utilisateur avec connexion à la base de données
      * Auteurs : Jean AGUIRRE et Maialen TEILLERY
      * Date : 13/11/2018
      * Total commande = 1717
      */
  /********* Déclaration et initialisation des variables **********/
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
  $portion = array(1,2,4,8);
  $champsPlats = "";
  $champsCategories = "";
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
		$req_plat="SELECT nom FROM plat";

    //Interrogation de la base de données
		$resultat_plat = mysqli_query($connexion, $req_plat);
    $res_plat = mysqli_fetch_array($resultat_plat);
    //On récupère la première ligne des requêtes
    while ($res_plat = mysqli_fetch_assoc($resultat_plat)) {
      // var_dump($res_plat);
      for($i=0;$i<count($portion);$i++){
        $champsPlats = $champsPlats."nb".$res_plat["nom"]."pour$portion[$i], ";
        $champsCategories = $champsCategories."categ".$res_plat["nom"]."pour$portion[$i], ";
      }
    }
    $champsCateg = str_split($champsCategories, strlen($champsCategories) - 2);
    $champsCategories = $champsCateg[0];

    $champsplat = str_split($champsPlats, strlen($champsPlats) - 2);
    $champsPlats = $champsplat[0];

    $reqCommande = "SELECT $champsPlats FROM commande;";
    $reqCategorie = "SELECT $champsCategories FROM prix;";

    $resultat_commande = mysqli_query($connexion, $reqCommande);
    var_dump($resultat_commande);

    $resultatCateg = mysqli_query($connexion, $reqCategorie);
    var_dump($resultatCateg);

    
    //On ferme la conexion à la base de données
    $connexion = null;
}
