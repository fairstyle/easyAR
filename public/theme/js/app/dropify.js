$(function() {
  'use strict';

  $('#dropify').dropify({
      messages: {
          'default': 'Arrastra y suelta o haz click aqui',
          'replace': 'Arrastra y suelta o haz click aqui para remplazar',
          'remove':  'Borrar',
          'error':   'Ooops, algo paso :(.'
      }
  });

    $(['#desc', '#name']).maxlength({
        warningClass: "badge mt-1 badge-success",
        limitReachedClass: "badge mt-1 badge-danger"
    });

    $('#color_picker').colorpicker();
    $('#color_picker2').colorpicker();
});
