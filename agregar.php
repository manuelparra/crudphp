<div>
  <form>
    <label>Usuario:</lable><br>
    <input type="text" name="txtuser" /><br><br>
    <label>Email</label></br>
    <input type="text" name="txtemail" /><br><br>
    <input type="submit" name="" value="Agregar" /><br><br>
    <a href="index.php">Regresar</a>
  </form>
</div>
<?php
  include 'conexion.php';

  $user = $_GET['txtuser'];
  $email = $_GET['txtemail'];

  if ($user != null || $email != null) {
    $sql = "INSERT INTO persona(usuario, email)
            VALUES('" . $user . "', '" . $email . "')";
    mysqli_query($con, $sql);
    header("Location: index.php");
  }
?>
