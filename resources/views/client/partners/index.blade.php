<!DOCTYPE html>
<html dir="ltr" lang="en">
@include('client.head')
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
<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

    @include('client.header')
    @include('client.sidebar')

    <div class="page-wrapper">
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
                            <div class="card h-100" data-name="{{ $partner->name }}" data-city="{{ $partner->location_city }}" data-domain="{{ $partner->services->pluck('name')->join(', ') }}">
                                <img src="{{ asset('storage/profile_pictures/cover.jpg') }}" alt="Cover" class="card-img-top">
                                <div class="card-body text-center">
                                    <img src="{{ Storage::url($partner->profile_photo_path) }}" alt="{{ $partner->name }}" class="img-fluid img-thumbnail profile-img">
                                    <h5 class="card-title">{{ $partner->name }}</h5>
                                    <p class="text-secondary mb-1">
                                        @foreach ($partner->services as $s)
                                            {{ $s->nom }}
                                            @if (!$loop->last)
                                                ,
                                            @endif
                                        @endforeach
                                        @if ($partner->services->count() == 0)
                                            Aucun service offert pour le moment
                                        @endif
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
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="../Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="../Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../Partenaire/dist/js/app-style-switcher.js"></script>
    <script src="../Partenaire/dist/js/feather.min.js"></script>
    <script src="../Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="../Partenaire/dist/js/sidebarmenu.js"></script>
    <script src="../Partenaire/dist/js/custom.min.js"></script>
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
