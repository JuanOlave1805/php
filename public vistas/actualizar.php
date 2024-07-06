<div>
    <!-- Formulario con metodo post -->
  <form action="controladores/ruter.php" method="POST">
    <!-- Campo para el id -->
    <div>
      <label for="id">Id</label>
      <input type="text" id="id" name="id" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" value="<?php echo $persona["id"]; ?> ">
    </div>
    <!-- Campo para el nombre -->
    <div>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" value="<?php echo $persona["nombre"]; ?> ">
    </div>
    <!-- Campo para el apellido -->
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="apellido" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" value="<?php echo $persona["apellido"]; ?> ">
    </div>
    <!-- Campo para el genero -->
    <div>
      <label for="genero">Genero</label>
      <input type="text" id="genero" name="genero" placeholder="Ingresa tu genero" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+" value="<?php echo $persona["genero"]; ?> ">
    </div>
    <!-- Campo para la edad -->
    <div>
      <label for="edad">Edad</label>
      <input type="number" id="edad" name="edad" value="<?php echo $persona["edad"]; ?> ">
    </div>
    <!-- Boton para enviar -->
    <button type="submit">Enviar</button>
  </form>
</div>