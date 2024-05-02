// delete-comment.js

var csrfToken = $('meta[name="csrf-token"]').attr('content');

$('#DeleteModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var commentId = button.data('comment-id');
    var url = button.data('url');
    var modal = $(this);
    modal.find('.btn-danger').attr('data-comment-id', commentId);
    modal.find('.btn-danger').attr('data-url', url);
});

$('.btn-danger').on('click', function () {
    var commentId = $(this).data('comment-id');
    var url = $(this).data('url');
    $('#DeleteModal').modal('hide');

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
            comment_id: commentId,
            _token: csrfToken
        },
        success: function (response) {
            console.log(response);

            Swal.fire({
                title: "Deleted!",
                text: "The comment has been deleted.",
                icon: "success",
                showClass: {
                    popup: `animate__animated animate__fadeInUp animate__faster`
                },
                hideClass: {
                    popup: `animate__animated animate__fadeOutDown animate__faster`
                },
                willClose: function () {
                    // Reload the page or update the comments dynamically
                    location.reload();
                }
            });
        },
        error: function (xhr, status, error) {
            console.error(xhr.responseText);
        }
    });
});
