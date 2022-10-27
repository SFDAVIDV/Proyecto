const dato = document.getElementById("datos");
const form = document.getElementById("form");

form.addEventListener("submit", function (datos) {
  datos.preventDefault();
  const formData = new FormData(this);

  fetch("registrarse.php", {
    method: "POST",
    body: formData,
  })
    .then(function (respuesta) {
      return respuesta.text();
    })
    .then(function (respuesta) {
      dato.innerHTML = respuesta;
    });
});
