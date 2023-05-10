<?php require("login/Database.php");?>


<DOCTYPE.HTML>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="stylesheet" type="text/css" href="Style.css">
</head>
<h1 class="color" style=" float: left; margin-top: 32px;">Contact</h1>
<body style="background-color: lightblue">	
	<header style="height: 120px;">
<nav style="float: right; margin-top: 50px;">
      <ul>
            <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/#">Acceuil</a></li>

            <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/steps.php">Destination</a></li>

          <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/possibilities.php">Circuits</a></li>

          <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/réservation.php">Reservation</a></li>

            <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="http://localhost:8080/Travelagency/contact.php">Contact</a></li>

          <li style="float: left; display: inline-block;"> <a style="text-transform: uppercase; font-weight: bold; margin-right: 20px;" href="#">se connecter</a></li> 
          <!--lien pour la page se connecter--> <!--login = c'est une page entiere--><!--# sa renvoie vers la mm page-->
      </ul>
    </nav>
    
</header>
<img src="Image/contact.jpg" style=" width:1050px; height: 630px; background-repeat: no-repeat; background-size: contain; background-position: center; ">
<h3>Etes-vous interessé par nos destination? Contactez nous,
 nous sommes à votre service 24h/24h  </h3>

  <?php 
if($_POST) {
    // récupération des données du formulaire
    $nom = $_POST['nom'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    
    // validation des données
    $erreurs = array();
    if(empty($nom)) {
        $erreurs[] = 'Le nom est requis.';
    }
    if(empty($email)) {
        $erreurs[] = 'L\'email est requis.';
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = 'L\'email est invalide.';
    }
    if(empty($message)) {
        $erreurs[] = 'Le message est requis.';
    }
    
    // envoi du message
    if(empty($erreurs)) {
        $to = 'votre_email@example.com'; // adresse email de réception
        $sujet = 'Nouveau message de ' . $nom;
        $contenu = "Nom: $nom\nEmail: $email\nMessage:\n$message";
        $headers = "From: $email\r\nReply-To: $email";
        mail($to, $sujet, $contenu, $headers);
        $confirmation = 'Votre message a été envoyé avec succès.';
    }
}
?>
<?php if(isset($confirmation)): ?>
    <p><?php echo $confirmation; ?></p>
    <?php else: ?>
    <?php if(isset($erreurs)): ?>
    <ul>
        <?php foreach($erreurs as $erreur): ?>
        <li><?php echo $erreur; ?></li>
        <?php endforeach; ?>
    </ul>
    <?php endif; ?>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div>
            <label for="nom">Nom:</label>
            <input type="text" id="nom" name="nom" value="<?php echo isset($nom) ? $nom : ''; ?>">
        </div>
        <div>
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo isset($email) ? $email : ''; ?>">
        </div>
        <div>
            <label for="message">Message:</label>
            <textarea id="message" name="message"><?php echo isset($message) ? $message : ''; ?></textarea>
        </div>
        <div>
            <input type="submit" value="Envoyer">
        </div>
    </form>
    <?php endif; ?>
    <li><a href="index.html">Retour</a>
</body>
</html>