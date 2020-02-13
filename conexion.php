<?php
  $con = mysqli_connect('localhost', 'manuel', 'Guti.1712*', 'crudphp');

  if (!$con) {
    die('No pude conectarse:' .mysql_error());
  }

  mysqli_query("SET NAME 'utf8'");
?>
