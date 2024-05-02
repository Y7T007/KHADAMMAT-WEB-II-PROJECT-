<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="Partenaire/assets/images/logo.jpeg">
    <title>Khadamt</title>
    <!-- Custom CSS -->
    <link href="Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Custom CSS -->
    <link href="Partenaire/dist/css/style.min.css" rel="stylesheet">
<style>
    /* Ajoutez ici vos styles personnalisés pour rendre le formulaire plus attrayant */
    .form-label {
        color: #333; /* Couleur du texte pour les labels */
    }
    .form-control {
        border-color: #ccc; /* Couleur de la bordure des champs */
        border-radius: 8px; /* Bordure arrondie pour les champs */
    }
    .btn-primary {
        background-color: #007bff; /* Couleur de fond pour le bouton de soumission */
        border-color: #007bff; /* Couleur de bordure pour le bouton de soumission */
    }
    .btn-primary:hover {
        background-color: #0056b3; /* Couleur de fond au survol du bouton */
        border-color: #0056b3; /* Couleur de bordure au survol du bouton */
    }
</style>


</head>

<body>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        @include('Partenaire.header')
        
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('Partenaire.sidebar')
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Partenaire</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Partenaire</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Ajouter Service</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- Insérez ce formulaire à l'endroit où vous souhaitez afficher les informations -->
            <form id="addServiceForm" action="{{ route('ajouter_service') }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="categorie" class="form-label">Catégorie :</label>
        <select class="form-select" id="categorie" name="categorie">
            <option value="Catégorie1">Catégorie1</option>
            <option value="Catégorie2">Catégorie2</option>
        </select>
    </div>

    <div class="mb-3">
        <label for="Services" class="form-label">Services :</label>
        <select class="form-select" id="service" name="service">
        </select>
    </div>

    <div class="mb-3">
        <label for="description" class="form-label">Description :</label>
        <input type="text" class="form-control" id="description" name="description" placeholder="Entrez la description">
    </div>

    <div class="mb-3">
        <label for="prix" class="form-label">Prix :</label>
        <input type="text" class="form-control" id="prix" name="prix" placeholder="Entrez le prix">
    </div>

    <!-- Add button to trigger confirmation modal -->
    <div style="margin-top: 30px" class="text-center">
        <button type="button" style="width: 200px" class="btn btn-primary btn-rounded" data-bs-toggle="modal" data-bs-target="#confirmationModal">Add</button>
    </div>
</form>

<!-- Confirmation Modal -->
<div class="modal fade" id="confirmationModal" tabindex="-1" aria-labelledby="confirmationModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="confirmationModalLabel">Confirmation</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p id="confirmationMessage"></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary" id="confirmAddService">Confirm</button>
            </div>
        </div>
    </div>
</div>

<script>
    // Function to trigger change event on category select
    function triggerChange() {
        var event = new Event('change');
        document.getElementById('categorie').dispatchEvent(event);
    }

    // Add event listener to trigger change event on page load
    window.addEventListener('load', function() {
        triggerChange();
    });

    // Add event listener to category select
    document.getElementById('categorie').addEventListener('change', function() {
        var categorie = this.value;
        var serviceSelect = document.getElementById('service');
        serviceSelect.innerHTML = '';

        if (categorie === 'Catégorie1') {
            var options = '<option value="service1">Service 1</option><option value="service2">Service 2</option>';
            serviceSelect.innerHTML = options;
        } else if (categorie === 'Catégorie2') {
            var options = '<option value="service3">Service 3</option><option value="service4">Service 4</option>';
            serviceSelect.innerHTML = options;
        }
    });



</script>


<script>
    $(document).ready(function() {
        // When the Add button is clicked, prepare and show the confirmation modal
        $('#addServiceForm button[type="button"]').click(function() {
            var categorie = $('#categorie').val();
            var service = $('#service').val();
            var description = $('#description').val();
            var prix = $('#prix').val();
            var confirmationMessage = 'Are you sure you want to add the service with the following details?\n\nCategory: ' + categorie + '\nService: ' + service + '\nDescription: ' + description + '\nPrice: ' + prix;
            $('#confirmationMessage').text(confirmationMessage);
        });

        // When the confirmation button in the modal is clicked, submit the form
        $('#confirmAddService').click(function() {
            // Submit the form via AJAX
            $.ajax({
                type: 'POST',
                url: $('#addServiceForm').attr('action'),
                data: $('#addServiceForm').serialize(),
                success: function(response) {
                    // Show success alert
                    Swal.fire({
                        title: "Success!",
                        text: "The service has been added successfuly",
                        icon: "success"
                    });
                    // Optionally, you can perform additional actions after successful submission
                },
                error: function(xhr, status, error) {
                    // Handle error response
                    var errorMessage = xhr.responseJSON.message;
                    Swal.fire({
                        title: "Error!",
                        text: "This service does Already exists",
                        icon: "error"
                    });
                }
            });
            // Close the modal after submission
            $('#confirmationModal').modal('hide');
        });
    });
</script>





            

            

            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
           <!---->
            <!-- ============================================================== -->
            <!-- End footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
    </div>
    
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="Partenaire/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="Partenaire/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="Partenaire/dist/js/app-style-switcher.js"></script>
    <script src="Partenaire/dist/js/feather.min.js"></script>
    <script src="Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="Partenaire/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="Partenaire/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="Partenaire/assets/libs/moment/min/moment.min.js"></script>
    <script src="Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="Partenaire/dist/js/pages/calendar/cal-init.js"></script>
<!-- Add this script at the end of your HTML file -->


    
</body>

</html>