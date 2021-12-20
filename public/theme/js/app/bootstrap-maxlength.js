$(function() {
  'use strict';

  $(['#name']).maxlength({
    warningClass: "badge mt-1 badge-success",
    limitReachedClass: "badge mt-1 badge-danger"
  });

  var inputImagen = document.getElementById('imagenPerfil');

  inputImagen.onchange = (evt) => {
      if (inputImagen.files) {
          document.getElementById('imgPerfil').src = URL.createObjectURL(evt.target.files[0]);
      }
  };
  document.getElementById('bimagenPerfil').onclick = () => {
      inputImagen.click();
  };

});
