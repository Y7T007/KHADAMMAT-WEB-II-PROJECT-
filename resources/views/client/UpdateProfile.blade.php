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
    <!-- Custom CSS -->
    <link href="Partenaire/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
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

        @include('client.header')

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('client.sidebar')
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Client</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Client</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Update Profile</li>
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
                                    <h4 class="card-title">Informations</h4>
                                    <form action="{{ route('update.profile') }}" method="POST"
                                        enctype="multipart/form-data">

                                        @csrf <!-- Ajoutez ceci pour la protection CSRF, si vous utilisez Laravel -->
                                        <div class="mb-3">
                                            <label for="nom" class="form-label">name:</label><br>
                                            <input type="text" class="form-control" id="name" name="name"
                                                placeholder="Entrez votre nom" value="{{ $client->name }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="email" class="form-label">Email :</label>
                                            <input type="email" class="form-control" id="email" name="email"
                                                placeholder="Entrez votre email" value="{{ $client->email }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="mot_de_passe" class="form-label">Mot de passe :</label>
                                            <input type="password" class="form-control" id="mot_de_passe"
                                                name="mot_de_passe" placeholder="enter new password">
                                        </div>
                                        <div class="mb-3">
                                            <label for="metier" class="form-label">ville :</label>
                                            <input type="text" class="form-control" id="metier" name="metier"
                                                placeholder="Entrez votre ville" value="{{ $client->ville }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="ville" class="form-label">adresse :</label>
                                            <input type="text" class="form-control" id="ville" name="ville"
                                                placeholder="Entrez votre ville" value="{{ $client->address }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="annees_experience" class="form-label">Date de naissance
                                                :</label>
                                            <input type="number" class="form-control" id="date_naissance"
                                                name="date_naissance"
                                                placeholder="Entrez le nombre d'années d'expérience"
                                                value="{{ $partenaire->annee_experience }}">
                                        </div>
                                        <div class="mb-3">
                                            <label for="adresse" class="form-label">nombre  :</label>
                                            <input type="text" class="form-control" id="adresse" name="adresse"
                                                placeholder="Entrez votre adresse" value="{{ $partenaire->address }}">
                                        </div>

                                        <div class="mb-3">
                                            <label for="image" class="form-label">Image :</label>
                                            <input type="file" class="form-control" id="image"
                                                name="image">
                                        </div>
                                        <div class="text-center">
                                            <button type="submit" style="width: 250px"
                                                class="btn btn-warning btn-rounded">Update</button>
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
</body>

</html>
