function deleteCustomer(customerId) {
    Swal.fire({
        title: 'Você tem certeza?',
        text: "Os equipamentos relacionados a este cliente também serão excluídos!",
        showCancelButton: true,
        confirmButtonColor: '#d33',
        cancelButtonColor: '#3085d6',
        confirmButtonText: 'Sim, excluir!',
        cancelButtonText: 'Cancelar',
    }).then((result) => {
        if (result.isConfirmed) {
            // Make an AJAX request to delete the customer
            $.ajax({
                url: `/cliente/delete/${customerId}`,
                type: 'DELETE',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') // Use "content" instead of "value"
                },
                success: function (response) {
                    Swal.fire(
                        'Sucesso!',
                        'O cliente foi excluído.',
                        'success'
                    ).then(() => {
                        location.reload();
                    });
                },
                error: function (xhr) {
                    Swal.fire(
                        'Erro!',
                        'Algo deu errado. Por favor, tente novamente mais tarde.',
                        'error'
                    );
                }
            });
        }
    });
}
