<?php
$db_name = "myoo_agency";
$db_user = "root";
$db_pass = "";

// Connexion à la base de données
try {
  $pdo = new PDO("mysql:host=localhost;dbname=$db_name", $db_user, $db_pass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection > OK !";
} catch(PDOException $e) {
  die("Erreur : " . $e->getMessage());
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $client_id = $_POST['client_id'];
  $note = $_POST['note'];
  $commentaire = $_POST['commentaire'];
     

     
  try {
    $stmt = $pdo->prepare("INSERT INTO statistique_client (  commentaire, note, client_id) VALUES ( :commentaire, :note, :client_id)");
    $stmt->bindParam(':commentaire', $commentaire);
    $stmt->bindParam(':note', $note);
    $stmt->bindParam(':client_id', $client_id);
    $stmt->execute();
    echo "Data inserted successfully!";
  } catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
    die();
  }
}

// Fermeture de la connexion à la base de données
$pdo = null; 
?>

<!DOCTYPE.HTML>
<html>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="Style.css">
<title>Statistiques clients</title>
    <style>
      /* Style pour le formulaire */
      form {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 20px;
      }
      input[type="text"], input[type="number"] {
        margin-bottom: 10px;
        padding: 5px;
        border-radius: 5px;
        border: 1px solid gray;
      }
      input[type="submit"] {
        background-color: blue;
        color: white;
        padding: 10px;
        border-radius: 5px;
        border: none;
        cursor: pointer;
      }
      /* Style pour les statistiques */
      table {
        border-collapse: collapse;
        margin: 20px;
      }
      th, td {
        border: 1px solid black;
        padding: 5px;
      }
      th {
        background-color: gray;
        color: white;
      }
    </style>
  </head>
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
      </ul>
  </nav>
</header> 
<!-- Formulaire pour saisir de nouvelles données -->
	<form action="Statistique_client.php" method="POST">
		<label for="client_id">Identifiant du client :</label>
		<input type="number" name="client_id" required>

		<label for="note">Note :</label>
		<input type="number" name="note" required>

		<label for="commentaire">Commentaire :</label>
		<textarea name="commentaire"></textarea>

		<input type="submit" value="Enregistrer">
	</form>
    
    </body>
    </html>