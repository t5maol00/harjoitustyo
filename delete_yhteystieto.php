
<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<?php

$sql = "SELECT idyhteystiedot, osasto_idosasto, etunimi, sukunimi, osoite, puhelin FROM yhteystiedot WHERE idyhteystiedot=:id";

$stmt=$db->prepare($sql);
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();

$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);



?>

<h2>Haluatko varmasti poistaa henkilön?</h2>

<form class="" action="save_deleted.php" method="post">
  <input type="hidden" name="id" value="<?php echo $result[0]['idyhteystiedot']; ?>"> <br>
  <input type="submit" name="" value="Kyllä">
</form>

<form class="" action="muokkaa_yhteystietoja.php" method="post">
  <input type="submit" name="" value="Ei">
</form>
