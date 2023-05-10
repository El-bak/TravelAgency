<?php require("login/Database.php");
?>
<!DOCTYPE.HTML>
<HTML>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="Style.css">
      <title>Travel Agency</title>
<h1 class="color" style=" float: left; margin-top: 32px;">Réservation</h1>
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
            <br>
            <br>
<<form action="réservation.php" method="post">
  <label for="destination">Destination:</label>
  <select name="destination" id="destination">
    <?php
      $destinations = array(
        1 => 'Paris',
        2 => 'New York',
        3 => 'Tokyo'
      );
      foreach ($destinations as $id => $destination) {
        echo '<option value="' . $id . '">' . $destination . '</option>';
      }
    ?>
  </select><br><br>

  <label for="date">Date de réservation:</label>
  <input type="date" name="date" id="date"><br><br>

  <label for="passagers">Nombre de passagers:</label>
  <input type="number" name="passagers" id="passagers" min="1"><br><br>

  <label for="prix">Prix:</label>
  <input type="number" name="prix" id="prix" min="0" step="0.01"><br><br>

  <input type="submit" value="Réserver">
</form>


    <style>
    form {
      max-width: 500px;
      margin: 0 auto;
      padding: 20px;
      background-color: #F5F5DC;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.3);
    }

    h1 {
      text-align: center;
      margin-bottom: 20px;
    }

    label {
      display: block;
      margin-bottom: 10px;
    }

    input[type="submit"] {
      background-color: #4CAF50;
      color: #fff;
      padding: 10px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }

    input[type="submit"]:hover {
      background-color: #3e8e41;
    }
  </style>
  </form>
          <!--lien pour la page se connecter--> <!--login = c'est une page entiere--><!--# sa renvoie vers la mm page-->
      </ul>
    </nav>
</header> 


</body>
</HTML>