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

// Syötettyjen salasanojen yhteneväisyyden tarkistus
if ($_POST['salasana'] == $_POST['salasana2']) {

// Tässä kryptataan annettu salasana
$encrypted_pass = password_hash($_POST['salasana'],PASSWORD_DEFAULT);

$stmt=$db->prepare("INSERT INTO user (username,password) VALUES(:user, :password)");
$stmt->bindParam(':user', $_POST['kayttaja']);
$stmt->bindParam(':password', $encrypted_pass);
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
