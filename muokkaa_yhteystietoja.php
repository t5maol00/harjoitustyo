<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    header('Location:not_logged.php');  // Tätä ei saa käyttää jos sivulla on aikaisemmilla riveillä html kieltä. Siksi alkuun tämä.
}
?>

<?php include "menu.php" ?>
<?php include "connection.php"; ?>

<h2>Muokkaa ja poista yhteystietoja</h2>
<p>


  <table border="1">
    <thead>
      <tr>
        <th>id</th> <th>Osasto</th><th>Etunimi</th> <th>Sukunimi</th> <th>Osoite</th> <th>Puh. numero</th><th>Muokkaa</th><th>Poista</th>
      </tr>
    </thead>


    <tbody align="center">
      <br><br>
      <center>
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
                 echo '<td><a href="edit_yhteystieto.php?id='.$row['idyhteystiedot'].'">Muokkaa</a></td>';
                 echo '<td><a href="delete_yhteystieto.php?id='.$row['idyhteystiedot'].'">Poista</a></td>';
                 echo '</tr>';
               }
               ?>
 </tbody>
</table>

      <h3>Lisää uusi yhteystieto</h3>
      <form class="" action="lisaa_yhteystieto.php" method="post">
        <input type="number" name="id" value="" placeholder="Yhteystieto id"> <br>
        <input type="number" name="osasto" value="" placeholder="Osasto id"> <br>
        <input type="text" name="en" value="" placeholder="Etunimi" required> <br>
        <input type="text" name="sn" value="" placeholder="Sukunimi" required> <br>
        <input type="text" name="os" value="" placeholder="Osoite" required> <br>
        <input type="text" name="puh" value="" placeholder="Puhelin" required> <br>
        <br>
        <input type="submit" name="" value="Lisää">
      </form>
<br><br><br>
