<?php include "menu.php"; ?>
<?php include "connection.php"; ?>

<?php
$stmt=$db->prepare("SELECT idyhteystiedot, osasto_idosasto, etunimi, sukunimi, osoite, puhelin
  FROM yhteystiedot WHERE idyhteystiedot=:id");
$stmt->bindParam(':id', $_GET['id']);
$stmt->execute();
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);
print_r($result);
?>


<form class="" action="save_edited.php" method="post">
  <input type="hidden" name="id" value="<?php echo $result[0]['idyhteystiedot']; ?>"> <br>
  <input type="text" name="os_id" value=" <?php echo $result[0]['osasto_idosasto']; ?>"> <br>
  <input type="text" name="en" value=" <?php echo $result[0]['sukunimi']; ?>"> <br>
  <input type="text" name="sn" value=" <?php echo $result[0]['etunimi']; ?>"> <br>
  <input type="text" name="os" value=" <?php echo $result[0]['osoite']; ?>"> <br>
  <input type="text" name="puh" value=" <?php echo $result[0]['puhelin']; ?>"> <br>
  <br>
  <input type="submit" name="" value="Tallenna">
</form>
