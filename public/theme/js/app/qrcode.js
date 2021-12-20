
        function abrirImagen(element){
            var go = document.createElement('a');
            go.target = "_blank"
            go.href = element.getAttribute('url');
            go.click();
        }

        function borrarImagen(element) {

            Swal.fire({
                title: 'Estas seguro?',
                text: "No podrás revertir esta decisión!",
                icon: 'warning',
                showCancelButton: true,
                customClass:{
                  confirmButton: 'mr-2',
                  cancelButton: ''
                },
                confirmButtonText: 'Si, Borrar!',
                cancelButtonText: 'No!'
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Borrando!',
                        'Tu archivo se borrara.',
                        'success'
                    )
                    window.location.href = element.getAttribute('url');
                } else if (
                    // Read more about handling dismissals
                    result.dismiss === Swal.DismissReason.cancel
                ) {
                    Swal.fire(
                        'Acción cancelada',
                        'Tu código QR esta a salvo :)',
                        'error'
                    )
                }
            });
        }

        function cargarQR(element){
            Swal.fire({
                title: element.getAttribute('uuid'),
                html:
                    '<img style="max-height: 200px;max-width: 200px;" class="img-fluid" src='+element.getAttribute('url')+'>',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                    'Imprimir',
                confirmButtonAriaLabel: 'Imprimir!',
                cancelButtonText:
                    'Cerrar',
                cancelButtonAriaLabel: 'Cerrar',
            }).then((result) => {
                if (result.value) {
                    Swal.fire(
                        'Generando PDF!',
                        'Tu archivo se esta generando.',
                        'success'
                    )
                    setTimeout(function(){
                        var go = document.createElement('a');
                        go.target = "_blank"
                        go.href = element.getAttribute('imprimir');
                        go.click();
                    },1000);

                }
            });
        }

        function descargarQR(element){
            var go = document.createElement('a');
            go.target = "_blank"
            go.href = element.getAttribute('url');
            go.click();
        }
