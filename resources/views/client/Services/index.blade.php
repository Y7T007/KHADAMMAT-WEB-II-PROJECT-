<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('client.head')

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


    @include('client.header')


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
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html">Services</a>
                                </li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!---->
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- *************************************************************** -->
            <!-- Start First Cards -->
            <!-- *************************************************************** -->


            <section class="service_section layout_padding">
                <div class="container">
                    <h2 class="custom_heading">Nos Services</h2>
                    <p class="custom_heading-text"> Explorez notre sélection de services à domicile de qualité. Des experts compétents pour chaque besoin, un confort sans souci pour vous. Découvrez nos services dès aujourd'hui et simplifiez votre vie ! </p>
                    <div class="search-box">
                        <button class="btn-search"><i class="fas fa-search"></i></button>
                        <input type="text" class="input-search" id="searchInput" placeholder="Type to Search...">
                    </div>
                    <div class="row" id="serviceCards">
                        <?php
                        // Read the JSON file
                        $json = file_get_contents('./Services/services.json');

                        // Decode the JSON into a PHP object
                        $services = json_decode($json);

                        // Loop through the services
                        foreach ($services->services as $service) {
                            // Generate the HTML for the service card
                            echo '
            <div class="col-md-4 service-card">
                <div class="nft">
                    <div class="main justify-content-center justify-self-auto" style="width: 100%;height:500px;">
                        <img class="tokenImage" width="100%" src="' . $service->url_icone . '" alt="' . $service->nom . '">
                        <h2>' . ($service->nom) . '</h2>
                        <p class="description">' . $service->sous_titre . '</p>
                        <div class="tokenInfo">
                            <div class="price">
                                <p>Partenaires :&nbsp;&nbsp;' . $service->partenaires . '</p>
                            </div>
                            <div class="duration">
                                <p>' . $service->temps_moyen . '</p>
                            </div>
                        </div>
                        <hr>
                    </div>
                </div>
            </div>
        ';
                        }
                        ?>
                    </div>

                    <script>
                        // Function to handle search functionality
                        function searchServices() {
                            // Declare variables
                            var input, filter, cards, card, title, i, txtValue;
                            input = document.getElementById("searchInput");
                            filter = input.value.toUpperCase();
                            cards = document.getElementsByClassName("service-card");

                            // Loop through all service cards, and hide those that don't match the search query
                            for (i = 0; i < cards.length; i++) {
                                card = cards[i];
                                title = card.getElementsByTagName("h2")[0];
                                txtValue = title.textContent || title.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    card.style.display = "";
                                } else {
                                    card.style.display = "none";
                                }
                            }
                        }

                        // Add event listener for input change
                        document.getElementById("searchInput").addEventListener("input", searchServices);
                    </script>

                    <div class="d-flex justify-content-center"><a href="" class="custom_dark-btn"> Read More </a></div>
                </div>
            </section>

            <section class="container-fluid footer_section">
                <p> Copyright © 2024 All Rights Reserved</p>
            </section>
            <script>
                // This example adds a marker to indicate the position of Bondi Beach in Sydney,
                // Australia.
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 11,
                        center: {
                            lat: 40.645037,
                            lng: -73.880224
                        },
                    });

                    var image = 'images/maps-and-flags.png';
                    var beachMarker = new google.maps.Marker({
                        position: {
                            lat: 40.645037,
                            lng: -73.880224
                        },
                        map: map,
                        icon: image
                    });
                }
            </script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery-3.4.1.min.js"></script>
            <script src="assets/js/bootstrap.js"></script>



            <div class="row">

            </div>
            <!-- *************************************************************** -->
            <!-- End Top Leader Table -->
            <!-- *************************************************************** -->
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
<!-- End Wrapper -->
<!-- ============================================================== -->
<!-- All Jquery -->
<!-- ============================================================== -->
<script src="../Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
<script src="../Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="../Partenaire/dist/js/app-style-switcher.js"></script>
<script src="../Partenaire/dist/js/feather.min.js"></script>
<script src="../Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../Partenaire/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../Partenaire/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../Partenaire/assets/extra-libs/c3/d3.min.js"></script>
<script src="../Partenaire/assets/extra-libs/c3/c3.min.js"></script>
<script src="../Partenaire/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="../Partenaire/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="../Partenaire/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../Partenaire/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="../Partenaire/dist/js/pages/dashboards/dashboard1.min.js"></script>
<script>
    let currentStep = 1;
    const totalSteps = 3;

    function nextStep() {
        // Hide current step
        document.getElementById('step' + currentStep).style.display = 'none';

        // Increment current step
        currentStep++;

        // If we're past the last step, wrap around to the first step
        if (currentStep > totalSteps) {
            currentStep = 1;
        }

        // Show next step
        document.getElementById('step' + currentStep).style.display = 'block';
    }
</script>
</body>

</html>
