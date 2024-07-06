<?php
require __DIR__ . "/../clases/aprendiz.php";

$aprendiz = new aprendiz();

$personas = $aprendiz->Listar();

?>

<table>
  <thead>
    <th>Nombre</th>
    <th>Apellido</th>
    <th>Genero</th>
    <th>Edad</th>
  </thead>
  <tbody>
    <?php 
    foreach ($personas as $key => $value) {
    ?>
    <tr>
      <td>
        <?php echo $value[$nombre] ?>
      </td>
      <td>
        <?php echo $value[$apellido] ?>
      </td>
      <td>
        <?php echo $value[$genero] ?>
      </td>
      <td>
        <?php echo $value[$edad] ?>
      </td>
      <td>
        <form action="" method="">
          <button type="submit">Eliminar</button>
        </form>
      </td>
    </tr>
    <?php
    }
    ?>
  </tbody>
</table>