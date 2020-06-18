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
      var formData = new FormData();

      formData.append('name', document.getElementsByName('name')[0].value)
      formData.append('email', document.getElementsByName('email')[0].value)
      formData.append('whatsapp', document.getElementsByName('whatsapp')[0].value)
      formData.append('password', document.getElementsByName('password')[0].value)
      formData.append('height', document.getElementsByName('height')[0].value)
      formData.append('hair_color', document.getElementsByName('hair_color')[0].value)
      formData.append('ethnicity', document.getElementsByName('ethnicity')[0].value)
      formData.append('description', document.getElementsByName('description')[0].value)
      formData.append('bust', document.getElementsByName('bust')[0].value)
      formData.append('waist', document.getElementsByName('waist')[0].value)
      formData.append('eye_color', document.getElementsByName('eye_color')[0].value)
      formData.append('hip', document.getElementsByName('hip')[0].value)

      formData.append('filename1', document.getElementById('filename1').files[0])
      formData.append('filename2', document.getElementById('filename2').files[0])
      formData.append('filename3', document.getElementById('filename3').files[0])
      formData.append('filename4', document.getElementById('filename4').files[0])
      formData.append('filename5', document.getElementById('filename5').files[0])
      formData.append('filename6', document.getElementById('filename6').files[0])

      var icon = 'success';
      var title = 'Información';

      fetch('/save', { 
        method: 'POST', // or 'PUT'
        body: formData, // data can be `string` or {object}! 
        headers:{
          // 'Content-Type': 'multipart/form-data',
          'X-CSRF-TOKEN':  document.getElementsByName('_token')[0].value,
        }

      }).then(function(res) { 
        return res.json()
      })
      .then(function(response){

        if(response.status === "NOK") {
          icon = 'error';
          title = 'Error';
        }


        if (response.status === "OK") {
            window.open(response.paypal_link)
        }

        // swal.fire({
        //   icon: icon,
        //   title: title,
        //   text: response.message
        // })

      })
      .catch(error => console.error('Error:', error));
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