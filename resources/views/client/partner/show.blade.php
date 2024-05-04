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

@include('client.header')
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
        @foreach ($partner->professionalAreas as $area)
            {{ $area->domain }}@if (!$loop->last),@endif
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
