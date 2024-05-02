
var csrfToken = $('meta[name="csrf-token"]').attr('content');
$('#DeactivateModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var userId = button.data('user-id');
    var url = button.data('url');
    var modal = $(this);
    modal.find('.btn-danger').attr('data-user-id', userId);
    modal.find('.btn-danger').attr('data-url', url);
});
$('.btn-danger').on('click', function () {
    var userId = $(this).data('user-id');
    var url = $(this).data('url');
    $('#DeactivateModal').modal('hide');
            
            // Reset aria-hidden attribute
            $('#DeactivateModal').attr('aria-hidden', 'true');
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
            _token: csrfToken

        },
        success: function (response) {
            // Handle success response
            console.log(response);
            
            // Hide the modal using Bootstrap's modal('hide') method
         
            
            // Show success pop-up using SweetAlert2
          
            Swal.fire({
                title: "Deactivated!",
                text: "The user has been deactivated .!!!",
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