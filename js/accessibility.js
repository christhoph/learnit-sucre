/**
 *
 * @param {String} identifier DOM element id or identifier
 *
 * Función para seleccionar un elemento HTML del DOM mediante su atributo ID
 *
 */
function getElement(identifier) {
  return document.getElementById(identifier);
}

/**
 *
 * Función que tomará el valor de la propiedad font-size que tenga el elemento 'body'
 *
 */
function getFontSize() {
  var size = document.body.style.fontSize;
  // Obtenemos el valor numerico de la propiedad font-size y lo retornamos
  return parseInt(size.split("px")[0], 10);
}

/**
 *
 * @param {Number} value Numeric value for set font-size property value
 *
 * Función que actualizará el valor de la propiedad font-size del elemento 'body'
 *
 * Usaremos en CSS la medida relativa 'em' que tomará en referencia el valor del font-size de la etiqueta 'body'
 * Con ello al modificar el valor del font-size de esta etiqueta, se modificarán los valores de los demás elementos
 *
 */
function changeFontSize(value) {
  document.body.style.fontSize = `${value}px`;
}

// Obtenemos del DOM todos los botones con su id y los almacenamos en una variable
var upSize = getElement("up_size");
var normalSize = getElement("normal_size");
var downSize = getElement("down_size");
var changeContrast = getElement("contrast");

// Asignamos el evento click al elemento 'upSize'
upSize.addEventListener("click", function () {
  // Obtenemos el valor actual de la propiedad font-size del elemento 'body'
  var getValue = getFontSize();
  // Evaluamos si el valor actual del font-size es menor a 22 para sumar 2
  if (getValue < 22) {
    // Sumar 2 al valor actual y luego lo actualizamos usando la funcion 'changeFontSize'
    changeFontSize(getValue + 2);
  }
});

// Asignamos el evento click al elemento 'normalSize'
normalSize.addEventListener("click", function () {
  // Retornamos al valor base de 16px y lo actualizamos usando la funcion 'changeFontSize'
  changeFontSize(16);
});

// Asignamos el evento click al elemento 'downSize'
downSize.addEventListener("click", function () {
  // Obtenemos el valor actual de la propiedad font-size del elemento 'body'
  var getValue = getFontSize();
  // Evaluamos si el valor actual del font-size es mayor a 12 para restar 2
  if (getValue > 12) {
    // Restar 2 al valor actual y luego lo actualizamos usando la funcion 'changeFontSize'
    changeFontSize(getValue - 2);
  }
});

// Asignamos el evento click al elemento 'changeContrast'
changeContrast.addEventListener("click", function () {
  // Agregamos o removemos la clase 'contrast' al elemento 'body' para poder manipular sus estilos
  document.body.classList.toggle("contrast");
});
