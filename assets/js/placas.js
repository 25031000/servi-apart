const miInputs = document.getElementsByClassName("mi-input");

for (let i = 0; i < miInputs.length; i++) {
  miInputs[i].addEventListener("input", (event) => {
    miInputs[i].value = miInputs[i].value.toUpperCase();
  });
}