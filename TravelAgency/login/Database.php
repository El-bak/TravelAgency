<?php
try 
{
  
  $db = new PDO ('mysql:host=localhost:3306;dbname=myoo_agency;charset=utf8', 'root', '');
  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connection > OK !";
}
catch (Exception $e)
{
  die('Erreur de connexion : ' . $e->getMessage());
}
?>