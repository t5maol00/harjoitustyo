<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
print_r($_POST);
?>

<h2>Yhteystiedot</h2>
<?php

$yhteystiedot = $db->query("SELECT * FROM yhteystiedot WHERE osasto_idosasto = '{$_POST['osasto']}'");

foreach ($yhteystiedot as $row) {
  echo $row['idyhteystiedot'].' '.$row['osasto_idosasto'].' '.$row['etunimi'].' '.$row['sukunimi'].' '.$row['osoite'].' '.$row['puhelin'].'<br><br>';
}
 ?>
