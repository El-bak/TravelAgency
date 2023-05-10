<?php require("login/Database.php");?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="Style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<h1 class="color" style=" float: left; margin-top: 32px;">DESTINATION</h1>
<body style="background-color: lightblue">
		<header style="height: 120px;">
<nav style="float: right; margin-top: 50px;">
      <ul>
            <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/#">Acceuil</a></li>

            <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/steps.php">Destination</a></li>

          <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/possibilities.php">Circuits</a></li>

          <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/réservation.php">Reservation</a></li>

            <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/contact.php">Contact</a></li>

          <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/login/index.php">se connecter</a></li> 
          <!--lien pour la page se connecter--> <!--login = c'est une page entiere--><!--# sa renvoie vers la mm page-->
      </ul>
    </nav>
</header>
<div style="display: flex; flex-direction: row; justify-content: center;">
	<img src="Image/une-belle-destination-touristique-.jpg" style=" width:1650px; height: 630px;">
</div>
 
<?php 

  

// Récupération des destinations depuis la base de données
  $requete = $db->query('SELECT circuit.Id, circuit.Nom_Circuit, destination.Nom_Destination, circuit.Prix_Circuit, circuit.Date_depart, circuit.Date_arrivee, circuit.Duree, circuit.Description FROM `circuit`, `destination` WHERE circuit.Nom_Circuit = destination.PAYS_Destination LIMIT 0,25');
  $destinations = $requete->fetchAll(PDO::FETCH_ASSOC); 
  
  // Affichage des options de choix de destination
  if (count($destinations) > 0) {
    echo '<form action="#" method="POST">';
    echo '<label for="choix_destination">Choisissez une destination :</label>';
    echo '<select id="choix_destination" name="choix_destination">';
    foreach ($destinations as $destination) {
      echo '<option value="' . $destination['Id'] . '">' . $destination['Nom_Destination'] . '</option>';
    }
    echo '</select>';
    echo '<br>';
    echo '<input type="submit" value="Valider">';
    echo '</form>';
  } else {
    echo '<p>Aucune destination n\'est disponible pour l\'instant.</p>';
  }
  ?>
 <?php
if (isset($_POST['choix_destination'])) {
  // Récupération des données du son depuis la base de données
  $db = new PDO('mysql:host=localhost:3306;dbname=myoo_agency', 'root', '');
  $requete = $db->prepare('SELECT Nom_Destination FROM `circuit`, `destination`  WHERE Id = ?');
  $requete->execute(array($_POST['choix_destination']));
  $donnees_destination = $requete->fetchColumn();
  
} else {
  echo 'Aucune destination n\'a été sélectionné.';
}
?>

<div class="container">
  <div class="row">
    <div class="col-sm-3">
      <img src="Image/visiter-pyramides-gizeh-e1566310291106.jpg" height = "200" >
    </div>
    <div class="col-sm-9">
      <div class="row">
        <div class="col-8 col-sm-6">
          Level 2: .col-8 .col-sm-6
        </div>
        <div class="col-4 col-sm-6">
          Level 2: .col-4 .col-sm-6
        </div>
      </div>
    </div>
  </div>
</div>

<style> $grid-columns:      12;
$grid-gutter-width: 1.5rem;

$grid-breakpoints: (
  xs: 0,
  sm: 576px,
  md: 768px,
  lg: 992px,
  xl: 1200px,
  xxl: 1400px
);

$container-max-widths: (
  sm: 540px,
  md: 720px,
  lg: 960px,
  xl: 1140px,
  xxl: 1320px
); </style>

<li><a href="index.html">Retour</a></li>

</body>
</html>