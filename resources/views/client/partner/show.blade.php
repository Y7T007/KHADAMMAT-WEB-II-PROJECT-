<!DOCTYPE html>
<html lang="en">
<head>
@include('client.head')

<title>Profil de {{ $partner->name }}</title>
<style>
        .gradient-custom {
          background: linear-gradient(70deg, #d2b55b 40%, #a3c1da 100%);
        }
        .card {
            border: none;
            border-radius: 15px; /* Coins plus arrondis */
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1); /* Ombre plus douce */
            width: 100%; /* Plus large */
        }
        .profile-img {
            width: 220px; /* Image plus grande */
            height: 250px;
            border-radius: 15%; /* Moins circulaire */
            margin-top: 20px; /* Ajustement selon la taille */
            border: 5px solid white; /* Bordure pour faire ressortir l'image sur le fond gradient */
        }
        /* Amélioration générale du style du texte et des marges pour un look plus aéré */
        h6, p {
            color: #333; /* Couleur de texte plus douce */
            margin-bottom: 25px;
        }
        h5{
            margin-top: 20px;
        }
        .infos{
        font-size: 18px; /* Taille de la police */
        color: #333; /* Couleur du texte */
        font-family: 'Arial', sans-serif; /* Type de police */
        font-weight: bold; /* Poids de la police */
        text-align: center; /* Alignement du texte */
        padding: 10px; /* Espacement interne */
        background-color: #f7f4b5; /* Couleur de fond */
        border: 2px solid #d2b55b; /* Bordure */
        border-radius: 5px; /* Arrondissement des coins */

        }
        .col-6.mb-3 {
        background-color: #f9f9f9; /* Couleur de fond de la div */
        padding: 15px; /* Espacement interne */
        border: 1px solid #ddd; /* Bordure subtile */
        border-radius: 8px; /* Bords arrondis */
        margin-bottom: 15px; /* Marge en dessous de la div */
    }

    .col-6.mb-3 h6 {
        font-size: 16px; /* Taille de la police pour h6 */
        color: #333; /* Couleur du texte */
        margin-bottom: 5px; /* Marge en dessous du h6 */
    }

    .col-6.mb-3 .text-muted {
        font-size: 14px; /* Taille de la police pour p */
        color: #666; /* Couleur de texte plus claire pour p */
    }
    section.vh-100 {
        padding-top: 54px; /* Ajustez cette valeur selon la hauteur de votre header */
    }
       h6 {
            color: #4A4A4A;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin-top: 20px;
            margin-bottom: 5px;
        }

        .text-muted {
            color: #6c757d;
            font-size: 14px;
            margin-bottom: 15px;
        }/*commenter h6 et .text-muted pour augmenter la taille de card de profile*/
    </style>
</head>
<body>
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
        <header class="topbar" data-navbarbg="skin6">
            <nav class="navbar top-navbar navbar-expand-lg">
                <div class="navbar-header" data-logobg="skin6">
                    <!-- This is for the sidebar toggle which is visible on mobile only -->
                    <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                            class="ti-menu ti-close"></i></a>
                    <!-- ============================================================== -->
                    <!-- Logo -->
                    <!-- ============================================================== -->
                    <div style="background-color: #ffca2bd1;" class="navbar-brand">
                        <!-- Logo icon -->
                        <a href="index.html">
                            <img style="width: 65px;" src="../Partenaire/assets/images/logo.jpeg" alt="" class="img-fluid">
                        </a>
                    </div>
                    <!-- ============================================================== -->
                    <!-- End Logo -->
                    <!-- ============================================================== -->
                    <!-- ============================================================== -->
                    <!-- Toggle which is visible on mobile only -->
                    <!-- ============================================================== -->
                    <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                        data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                            class="ti-more"></i></a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse collapse" id="navbarSupportedContent">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-left me-auto ms-3 ps-1">
                        <!---->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- Right side toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav float-end">
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>

                        <li style="display: flex;flex-direction: column; justify-content: center;align-items: center">

                            <button type="button" class="btn position-relative">
                                <a href="notifications" class="nav-link dropdown-toggle " aria-haspopup="true"
                                   aria-expanded="false">
                                    <img src="https://img.icons8.com/ios/25/000000/appointment-reminders.png" alt="Notification Bell">
                                    <span class="position-absolute top-20 start-80 translate-middle p-2 bg-danger border border-light rounded-circle">
                                    <span class="visually-hidden">New alerts</span>
                                </span>
                                </a>
                            </button>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">

                                <img style="object-fit: cover" src="{{Storage::url($client->profile_picture)}}" onerror="this.onerror=null; this.src='../Partenaire/assets/images/users/2.jpg'" class="rounded-circle" width="40" height="40">
                                <span class="ms-2 d-none d-lg-inline-block"><span>Hello,</span> <span class="text-dark">{{$client-> name}}</span> <i data-feather="chevron-down" class="svg-icon"></i></span>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                                <a class="dropdown-item" href="../client/profile"><i data-feather="user" class="svg-icon me-2 ms-1"></i> My Profile</a>

                                <a class="dropdown-item" href="../client/profile_edit"><i data-feather="user" class="svg-icon me-2 ms-1"></i>Update My Profile</a>


                                <a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="dropdown-item"><i data-feather="power" class="svg-icon me-2 ms-1"></i> Logout</a>
                                <div class="dropdown-divider"></div>
                            </div>
                        </li>

                        <!-- ============================================================== -->
                        <!-- User profile and search -->
                        <!-- ============================================================== -->
                    </ul>
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
@include('client.sidebar')

        <section class="vh-100" style="background-color: #f4f5f7;">
          <div class="container py-5 h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
              <div class="col col-lg-8 mb-4">
                <div class="card mb-3" style="border-radius: .5rem;">
                  <div class="row g-0">
                    <div  class="col-md-4 gradient-custom text-center text-white" style="border-top-left-radius: .5rem; border-bottom-left-radius: .5rem;">
                        <img src="{{ Storage::url($partner->profile_photo_path) }}" alt="{{ $partner->name }}"  class="img-fluid profile-img">
                        <h5>{{ $partner->name }}</h5>
                        <p>{{ $partner->location_city }}</p>
                    </div>
                    <div class="col-md-8">
                        <div class="card-body p-4">
                        <h6 class="infos">Profile</h6>
                        <hr class="mt-0 mb-4">
                        <div class="row pt-1">
                          <div class="col-6 mb-3">
                            <h6>Email</h6>
                            <p class="text-muted">{{ $partner->email }}</p>
                          </div>
                          <div class="col-6 mb-3">
                            <h6>Company name</h6>
                            <p class="text-muted">{{ $partner->company_name ?? 'N/A' }}</p>

                          </div>
                          <h6>Domaines d'expertise</h6>
                            <p class="text-muted">
                                @foreach ($partner->services as $s)
                                    {{ $s->nom }}@if (!$loop->last),@endif
                                @endforeach
                            </p>

                            <h6>Années d'expérience</h6>
                            <p class="text-muted">{{ $partner->years_of_experience ?? 'Non spécifié' }} ans</p>

                            <h6>Disponibilité</h6>
                            <p class="text-muted">{{ $partner->availability_status ? 'Disponible' : 'Non disponible' }}</p>

                            <h6>Taux de satisfaction</h6>
                            <p class="text-muted">{{ $partner->rate ?? 'Non évalué' }}</p>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
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
