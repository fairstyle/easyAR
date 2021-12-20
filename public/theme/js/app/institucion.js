function borrarInstitucion(element) {

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
                'La institución se borrara.',
                'success'
            )
            window.location.href = element.getAttribute('url');
        } else if (
            // Read more about handling dismissals
            result.dismiss === Swal.DismissReason.cancel
        ) {
            Swal.fire(
                'Acción cancelada',
                'Tu institución esta a salvo :)',
                'error'
            )
        }
    });
}
