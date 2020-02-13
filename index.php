<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>CRUD</title>
  </head>
  <body>
    <?php
      include 'conexion.php';

      $sql = "SELECT *
              FROM persona";
      if (!($resultado = mysqli_query($con, $sql))) {
        echo 'No hay registros en la tabla persona';
      }
    ?>
    <div>
      <a href="agregar.php">Nuevo</a>
      <hr />
      <table>
        <thead>
          <tr>
            <th>ID</th>
            <th>USUARIO</th>
            <th>EMAIL</th>
            <th>ACCIONES</th>
          </tr>
        </thead>
        <tbody>
          <?php
            while ($filas = mysqli_fetch_assoc($resultado)) {
          ?>
          <tr>
            <td><?php echo $filas['id']; ?></td>
            <td><?php echo $filas['usuario']; ?></td>
            <td><?php echo $filas['email']; ?></td>
            <td>
              <a href="editar.php?id=<?php echo $filas['id']; ?>">Editar</a>
              <a href="eliminar.php?id=<?php echo $filas['id']; ?>">Eliminar</a>
            </td>
          </tr>
          <?php
            }
            mysqli_free_result($resultado);
          ?>
        </tbody>
      </table>
    </div>
  </body>
</html>
