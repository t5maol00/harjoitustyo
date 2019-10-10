
<?php include "menu.php" ?>
<?php include "connection.php"; ?>

<h2>Muokkaa ja poista yhteystietoja</h2>
<p>

  <h2>Customers</h2>
  <?php
  $yhteystiedot = $db->query('SELECT * FROM yhteystiedot');
  foreach ($yhteystiedot as $row) {
    echo $row['etunimi'].' '.$row['sukunimi'].'<br>';
  }
   ?>

  <table border="1">
    <thead>
      <tr>
        <th>Etunimi</th> <th>Sukunimi</th> <th>Osoite</th> <th>Puh. numero</th><th>Muokkaa</th><th>Poista</th>
      </tr>
    </thead>
    <tbody align="center">
      <br><br>
  <?php
  $yhteystiedot = $db->query('SELECT * FROM yhteystiedot');
   foreach ($yhteystiedot as $row) {
     echo '<tr>';
     echo '<td>'.$row['etunimi'].'</td>';
     echo '<td>'.$row['sukunimi'].'</td>';
     echo '<td>'.$row['osoite'].'</td>';
     echo '<td>'.$row['puhelin'].'</td>';
     echo '<td><a href="edit_yhteystieto.php?id='.$row['idyhteystiedot'].'">Muokkaa</a></td>';
     echo '</tr>';
   }
   ?>

 </tbody>
</table>
<br><br>

      <h3>Lisää uusi yhteystieto</h3>
      <form class="" action="lisaa_yhteystieto.php" method="post">
        <input type="text" name="etunimi" value="" placeholder="Etunimi" required> <br>
        <input type="text" name="sukunimi" value="" placeholder="Sukunimi" required> <br>
        <input type="text" name="osoite" value="" placeholder="Osoite" required> <br>
        <input type="text" name="puhelin" value="" placeholder="Puhelin" required> <br>
        <br>
        <input type="submit" name="" value="Lisää">
      </form>
<br><br><br>
