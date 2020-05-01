function getElement(identifier) {
  return document.getElementById(identifier);
}

function getFontSize() {
  var size = document.body.style.fontSize;
  return parseInt(size.split("px")[0], 10);
}

function changeFontSize(value) {
  return (document.body.style.fontSize = `${value}px`);
}

var upSize = getElement("up_size");
var normalSize = getElement("normal_size");
var downSize = getElement("down_size");
var changeContrast = getElement("contrast");

upSize.addEventListener("click", function () {
  var getValue = getFontSize();
  if (getValue < 22) {
    changeFontSize(getValue + 2);
  }
});

normalSize.addEventListener("click", function () {
  changeFontSize(16);
});

downSize.addEventListener("click", function () {
  var getValue = getFontSize();
  if (getValue > 12) {
    changeFontSize(getValue - 2);
  }
});

changeContrast.addEventListener("click", function () {
  document.body.classList.toggle("contrast");
});
