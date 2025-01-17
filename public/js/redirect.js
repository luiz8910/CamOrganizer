function showCustomer(id)
{
    window.location.href = "/customers/details/" + id;
}

$(function () {
    $(document).on('click', '.card', function (e) {
        // Check if the clicked element or any of its parents has the "avoid-default" class
        if ($(e.target).closest('.avoid-default').length === 0) {
            // No "avoid-default" was clicked, so trigger the showCustomer function
            const customerId = $(this).data('customer'); // Replace with your customer ID logic
            showCustomer(customerId);
        }
    });
})
