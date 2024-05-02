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
 <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('Partenaire/assets/images/logo.jpeg') }}">
<title>Khadamt</title>
<!-- Custom CSS -->
<link rel="stylesheet" href="{{ asset('Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.css') }}">
<link rel="stylesheet" href="{{ asset('Partenaire/dist/css/style.min.css') }}">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<style>

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
                                    <li class="breadcrumb-item text-muted" aria-current="page">Mes Service</li>
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
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Service</h4>
                                <form action="/updateService/{{ $service->id }}" method="GET">

                                    <!-- Assurez-vous de définir l'action et la méthode appropriées pour votre application -->
                                    @csrf <!-- Ajoutez ceci pour la protection CSRF, si vous utilisez Laravel -->
                                    <div class="mb-3">
                                        <label for="nom" class="form-label">Nom :</label>
                                        <div class="output"> <h5>{{ $service->nom }}</h5></div>
                                       
                                    </div>
                                    <div class="mb-3">
                                        <label for="description" class="form-label">Description :</label>
                                        <div class="output"> <h5>{{ $service->description }}</h5></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="metier" class="form-label">Catégorie :</label>
                                        <div class="output"> <h5>{{ $service->categorie }}</h5></div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="adresse" class="form-label">Prix d'Intervention :</label>
                                        <div class="output"> <h5>{{ $service->prix }} Dh</h5></div>
                                    </div>
                                   
                                    
                                    <div style="margin-top: 30px" class="text-center"> <!-- Div pour centrer le bouton -->
                                        <button  style="width: 200px" class="btn btn-primary btn-rounded">Update</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            


            

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
    <script src="{{ asset('Partenaire/assets/libs/jquery/dist/jquery.min.js') }}"></script>
    <script src="{{ asset('Partenaire/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js') }}"></script>
    <script src="{{ asset('Partenaire/assets/extra-libs/taskboard/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('Partenaire/assets/libs/popper.js/dist/umd/popper.min.js') }}"></script>
    <script src="{{ asset('Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
    <!-- apps -->
    <script src="{{ asset('Partenaire/dist/js/app-style-switcher.js') }}"></script>
    <script src="{{ asset('Partenaire/dist/js/feather.min.js') }}"></script>
    <script src="{{ asset('Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js') }}"></script>
    <script src="{{ asset('Partenaire/dist/js/sidebarmenu.js') }}"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('Partenaire/dist/js/custom.min.js') }}"></script>
    <!--This page JavaScript -->
    <script src="{{ asset('Partenaire/assets/libs/moment/min/moment.min.js') }}"></script>
    <script src="{{ asset('Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ asset('Partenaire/dist/js/pages/calendar/cal-init.js') }}"></script>
    
</body>

</html>