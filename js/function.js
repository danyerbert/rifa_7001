console.log("documento ingresado");
// Número
const validarNumero = (numero) => {
  return /^[0-9]{2,3}/.test(numero.trim());
};
// Validacion de nombre, que comprende solo letras, y con espacio para que pueda escribir el apellido
const validarnombre = (nombre) => {
  return /^([A-ZÑa-zñáéíóúÁÉÍÓÚ'° ])+$/.test(nombre.trim());
};

// Validacion de cedula, que comprende los 8 digitos que tiene la cedula
const validarcedula = (cedula) => {
  return /^[0-9]{7,8}/.test(cedula.trim());
};

// Validacion de campo de telefono
const validarTelefono = (telefono) => {
  return /^[0-9]{10,11}/.test(telefono.trim());
};
