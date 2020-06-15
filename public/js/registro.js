var currentTab = 0; // La pestaña actual está configurada para ser la primera pestaña (0)
showTab(currentTab); // Mostrar la pestaña actual

function showTab(n) {
  // Esta función mostrará la pestaña especificada del formulario ...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "flex";
  // ... y arregle los botones Anterior / Siguiente:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline-block";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Enviar";

    document.getElementById("nextBtn").onclick = function () {       
      const formEntries = new FormData(document.forms[1]).entries();
      const json = Object.assign(...Array.from(formEntries, ([x,y]) => ({[x]:y})));
      // console.log(json);
      fetch('/save', {
        method: 'POST', // or 'PUT'
        body: JSON.stringify(json), // data can be `string` or {object}!
        headers:{
          'Content-Type': 'application/json',
          'X-CSRF-TOKEN': json._token,
        }
      }).then(function(res) { res.json() })
      .catch(error => console.error('Error:', error))
      .then(response => console.log('Success:', response));
    }
  } else {
    document.getElementById("nextBtn").innerHTML = "Siguiente";
  }
  // ... y ejecuta una función que muestra el indicador de paso correcto:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // Esta función determinará qué pestaña mostrar
  var x = document.getElementsByClassName("tab");
  // Salga de la función si algún campo en la pestaña actual no es válido:
  if (n == 1 && !validateForm()) return false;
  // Ocultar la pestaña actual:
  x[currentTab].style.display = "none";
  // Aumenta o disminuye la pestaña actual en 1:
  currentTab = currentTab + n;
  // si ha llegado al final del formulario ...:
  if (currentTab >= x.length) {
    //...el formulario se envía:
    document.getElementById("regForm").submit();
    return false;
  }
  // De lo contrario, muestre la pestaña correcta:
  showTab(currentTab);
}

function validateForm() {
  // Esta función se ocupa de la validación de los campos del formulario.
  var x, y, z, a, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  z = x[currentTab].getElementsByTagName("select");
  a = x[currentTab].getElementsByTagName("textarea");
  var inputs = [...y, ...z, ...a];
  // console.log(inputs)
  // Un bucle que verifica cada campo de entrada en la pestaña actual:
  for (i = 0; i < inputs.length; i++) {
    // Si un campo está vacío ...
    if (inputs[i].value == "") {
      // agregue una clase "no válida" al campo:
      inputs[i].className += " invalid";
      // y establezca el estado válido actual en falso:
      valid = false;
    }
  }
  // Si el estado válido es verdadero, marque el paso como terminado y válido:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // devolver el estado válido
}

function fixStepIndicator(n) {
  // Esta función elimina la clase "activa" de todos los pasos ...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... y agrega la clase "activa" al paso actual:
  x[n].className += " active";
}



function serialize(form) {
  document.getElementsByTagName('')
}