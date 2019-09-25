<?php

try {
  $link = new PDO('mysql:host=localhost;dbname=test','root','root');
} catch (PDOExeption $e) {
  print "erreur !:".$e->getMessage()."<br>";
  die();
}

?>
