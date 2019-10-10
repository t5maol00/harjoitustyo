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
$stmt=$db->prepare("INSERT INTO yhteystiedot VALUES(:etunimi, :sukunimi, :osoite, :puhelin)");

$stmt->bindParam(':etunimi', $_POST['etunimi']);
$stmt->bindParam(':sukunimi', $_POST['sukunimi']);
$stmt->bindParam(':osoite', $_POST['osoite']);
$stmt->bindParam(':puhelin', $_POST['puhelin']);

$stmt->execute();
echo 'Lisättiin yhteystieto'
?>

<form class="" action="muokkaa_yhteystietoja.php" method=""><br>
  <input type="submit" name="" value="OK">
</form>
