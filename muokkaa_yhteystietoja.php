<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    header('Location:not_logged.php');  // Tätä ei saa käyttää jos sivulla on aikaisemmilla riveillä html kieltä. Siksi alkuun tämä.
}
?>

<?php include "menu.php" ?>
<?php include "connection.php"; ?>


<br><br><br>
<h3>Lisää uusi yhteystieto</h3>
<form class="" action="lisaa_yhteystieto.php" method="post">
  <input type="number" name="osasto" value="" placeholder="Osasto id" required> <br>
  <input type="text" name="en" value="" placeholder="Etunimi" required> <br>
  <input type="text" name="sn" value="" placeholder="Sukunimi" required> <br>
  <input type="text" name="os" value="" placeholder="Osoite" required> <br>
  <input type="text" name="puh" value="" placeholder="Puhelin" required> <br>
  <br>
  <input type="submit" name="" value="Lisää">
</form>

<br>
<h2>Muokkaa yhteystietoja</h2>
<table border="1" align="center" style="background-color: #dfdfd6">
  <head>
    <tr>
      <th>id</th> <th>Osasto</th><th>Etunimi</th> <th>Sukunimi</th> <th>Osoite</th> <th>Puh. numero</th><th>Muokkaa</th><th>Poista</th>
    </tr>
  </head>

<tbody>
          <br>
              <?php
              $yhteystiedot = $db->query('SELECT * FROM yhteystiedot');
               foreach ($yhteystiedot as $row) {
                 echo '<tr>';
                 echo '<td>'.$row['idyhteystiedot'].'</td>';
                 echo '<td>'.$row['osasto_idosasto'].'</td>';
                 echo '<td>'.$row['etunimi'].'</td>';
                 echo '<td>'.$row['sukunimi'].'</td>';
                 echo '<td>'.$row['osoite'].'</td>';
                 echo '<td>'.$row['puhelin'].'</td>';
                 echo '<td><a href="edit_yhteystieto.php?id='.$row['idyhteystiedot'].'"><img src="img/button_pieni_muokkaa.png"></a></td>';
                 echo '<td><a href="delete_yhteystieto.php?id='.$row['idyhteystiedot'].'"><img src="img/button_poista.png"></a></td>';
                 echo '</tr>';
               }
               ?>
 </tbody>
</table>
