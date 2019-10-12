<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    header('Location:not_logged.php');  // Tätä ei saa käyttää jos sivulla on aikaisemmilla riveillä html kieltä. Siksi alkuun tämä.
}
?>

<?php include "menu.php" ?>
<?php include "connection.php" ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Yhteystiedot</title>
  </head>
  <body>

<br>
      <h2>Luo käyttäjätunnus</h2>
      <form class="" action="save_kayttaja.php" method="post">
        <input type="hidden" name="id" value=""> <br>
        <input type="text" name="kayttaja" value="" placeholder="Anna käyttäjänimi" required> <br><br>
        <input type="text" name="salasana" value="" placeholder="Anna salasana" required> <br>
        <input type="text" name="salasana2" value="" placeholder="Salasana uudelleen" required> <br><br>
        <br>
        <input type="submit" name="" value="Lisää käyttäjä"><br>
      </form>



  </body>
</html>
