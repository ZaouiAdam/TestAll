<?php
  include("connexion.php");

  $sql = "SELECT * FROM test1";

  $stmt = $link->prepare($sql);
  $stmt->execute();
  $users = $stmt->fetchAll();

//  $sql1 = "UPDATE `test1` SET `nom`=,`prenom`= WHERE `nom` = '$remp'";

//  $stmt1 = $link->prepare($sql1);
//  $stmt1->execute();

?>
<!DOCTYPE html>
<html lang="fr" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <table>
    <tr>
      <th>Nom</th>
      <th>Prenom</th>
      <th>Supprimer</th>
      <th>Editer</th>
    </tr>
          <?php foreach ($users as $user ){?>
    <tr>
      <td><?php echo $user['nom'];?></td>
      <td><?php echo $user['prenom'];?></td>
      <td><a href="Sup.php?nom=<?php echo $user['nom']; ?>">Suppprimer</a></td>
      <td><a href="exo2 (MySQL).php?nom=<?php echo $user['nom']; ?>?prenom=<?php echo $user['prenom']; ?>">Editer</a></td>
    </tr>
    <?php } ?>
  </table>
  </body>
</html>
