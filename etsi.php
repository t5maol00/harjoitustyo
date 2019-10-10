
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
      <h2>Etsi yhteystietoja</h2>
        <form class="" action="show_etsi.php" method="post">
          <select name="osasto" autofocus>
            <option value="työnjohto">Työnjohto</option>
            <option value="toimisto">Toimisto</option>
            <option value="tuotanto">Tuotanto</option>
          </select>

          <input type="submit" name="" value="Etsi">
        </form>

        </form>
  </body>
</html>
