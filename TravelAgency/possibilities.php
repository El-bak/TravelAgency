<DOCTYPE.HTML>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="Style.css">
<h1 class="color">Circuit</h1>
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

</head>
<body style="background-color: lightblue"></body>

<header>
	<img src="Image/Carte_du_monde.jpg" style=" width:1050px; height: 630px; background-repeat: no-repeat; background-size: contain; background-position: center; ">
  <li><a href="index.html">Retour</a>
</header>
</html>
<br>
<br>
<table>
  <thead>
    <tr>
      <th>ID</th>
      <th>Nom</th>
      <th>Prix</th>
      <th>Date de départ</th>
      <th>Date d'arrivée</th>
      <th>Durée</th>
      <th>Description</th>
    </tr>
  </thead>
  <tbody>
    <?php
      try {
          $db = new PDO('mysql:host=localhost:3306;dbname=myoo_agency;charset=utf8', 'root', '');
          $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      // sélectionnez toutes les données de la table circuit
      $stmt = $db->prepare('SELECT * FROM circuit');
      $stmt->execute();
      $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

      // affichez les données dans un tableau HTML
      foreach ($result as $row) {
          echo '<tr>';
          echo '<td>' . $row['Id'] . '</td>';
          echo '<td>' . $row['Nom_Circuit'] . '</td>';
          echo '<td>' . $row['Prix_Circuit'] . '</td>';
          echo '<td>' . $row['Date_depart'] . '</td>';
          echo '<td>' . $row['Date_arrivee'] . '</td>';
          echo '<td>' . $row['Duree'] . '</td>';
          echo '<td>' . $row['Description'] . '</td>';
          echo '</tr>';
      }
  } catch (Exception $e) {
      die('Erreur : ' . $e->getMessage());
  }
?>
