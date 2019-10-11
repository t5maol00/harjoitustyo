<?php include "menu.php"; ?>

<?php
  session_start();

  // isset() tutkii onko sulkujen sisällä oleva muuttuja olemassa/alustettu.
  // Tässä tapauksessa jos logged_in muuttujaa ei ole luotu,
  // niin hypätään suoraan else osaan
  if(isset($_SESSION['logged_in'])) {
    echo '<p>Tervetuloa '.$_SESSION['username'].'</p>'
  }
  else {
    echo '<p>Tervetuloa Vieras</p>'
  }
 ?>
