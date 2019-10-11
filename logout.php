<?php include "menu.php" ?>
<?php
  // session_start() pitää kutsua ensin vaikka ollaan sitä tuhoamassa.
  session_start();
  session_destroy();
 ?>

<p>
  Olet kirjautunut ulos.
</p>
