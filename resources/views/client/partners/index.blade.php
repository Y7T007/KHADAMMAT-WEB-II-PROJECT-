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
    <link href="../Partenaire/dist/css/style.min.css" rel="stylesheet">

    <!-- Custom Styles for Cards -->

</head>
<style>
/* Base settings for the card layout */
.card {
    border: none;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    transition: all 0.3s ease-in-out;
}
.card {
    margin: 10px;
    padding: 10px;
    border: 1px solid #ccc8;
    box-shadow: 2px 2px 5px rgba(0,0,0,0.1);
}


.card:hover {
    transform: translateY(-5px);
    box-shadow: 0 6px 12px rgba(0,0,0,0.2);
}

.card-img-top {
    border-top-left-radius: 10px;
    border-top-right-radius: 10px;
    height: 180px;
    object-fit: cover; /* Ensures that images are not distorted */
}

.card-body {
    padding: 15px;
}

/* Adjusted styles for profile images */
.card .profile-img {
    width: 250px; /* Increased width */
    height: 250px; /* Increased height */
    margin-top: -160px; /* Adjusted to new size */
    border-radius: 10px; /* Rounded corners but not fully circular */
    border: 5px solid none;
    box-shadow: 0 2px 6px rgba(0,0,0,0.3);
}

.card-title {
    margin-top: 15px;
}

.card-text {
    color: #555;
}

/* Styling for footer buttons and overall card footer */
.card-footer {
    background-color: white;
    border-top: none;
    padding-top: 15px;
    padding-bottom: 15px;
}

.card-footer .btn {
    border: none;
}
.btn-follow {
    background-color: #4CAF50; /* Green background */
    color: gray; /* White text */
    font-weight: bold; /* Bold font for emphasis */
    border: none; /* No border */
    padding: 10px 20px; /* Top and bottom padding, left and right padding */
    text-transform: uppercase; /* Uppercase text */
    border-radius: 5px; /* Rounded corners */
    box-shadow: 0 2px 5px rgba(0, 0, 0, 0.2); /* Subtle shadow */
    transition: background-color 0.3s, box-shadow 0.3s; /* Smooth transition for hover effects */
    display: inline-flex; /* Aligns icon and text horizontally */
    align-items: center; /* Center alignment of the icon and text vertically */
    justify-content: center; /* Center content horizontally */
}



.btn-follow:hover, .btn-follow:focus {
    background-color: #45a049; /* Slightly darker green on hover/focus */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3); /* Larger shadow on hover/focus */
    text-decoration: none; /* Remove underline from focus */
}
.input-group {
    padding: 10px;
    width: 100%;
}

.input-group .form-control {
    border: 1px solid #ccc;
    border-radius: 5px;
    padding: 10px;
}

.input-group-text {
    background: #4CAF50;
    border: none;
    color: white;
    cursor: pointer;
}
.main-body.container {
    padding: 20px 50px; /* Ajustez ces valeurs selon besoin */
}

.card {
    margin: 20px; /* Augmentation de la marge pour plus d'espace entre les cartes */
}

@media (max-width: 768px) {
    .main-body.container {
        padding: 20px 15px; /* Moins de padding sur les petits écrans */
    }
}

</style>

<body>
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

    @include('client.header')
    @include('client.sidebar')

    <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
    <div class="row align-items-center">
        <div class="col-md-6 col-8 align-self-center">
            <h3 class="page-title mb-0 p-0">Partenaires</h3>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Accueil</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Partenaires</li>
                </ol>
            </nav>
        </div>
        <div class="col-md-6 col-4 align-self-center">
            <div class="input-group mb-3">
    <input type="text" id="searchInput" class="form-control" placeholder="Recherche par nom, ville ou domaine..." aria-label="Recherche par nom, ville ou domaine" aria-describedby="button-addon2">
    <button class="btn btn-outline-secondary" type="button" id="button-addon2"><i class="fas fa-search"></i></button>
</div>

        </div>
    </div>
</div>

<div class="row">
    <div class="main-body container">
        <div class="row gutters-sm" id="cardsContainer">
            @foreach ($partners as $partner)
                <div class="col-md-4 mb-3">
                    <div class="card h-100" data-name="{{ $partner->name }}" data-city="{{ $partner->location_city }}" data-domain="{{ $services[$partner->id]['nom'] }}">
                        <img src="{{ asset('storage/profile_pictures/cover.jpg') }}" alt="Cover" class="card-img-top">
                        <div class="card-body text-center">
                            <img src="{{ Storage::url($partner->profile_photo_path) }}" alt="{{ $partner->name }}" class="img-fluid img-thumbnail profile-img">
                            <h5 class="card-title">{{ $partner->name }}</h5>
                            <p class="text-secondary mb-1">
                                {{ $services[$partner->id]['nom'] }} ;
                                {{ $services[$partner->id]['nom'] }}
                            </p>
                            <p class="text-muted font-size-sm">{{ $partner->location_city }}</p>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-follow btn-sm bg-white has-icon btn-block view-profile-btn" data-partner-id="{{ $partner->id }}">
                                Voir profil
                            </button>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
<!-- Bootstrap JS -->
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
    <script>
document.addEventListener('DOMContentLoaded', function() {
    function filterCards() {
        var input = document.getElementById('searchInput');
        var filter = input.value.toUpperCase();
        var cardsContainer = document.getElementById('cardsContainer');
        var cards = cardsContainer.getElementsByClassName('card');

        for (var i = 0; i < cards.length; i++) {
            var name = cards[i].getAttribute('data-name');
            var city = cards[i].getAttribute('data-city');
            var domain = cards[i].getAttribute('data-domain');
            if (name.toUpperCase().includes(filter) || city.toUpperCase().includes(filter) || domain.toUpperCase().includes(filter)) {
                cards[i].style.display = "";
            } else {
                cards[i].style.display = "none";
            }
        }
    }

    document.getElementById('searchInput').addEventListener('keyup', filterCards);
});
</script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    var viewProfileButtons = document.querySelectorAll('.view-profile-btn');
    viewProfileButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            var partnerId = this.getAttribute('data-partner-id');
            window.location.href = '{{ url("partners") }}/' + partnerId;
        });
    });
});

</script>

</body>
</html>

