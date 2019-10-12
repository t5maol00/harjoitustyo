<?php include "menu.php" ?>
<?php include "connection.php" ?>
<?php

$annettu_salasana=$_POST['salasana'];
$annettu_tunnus=$_POST['username'];
// $oikea_salasana='pass123';

$stmt=$db->prepare("SELECT password FROM user WHERE username=:username");
$stmt->bindParam(':username', $annettu_tunnus);
$stmt->execute();
$oikea_salasana = $stmt->fetch(PDO::FETCH_COLUMN);

if(password_verify($annettu_salasana, $oikea_salasana)) {
  session_start();
  $_SESSION['logged_in']=true;
  $_SESSION['username']=$annettu_tunnus;
  echo '<br><br>';
  echo 'Tervetuloa '.$annettu_tunnus.'!';
}
else {
  echo '<br><br>';
  echo '<p>Käyttäjätunnus ja salasana eivät täsmää!</p>';
}
 ?>
