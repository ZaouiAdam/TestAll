<?php

SESSION_start();
if (!isset($_SESSION['data'])) {
  $_SESSION['data'] = [];
}

if (check($_POST)) {
  $user = [ $_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['telephone']];
  var_dump($user);
}



?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <form action="" method="POST">
      <label for="">Nom : </label>
      <input type="text" name="nom" value=""><br>
      <label for="">Prenom : </label>
      <input type="text" name="prenom" value=""><br>
      <label for="">Mail :</label>
      <input type="text" name="mail" value=""><br>
      <label for="">Telephone : </label>
      <input type="text" name="telephone" value=""><br>
      <input type="submit" name="send" value="Enregistrer"><br>
    </form>
  </body>
</html>

<?

function check($post){

  if (isset($post['send'])) {
    if (!empty($post['nom'])) {
      return true;
    }
    return false;
  }
  return false;
}
