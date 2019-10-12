<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
// print_r($_POST);

$sql = "UPDATE yhteystiedot SET osasto_idosasto=:os_id, etunimi=:en,
sukunimi=:sn, osoite=:os, puhelin=:puh WHERE idyhteystiedot=:id";

$stmt=$db->prepare($sql);
$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':os_id', $_POST['os_id']);
$stmt->bindParam(':en', $_POST['en']);
$stmt->bindParam(':sn', $_POST['sn']);
$stmt->bindParam(':os', $_POST['os']);
$stmt->bindParam(':puh', $_POST['puh']);
$stmt->execute();

echo '<br><br>';
echo 'Tiedot päivitetty!';

 ?>
<br><br>
<form action="muokkaa_yhteystietoja.php">
 <input type="submit" name="" value="OK">
</form>
