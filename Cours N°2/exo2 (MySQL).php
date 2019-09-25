<?php

include("connexion.php");

$sql = "SELECT * FROM test";

$stmt = $link->prepare($sql);
$stmt->execute();

var_dump($sql);

if (!empty($_POST['prenom'])) {

  $prenom = $_POST['prenom'];
  $nom = $_POST['nom'];

  $sql = "INSERT INTO test1 (nom,prenom) VALUES ('$nom','$prenom')";

  $stmt = $link->prepare($sql);
  $stmt->execute();

  header('Location: list_user.php');
}

var_dump($sql);



?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="post">
      <label for="">Nom :</label>
      <input type="text" name="nom" value=""><br>
      <label for="">Prenom</label>
      <input type="text" name="prenom" value=""><br>
      <input type="submit" name="" value="Enregistrer">
    </form>
  </body>
</html>
