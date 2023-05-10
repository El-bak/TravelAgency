<!DOCTYPE.HTML>
<html>
<head>
<meta charset="UTF-8" />
<link rel="stylesheet" type="text/css" href="Style.css">
      <title>Faceboof</title>

    </head>
<body style="background-color: lightblue">
	<header> <!--frere de div--> 
<h1 class="color">Faceboof<span class="Orange">.</span></h1>
  </header>
	<div style="display: flex; flex-direction: column; ">  <!--style: permet d'écrire directe les codes Css--> <!-- flex-direction = pour aligner en forme de colonne-->
  <div style="display: flex; flex-direction: row; justify-content: center; background-color: beige"> <!--row = pour faire une ligne--> <!-- justify-center = pour centrer-->
    <div class="login-div" style="width: 400px; height: auto; border: 1px black solid; display: flex; flex-direction: column; justify-content: space-around;" >
     <h1 style="font: 30px 'Arial', sans-serif; font-weight: bold; text-align: center; margin-bottom: 20px;">Connection</h1>
       <div style="display: flex; flex-direction: row; justify-content: center;">
       	<form method="post" style="margin: 0px 0 20px 0; padding: 0 30px;display: flex; flex-direction: column; ">
       	 <input style="height: 30px; width:220px;" type="text" name="nom" id="nom" placeholder="votre nom" required>
       	 <br>
       	 <input style="height: 30px; width:220px;" type="text" name="email" placeholder="votre email" required>
       	 <br>
       	 <input style="height: 30px; width:220px;" type="text" name="mot_de_passe" placeholder="votre mot de passe" required>
       	 <br>
       	 <input style="margin: 20px 40% 0 20% " type="submit" name="formsend" id="formsend">
       
         </form>
         <?php

             include 'rakkaza.php';
             global $db;

             $q = $db->query("SELECT * FROM user");
             while ($user = $q->fetch()) {
                 var_dump($user);
             }

             if(isset($_POST['formsend'])){
             	$nom = $_POST['nom'];
             	$email = $_POST['email'];
             	$mot_de_passe = $_POST['mot_de_passe'];

             	if(!empty($nom) && !empty($email) && !empty($mot_de_passe)){
             		echo "votre nom : ".$nom."<br/>";
             		echo "votre email : ".$_POST['email'];
             		echo "votre mot_de_passe : ".$_POST['mot_de_passe'];
             	}
             }
         ?>
   </div>
</div>
</div>
</div>
</body