<!-- Formulario con metodo post -->
  <form action="controladores/controlador.php" method="POST">
    <!-- Campo para el nombre -->
    <div>
      <label for="nombre">Nombre</label>
      <input type="text" id="nombre" name="nombre" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
    </div>
    <!-- Campo para el apellido -->
    <div>
      <label for="apellido">Apellido</label>
      <input type="text" id="apellido" name="apellido" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
    </div>
    <!-- Campo para el genero -->
    <div>
      <label for="genero">Genero</label>
      <input type="text" id="genero" name="genero" placeholder="Ingresa tu genero" pattern="[A-Za-zñÑáéíóúÁÉÍÓÚ\s]+">
    </div>
    <!-- Campo para la edad -->
    <div>
      <label for="edad">Edad</label>
      <input type="number" id="edad" name="edad">
    </div>
    <!-- Boton para enviar -->
    <button type="submit">Enviar</button>
  </form>
