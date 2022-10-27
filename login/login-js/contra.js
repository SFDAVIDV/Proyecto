const button = document.querySelector("button");
const input = document.querySelector("#password");
button.addEventListener("mousedown", () => {
  input.type = "text";
});
document.addEventListener("mouseup", () => {
  input.type = "password";
});
