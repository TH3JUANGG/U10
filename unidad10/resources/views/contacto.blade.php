<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="styleContacto.css">
</head>
<body>
  <div class="content">
    <header>
      <h1>¿Quieres contactar?</h1>
      <br>
      <h1>Llena el formulario</h1>
      <br>
      <br>
      <nav>
        <ul>
          <li><a href="/index">Inicio</a></li>
          <li><a href="/brochure">Brochure de Servicio</a></li>
          <li><a href="/curricular_vitae">Curricular Vitae</a></li>
        </ul>
      </nav>
    </header>
    <main>
      <br>
      <br>
      <h2>Formulario de Contacto</h2>
      <form action="{{url('/views')}}" method="post" id="contact-form" onsubmit="return validateForm()">
      @csrf
        <div>
          <label for="Nombre">Nombre:</label>
          <input type="text" id="Nombre" name="Nombre" required>
        </div>
        <div>
          <label for="N_Telefono">Número de Teléfono:</label>
          <input type="tel" id="N_Telefono" name="N_Telefono" required>
        </div>
        <div>
          <label for="Correo_Electronico">Correo Electrónico:</label>
          <input type="email" id="Correo_Electronico" name="Correo_Electronico" required>
        </div>
        <div>
          <label for="Empresa">Empresa:</label>
          <input type="text" id="Empresa" name="Empresa" required>
        </div>
        <div>
          <label for="Observacion">Observación:</label>
          <textarea id="Observacion" name="Observacion"></textarea>
        </div>
        <div class="buttons">
          <button type="submit" onclick="alert('Informacion enviada');" >Enviar</button>

          <button type="button" onclick="clearForm()">Borrar Datos</button>
        </div>
      </form>
      
    </main>
    <footer>
    </footer>
  </div>
  <script src="script.js"></script>
</body>
</html>
