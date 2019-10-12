<?php include "menu.php" ?>
<?php
  // session_start() pitää kutsua ensin vaikka ollaan sitä tuhoamassa.
  session_start();
  session_destroy();
 ?>
<br><br><br>
  Olet kirjautunut ulos.
