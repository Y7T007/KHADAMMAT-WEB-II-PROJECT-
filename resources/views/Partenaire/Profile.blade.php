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
    <title>Freedash Template - The Ultimate Multipurpose admin template</title>
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
                                    <li class="breadcrumb-item text-muted" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
                <div class="row mt-5">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informations personnelles</h4>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label for="image">Image</label>
                                        <div class="custom-file">
                                            <img style="border-radius: 50% ; width:200px ; margin-left:30px ; margin-top:10px ; margin-bottom:20px"  src="Partenaire/assets/images/users/5.jpg" alt="">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <div class="output2"> <h4>Omar</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="prenom">Prénom</label>
                                        <div class="output2"> <h4>Abarra</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="output2"> <h4>omar.abarra@example.com</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_de_passe">Mot de passe</label>
                                        <div class="output2"> <h4>*********</h4></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informations professionnelles</h4>
                                <form class="mt-4">
                                    <div class="form-group">
                                        <label for="metier">Métier</label>
                                        <div class="output2"> <h4>Développeur Web</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ville">Ville</label>
                                        <div class="output2"> <h4>Paris</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="annees_experience">Années d'expérience</label>
                                        <div class="output2"> <h4>5 ans</h4></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-6">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="card-title">Note et commentaires</h4>
                                        <form class="mt-4">
                                            <div class="form-group">
                                                <label for="note_moyenne">Note moyenne</label>
                                                <div class="slide-reviews__rating">
                                                    <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                                                    <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                                                    <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                                                    <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                                                    <img src="Page_Principale/images/reviews/star-grey.svg" alt="gray star" />
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="nombre_commentaires">Nombre de commentaires</label>
                                                <div class="output2"> <h4>15 commentaires</h4></div>
                                            </div>
                                        </form>
                                    </div>
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