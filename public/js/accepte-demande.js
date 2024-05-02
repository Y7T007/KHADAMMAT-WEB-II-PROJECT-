
var csrfToken = $('meta[name="csrf-token"]').attr('content');
$('#acceptModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var userId = button.data('user-id');
    var url = button.data('url');
    var clientId = button.data('client-id');
    var serviceId = button.data('service-id');
   
    var modal = $(this);
    modal.find('.btn-success').attr('data-user-id', userId);
    modal.find('.btn-success').attr('data-client-id', clientId);
    modal.find('.btn-success').attr('data-service-id', serviceId);
    modal.find('.btn-success').attr('data-url', url);
});
$('.btn-success').on('click', function () {
    var url = $(this).data('url');
    var userId = $(this).data('user-id');
    var clientId = $(this).data('client-id');
    var serviceId = $(this).data('service-id');
    $('#acceptModal').modal('hide');
            
            // Reset aria-hidden attribute
            $('#acceptModal').attr('aria-hidden', 'true');
    // Make AJAX request to accept the service
    Swal.fire({
        title: "Please wait...",
        html: "Processing your request...",
        icon: "info",
        showConfirmButton: false,
        allowOutsideClick: false
    });

    
    $.ajax({
        type: 'POST',
        url: url,
        data: {
            user_id: userId,
            client_id: clientId,
            service_id: serviceId,
            _token:csrfToken

        },
        success: function (response) {
            // Handle success response
            console.log(response);
            
            // Hide the modal using Bootstrap's modal('hide') method
         
            
            // Show success pop-up using SweetAlert2
          
            Swal.fire({
                title: "Success!",
                text: "The service has been accepted. CHECK YOUR EMAIL !!!",
                icon: "success",
                showClass: {
                    popup: `
                        animate__animated
                        animate__fadeInUp
                        animate__faster
                    `
                },
                hideClass: {
                    popup: `
                        animate__animated
                        animate__fadeOutDown
                        animate__faster
                    `
                },
                willClose: function () {
        // Reload the page
        location.reload();
    }
            }); 
        },
        
        error: function (xhr, status, error) {
            // Handle error response
            console.error(xhr.responseText);
        }
    });
});
