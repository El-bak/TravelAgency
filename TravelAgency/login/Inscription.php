<?php require("Database.php");

ini_set('display_errors',1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$Erreur_tableau=array(); //un tableau qui contiendra les erreurs

function name () {
  global $Erreur_tableau ; // en mettant global, on utilise la var Erreur-tableau pour l'utiliser dans le local
 if (!isset($_POST['nom'])){ // pour verifier que le nom existe
  $Erreur_tableau['error_pas_de_nom']= 'Veuillez saisir un nom';  //le nom n'existe pas
  return false ; //c'est pour returner
  }
  else if($_POST['nom']==''){
   $Erreur_tableau['error_aucun_resultat']= 'Veuillez saisir un nom'; //le tableau existe mais il est vide
    return false ;
  }
 else {
  if (preg_match("%[^A-Za-z]%", $_POST['nom'])){
    $Erreur_tableau['error_aucune_lettre']= 'Votre nom ne doit contenir que des lettres';
    return false ;
  }
 }
 return true ;
}

function firstname () {
 global $Erreur_tableau ;
if (!isset($_POST['prenom'])){
  $Erreur_tableau['error_pas_de_prenom']= 'Veullez saisir un prenom';
  return false ;
 }
 else if($_POST['prenom']==''){
  $Erreur_tableau['error_aucun_resultat']= 'Veuillez saisir un prenom';
  return false ;
 }
 else {
  if (preg_match("%[^A-Za-z]%", $_POST['prenom'])){ //preg_match ("")
    $Erreur_tableau['error_aucune_lettre']= 'Votre prenom ne doit contenir que des lettres';
    return false ;
  }
 }
 return true ;
}

function email () {
 global $Erreur_tableau ;
if (!isset($_POST['email'])){
  $Erreur_tableau['error_pas_d_email']= 'Veullez saisir une adresse email';
  return false ;
 }
 else if($_POST['email']==''){
  $Erreur_tableau['error_aucun_resultat']= 'Veuillez saisir une adresse email';
  return false ;
 }
 else {
  if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){ 
    $Erreur_tableau['error_email_invalide']= 'L\'adresse email est invalide';
    return false ;
  }
 }
 return true ;
}


function nom_dutilisateur () {
  global $Erreur_tableau ;
if (!isset($_POST['nickname'])){
  $Erreur_tableau['error_pas_de_nickname']= 'Veuillez saisir un nickname';
  return false ;
 }
 else if($_POST['nickname']==''){
  $Erreur_tableau['error_aucun_resultat']= 'Veuillez saisir un nickname';
  return false ;
 }
 else {
  return $_POST['nickname'];
 }
} 

function address() {
global $Erreur_tableau ;
if (!isset($_POST['adresse'])){
$Erreur_tableau['error_pas_d_adresse']= 'Veuillez saisir une adresse';
return false ;
}
else if($_POST['adresse']==''){
$Erreur_tableau['error_aucun_resultat']= 'Veuillez saisir une adresse';
return false ;
}
return true ;
}

function telephone() {
global $Erreur_tableau ;
if (!isset($_POST['Num_Tel'])){
$Erreur_tableau['error_pas_de_telephone']= 'Veullez saisir un numéro de téléphone';
return false ;
}
else if($_POST['Num_Tel']==''){
$Erreur_tableau['error_aucun_resultat']= 'Veuillez saisir un numéro de téléphone';
return false ;
}
else {
if (!preg_match("/^[0-9]*$/", $_POST['Num_Tel'])) { //preg_match pour n'autoriser que les caractères numériques
$Erreur_tableau['error_format_telephone']= 'Votre numéro de téléphone ne doit contenir que des chiffres';
return false ;
}
}
return true ;
}

function Nido ($Connection) {  //création d'une fonction qui verifie si l'utilisateur existe
  global $Erreur_tableau ;
   $requete='SELECT * FROM users WHERE nickname =" ' . mysqli_real_escape_string($Connection, $_POST['nickname']) . '";'; // en cas ou un mauvais code (injection) a été mis, celui ne sera pas prise en compte.
   $resultat= mysqli_query($Connection, $requete);
   while ($_r= mysqli_fetch_array($resultat)) {  //$_r = requete pour recuper les resultats
     if($_POST['nickname']==$_r['nickname']){
     return true ;
     }
   } 
   $Erreur_tableau ["erro_gnedzigni"]= 'le nom d\'utilisateur existe déjà';
   return false ;
 }

  function verificationDate() {
    global $Erreur_tableau;
    if (!isset($_POST['date'])) {
        $Erreur_tableau['error_noDate'] = "Veuillez saisir une date de naissance."; 
        return false;
    } else if (!preg_match('/^\d{4}-\d{2}-\d{2}$/', $_POST['date'])) {
        $Erreur_tableau['error_mauvaisFormatDate'] = "Mauvais format de la date"; 
        return false;
    } else if (!strtotime($_POST['date'])) {
        $Erreur_tableau['error_mauvaisFormatDate'] = "Mauvais format de la date"; 
        return false;
    }
    return true;
}


function bonFormatDate($date) { //Fonction qui vérifie le format de la date
    $nbTiret = 0;
    foreach(range(0, strlen($date)-1) as $i) {
        if ($date[$i] == "-") $nbTiret++;
    }
    return ($nbTiret === 2);
}
  
if(isset($_POST['nom'], $_POST['prenom'], $_POST['nickname'], $_POST['email'], $_POST['Adresse'], $_POST['Num_Tel'], $_POST['mot_de_passe'], $_POST['date_de_naissance'])) {
$q = $db->prepare("INSERT INTO client(nom, prenom, nickname, email, Adresse, Num_Tel, mot_de_passe, date_de_naissance) VALUES(:nom,:prenom,:nickname,:email,:Adresse,:Num_Tel,:mot_de_passe,:date_de_naissance)");
$q->execute([
    'nom' =>$_POST['nom'],
    'prenom' =>$_POST['prenom'],
    'nickname' =>$_POST['nickname'],
    'email' =>$_POST['email'],
    'Adresse' =>$_POST['Adresse'],
    'Num_Tel' =>$_POST['Num_Tel'],
    'mot_de_passe' =>$_POST['mot_de_passe'],                            /*password_hash($_POST['mot_de_passe'],PASSWORD_BCRYPT,["cost" => 14]),*/
    'date_de_naissance' =>$_POST['date_de_naissance']
]);
}
        /*header('Location:http://localhost:8080/Travelagency/index.php');
        exit();*/
  




?>
<!DOCTYPE.HTML>
<html> 
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="Style.css">
  <title>Travel Agency</title>
</head>
<body style="background-color: lightblue">
	<!--Partie Header-->
<header> <!--frere de div--> 
<h1 class="color">Travel Agency<span class="Orange">.</span></h1>
   <nav>
      <ul>
            <li><a href="http://localhost:8080/Travelagency/#">Acceuil</a></li>
            <li><a href="http://localhost:8080/Travelagency/steps.php">Destination</a></li>
          <li><a href="http://localhost:8080/Travelagency/possibilities.php">Circuits</a></li>
            <li><a href="http://localhost:8080/Travelagency/contact.php">Contact</a></li>
          <li><a  href="http://localhost:8080/Travelagency/#">se connecter</a></li> <!--lien pour la page se connecter--> <!--login = c'est une page entiere--><!--# sa renvoie vers la mm page-->
      </ul>
    </nav>
</header>
<div style="display: flex; flex-direction: row; justify-content: center; background-color: beige"> <!--row = pour faire une ligne--> <!-- justify-center = pour centrer-->
    <div class="login-div" style="width: 400px; height: auto; border: 1px black solid; display: flex; flex-direction: column; justify-content: space-around;" > <!--crée la  ligne noire--> <!-- justify-content : space-around
  = espace les bords, les divisions,...-->
     <h1 style="font: 30px 'Arial', sans-serif; font-weight: bold; text-align: center; margin-bottom: 20px;">Inscription</h1>
       <div style="display: flex; flex-direction: row; justify-content: center;">
         <form method="post" action="#" style="margin: 0px 0 20px 0; padding: 0 30px;display: flex; flex-direction: column; ">   <!--formulaire (post/get = pour créer des comptes) (action = c'est la traitement vers une page-->
       <label for="nom">Nom </label> <!---->
         <input style="height: 30px; width:220px;" type="text" name="nom" required> <!--c'est la boite qui contiendra le nom de l'utilisateur-->
         <br>
         <label for="prenom">Prénom</label> <!---->
         <input style="height: 30px; width:220px;" type="text" name="prenom" required> <!--c'est la boite qui contiendra le nom de l'utilisateur-->
         <br>
         <label for="nickname">Nom d'utilisateur</label> <!---->

         <input style="height: 30px; width:220px;" type="text" name="nickname" required /> <!--c'est la boite qui contiendra le nom de l'utilisateur-->
         
         <br>
         <label for="email">Votre email</label> <!---->
         <input style="height: 30px; width:220px;" type="text" name="email" required>
         <br>

         <label for="date">Date de naissance</label> <!---->
         <input style="height: 30px; width:220px;" type="date" name="date_de_naissance" id="date_de_naissance" required> <!--c'est la boite qui contiendra le nom de l'utilisateur-->
         <br>
         <label for="Adresse">Votre adresse</label> <!---->
         <input style="height: 30px; width:220px;" type="text" name="Adresse" required>
         <br>
         <br>
         <label for="Num_Tel">Votre Télephone</label> <!---->
         <input style="height: 30px; width:220px;" type="tel" name="Num_Tel" required>
           
           <label for="sexe">Genre</label>
          <div> 

              <label for="Homme"> Homme
              <input type="radio" id="Homme" name="sexe" value="homme">
            </label>
              <label for="Femme"> Femme
              <input type="radio" id="Femme" name="sexe" value="femme">
            </label>
            </div>
            <br>

            <br>

        <label for="passeword"> Mots de passe</label> <!--en mettant label avant input permet de faire apparaitre le nom--> 
         <input style="height: 30px; width:220px;" type="password" name="mot_de_passe" id="mot_de_passe" minlength="8" required>
              
              <br>

              <label for="Cpasseword">Confirmation du mots de passe</label> <!--en mettant label avant input permet de faire apparaitre le nom--> 
         <input style="height: 30px; width:220px;" type="password" name="Cpasseword" minlength="8" required>

        <button style="margin: 20px 40% 0 40% ">OK</button> 
          <div> <!--pour empecher les arrengement des anciens divs-->
            <input type="checkbox" name="Chigou">
           <label for="Chigou"> Garder ma putain de session active </label>
          </div>
      </form> 
       </div>
       <li><a href="index.php">Retour</a></li>
    </div>
  </div>

</body>
</html>
 <?php 
      if(isset($_POST['formsend'])){
        
      }
?>
