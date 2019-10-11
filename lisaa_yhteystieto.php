<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<br>
<?php
// Nämä voi olla käytössä jos haluaa nähdä mitä tietoja syötetty
// print_r($_POST);
//echo '<br>';


/* Seuraava koodi sisältää SQL-injectionin
$add='INSERT INTO customers VALUES("'.$_POST['en'].'","'.$_POST['sn'].'")';
echo $add; */

// Tämä on oikea tyyli.
$stmt=$db->prepare("INSERT INTO yhteystiedot VALUES(:id, :osasto, :en, :sn, :os, :puh)");

$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':osasto', $_POST['osasto']);
$stmt->bindParam(':en', $_POST['en']);
$stmt->bindParam(':sn', $_POST['sn']);
$stmt->bindParam(':os', $_POST['os']);
$stmt->bindParam(':puh', $_POST['puh']);

$stmt->execute();
echo 'Lisättiin yhteystieto'
?>

<form class="" action="muokkaa_yhteystietoja.php" method=""><br>
  <input type="submit" name="" value="OK">
</form>
