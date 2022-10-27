const datos = document.getElementById("datos");
const form = document.getElementById("form");

form.addEventListener("submit", function (llamar) {
  llamar.preventDefault();
  const formdata = new FormData(this);

  fetch("factura.php", {
    method: "POST",
    body: formdata,
  })
    .then(function (respuesta) {
      return respuesta.text();
    })
    .then(function (respuesta) {
      datos.innerHTML = respuesta;
    });
});
