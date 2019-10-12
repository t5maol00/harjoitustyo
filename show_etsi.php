<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
// print_r($_POST);
?>
<br>
<h2>Yhteystiedot</h2>
<br><br>
<?php

$yhteystiedot = $db->query("SELECT * FROM yhteystiedot WHERE osasto_idosasto = '{$_POST['osasto']}'");

foreach ($yhteystiedot as $row) {
  echo $row['etunimi'].', '.$row['sukunimi'].', '.$row['osoite'].', '.$row['puhelin'].'<br><br>';
}
 ?>
