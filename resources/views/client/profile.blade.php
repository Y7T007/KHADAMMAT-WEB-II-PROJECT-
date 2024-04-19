<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('client.head')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../Partenaire/assets/images/logo.jpeg">
    <title>Freedash Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../Partenaire/dist/css/style.min.css" rel="stylesheet">
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1"><h2>Client</h2></h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">client</li>
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
    @if($client->profile_picture)
        <img style="border-radius: 50%; width: 200px; margin-left: 30px; margin-top: 10px; margin-bottom: 20px;" src="{{ Storage::url($client->profile_picture) }}" alt="Photo de profil">
    @else
        <p>Aucune image de profil disponible</p>
    @endif
    </div>
</div>


                                    <div class="form-group">
                                        <label for="nom">Nom</label>
                                        <div class="output2"> <h4>{{$client->name}}</h4></div>
                                    </div>

                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <div class="output2"> <h4>{{$client->email}}</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_de_passe">Genre</label>
                                        <div class="output2"> <h4>{{$client->genre}}</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_de_passe">Téléphone</label>
                                        <div class="output2"> <h4>{{$client->phone_number}}</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_de_passe">Date de Naissance</label>
                                        <div class="output2"> <h4>{{$client->date_naissance}}</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_de_passe">ville</label>
                                        <div class="output2"> <h4>{{$client->ville}}</h4></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_de_passe">adresse</label>
                                        <div class="output2"> <h4>{{$client->address}}</h4></div>
                                    </div>

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
    <div class="card">
        <div class="card-body">
            <h4 class="card-title">Informations Maison</h4>
            <form class="mt-4">
                <div class="form-group">
                    <label for="metier">superficie</label>
                    <div class="output2"> <h4>{{$client->superficie}} m²</h4></div>
                </div>
                <div class="form-group">
                    <label for="metier">Nombre des chambres</label>
                    <div class="output2"> <h4>{{$client->nb_chambres}}</h4></div>
                </div>
                <div class="form-group">
                    <label for="ville">Nombre du bain</label>
                    <div class="output2"> <h4>{{$client->nb_bain}}</h4></div>
                </div>

                @if($client->Garage)
                <div class="form-group">
                    <label for="garage">Garage</label>
                    <div class="output2"> <h4>Oui</h4></div>
                </div>
                @endif
                @if($client->jardin)
                <div class="form-group">
                    <label for="jardin">Jardin</label>
                    <div class="output2"> <h4>Oui</h4></div>
                </div>
                @endif

                <div class="form-group">
                    <label for="annees_experience">Appareils électroniques</label>
                    @if($client->television)
                    <div class="output2"> <h4>Télévision</h4></div>
                    @endif
                    @if($client->machine_a_laver)
                    <div class="output2"> <h4>Machine à laver</h4></div>
                    @endif
                    @if($client->refrigirateur)
                    <div class="output2"> <h4>Réfrigérateur</h4></div>
                    @endif
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
    <script src="../Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="../Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="../Partenaire/dist/js/app-style-switcher.js"></script>
    <script src="../Partenaire/dist/js/feather.min.js"></script>
    <script src="../Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../Partenaire/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="../Partenaire/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="../Partenaire/assets/libs/moment/min/moment.min.js"></script>
    <script src="../Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="../Partenaire/dist/js/pages/calendar/cal-init.js"></script>
</body>

</html>
