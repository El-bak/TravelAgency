<?php session_start();
     
     ?>
<?php require("login/Database.php");?>
<!DOCTYPE html>
<html>
<head>
	<title>Page de profil</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body style="background-color: lightblue">
	<div class="container">
		<h1>Mon profil</h1>
     <?php 

                echo"<p>Pseudo :".$_SESSION['nickname']."</p>";
                echo"<p>Nom :".$_SESSION['nom']."</p>";
                echo"<p>Adresse :".$_SESSION['Adresse']."</p>";
                echo"<p>Date_de_naissance :".$_SESSION['date_de_naissance']."</p>";
                echo"<p>Email:".$_SESSION['email']."</p>";
                echo"<p>Télephone :".$_SESSION['Num_Tel']."</p>";

        ?>
      
	</div>
</body>
</html>

<style>
.container {
	max-width: 600px;
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

p {
	font-size: 18px;
	line-height: 1.5;
	margin-bottom: 10px;
}
</style>