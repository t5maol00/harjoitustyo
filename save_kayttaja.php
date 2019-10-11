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

if ($_POST['salasana'] == $_POST['salasana2']) {

$stmt=$db->prepare("INSERT INTO user VALUES(:id, :user, :password)");

$stmt->bindParam(':id', $_POST['id']);
$stmt->bindParam(':user', $_POST['kayttaja']);
$stmt->bindParam(':password', $_POST['salasana']);
$stmt->execute();


echo 'Käyttäjä luotu';
}
else {
  echo 'Salasanat eivät täsmää!';
}
?>

<form class="" action="luo_tunnus.php" method="post">
  <input type="submit" name="" value="OK">
</form>
