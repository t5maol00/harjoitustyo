<?php include "menu.php" ?>
<?php include "connection.php" ?>
<?php

$annettu_tunnus=$_POST['kayttaja'];
$annettu_salasana=$_POST['salasana'];
$oikea_salasana='pass123';
if ($annettu_salasana == $oikea_salasana) {
  session_start();
  $_SESSION['logged_in']=true;
  $_SESSION['username']=$annettu_tunnus;
  echo '<p>Olet kirjautunut sisään</p>';
}
else {
  echo '<p>Tunnus ja salasana eivät täsmää</p>';
}
 ?>
