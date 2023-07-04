function validateForm() {
    var nombre = document.getElementById("nombre").value;
    var telefono = document.getElementById("telefono").value;
    var correo = document.getElementById("correo").value;
    var empresa = document.getElementById("empresa").value;
  
    if (nombre === "" || telefono === "" || correo === "" || empresa === "") {
      document.getElementById("message").textContent = "Faltan campos por validar";
      return false;
    } else {
      document.getElementById("message").textContent = "Datos guardados, estaremos en contacto pronto.";
      return true;
    }
  }
  
  function clearForm() {
    document.getElementById("contact-form").reset();
    document.getElementById("message").textContent = "";
  }
  