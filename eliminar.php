<?php

  include 'conexion.php';

  $id = $_GET['id'];
  $sql = "DELETE
          FROM persona
          WHERE id = " . $id;
  mysqli_query($con, $sql);
  header('Location: index.php');
?>
