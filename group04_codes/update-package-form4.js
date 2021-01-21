var name = document.getElementById("packageName");

name.addEventListener("input", function (event) {
  if (name.validity.typeMismatch) {
    alert("Please enter your package name!");
  } else {
    name.setCustomValidity("");
  }
});