<?php
  include 'conexion.php';

  $id = $_GET['id'];

  $sql = "SELECT *
          FROM persona
          WHERE id = " . $id;

  $resultado = mysqli_query($con, $sql);

  while ($fila = mysqli_fetch_assoc($resultado)) {
?>

<div>
  <form>
    <input type="hidden" name="txtid" value="<?php echo $fila['id']; ?>" /><br><br>
    <label>Usuario:</lable><br>
    <input type="text" name="txtuser" value="<?php echo $fila['usuario']; ?>" /><br><br>
    <label>Email</label></br>
    <input type="text" name="txtemail" value="<?php echo $fila['email']; ?>" /><br><br>
    <input type="submit" name="" value="Actualizar" /><br><br>
    <a href="index.php">Regresar</a>
  </form>
</div>

<?php
  }

  mysqli_free_result($rsultado);
?>

<?php
  $id = $_GET['txtid'];
  $user = $_GET['txtuser'];
  $email = $_GET['txtemail'];

  if ($user != null || $email != null) {
    $sql2 = "UPDATE persona SET
             usuario = '" . $user . "', email = '" . $email . "'
             WHERE id = " . $id;
    mysqli_query($con, $sql2);
    header("Location: index.php");
  }
?>
