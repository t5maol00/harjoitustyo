<?php
try
{
  $conn_string = "mysql:host=mysli.oamk.fi; dbname=opisk_t5maol00";
  $db = new PDO ($conn_string, "t5maol00", "z69i8qw2k");
  print ("Connected\n");
}
catch (PDOException $e)
{
 print ("Cannot connect to server\n");
 print ("Error code: " . $e->getCode () . "\n");
 print ("Error message: " . $e->getMessage () . "\n");
}
?>
