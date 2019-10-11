<?php include "menu.php"; ?>
<?php include "connection.php"; ?>
<?php
print_r($_POST);

$sql = "DELETE FROM yhteystiedot WHERE idyhteystiedot=:id";

$stmt=$db->prepare($sql);
$stmt->bindParam(':id', $_POST['id']);
$stmt->execute();

echo 'Henkilö poistettu!';
 ?>

<form action="muokkaa_yhteystietoja.php">
 <input type="submit" name="" value="OK">
</form>
