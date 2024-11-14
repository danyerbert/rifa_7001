console.log("Documento ingresado");
const registroNumero = async () => {
  var numero = document.querySelector("#numero").value;
  var nombreJugador = document.querySelector("#nombre_jugador").value;
  var cedulaJugador = document.querySelector("#cedula_jugador").value;
  var telefonoJugador = document.querySelector("#telefono_jugador").value;
  if (
    numero.trim() === "" ||
    nombreJugador.trim() === "" ||
    cedulaJugador.trim() === "" ||
    telefonoJugador.trim() === ""
  ) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Faltan Campos por completar",
    });
    return;
  }

  if (!validarNumero(numero)) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Debe ingresar el numero en el formato correcto.",
    });
    return;
  }
  if (!validarnombre(nombreJugador)) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Debe ingresar el nombre en el formato correcto.",
    });
    return;
  }
  if (!validarcedula(cedulaJugador)) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Debe ingresar el cedula en el formato correcto.",
    });
    return;
  }
  if (!validarTelefono(telefonoJugador)) {
    Swal.fire({
      icon: "error",
      title: "Error",
      text: "Debe ingresar el telefono en el formato correcto.",
    });
    return;
  }
  const datos = new FormData();

  datos.append("numero", numero);
  datos.append("nombre_jugador", nombreJugador);
  datos.append("cedula_jugador", cedulaJugador);
  datos.append("telefono_jugador", telefonoJugador);
  var respuesta = await fetch("php/agregar.php", {
    method: "POST",
    body: datos,
  });
  var resultado = await respuesta.json();
  if (resultado.success == true) {
    Swal.fire({
      icon: "success",
      title: "EXITO",
      text: resultado.mensaje,
    });
    document.querySelector("#registrar_numero").reset();
    window.location.reload();
  } else {
    Swal.fire({
      icon: "error",
      title: "ERROR",
      text: resultado.mensaje,
    });
  }
};
