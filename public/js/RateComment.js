
var csrfToken = $('meta[name="csrf-token"]').attr('content');
$('#CommentModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var url = button.data('url');

    var userId = button.data('user-id');
    var clientId = button.data('client-id');
    var demandeId = button.data('demande-id');

    console.log("User ID:", userId);
    console.log("Demande ID:", demandeId);
    console.log("URL:", url);
    $('.btn-success').attr('data-url', url);
    $('.btn-success').attr('data-user-id', userId);
    $('.btn-success').attr('data-client-id', clientId);
    $('.btn-success').attr('data-demande-id', demandeId);
});

$('.btn-success').on('click', function () {
    var userId = $(this).attr('data-user-id');
    var clientId = $(this).attr('data-client-id');
    var demandeId = $(this).attr('data-demande-id');
    var url = $(this).attr('data-url');
    var content = $('#comment').val();
    var rating = $('input[name="product_rating"]:checked').val();
    $('#CommentModal').modal('hide');
            
    // Make AJAX request to submit the comment and rating
    // Display a loading message while waiting for the response
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
            demande_id: demandeId,
            content: content,
            rating: rating,
            client_id: clientId,
            // Include other data related to comment and rating
            _token: csrfToken
        },
        success: function (response) {
            // Handle success response
            // Show success message
            Swal.fire({
                title: "Submitted!",
                text: "Your comment and rating have been submitted successfully.",
                icon: "success",
                willClose: function () {
                    // Reload the page or update the comments dynamically
                    location.reload();
                }
                
            });
            // Optionally, you can perform additional actions after successful submission
        },
        
        error: function (xhr, status, error) {
            // Handle error response
            console.error(xhr.responseText);
            // Show error message
            Swal.fire({
                title: "Error!",
                text: "An error occurred while processing your request.",
                icon: "error"
            });
        }
    });
});
