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
                                <li class="breadcrumb-item"><a href="index.html">Home</a>
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

            <div class="hero_area">
                <header class="header_section"></header>
                <section class="slider_section position-relative">
                    <div class="carousel slide" data-bs-ride="false" data-ride="carousel" id="carouselExampleControls">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="slider_item-box">
                                    <div class="slider_item-container">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="slider_item-detail">
                                                        <div>
                                                            <h1>Bonjour Mr. {{$client->name}}</h1>
                                                            <p> Transformez votre maison en un havre de paix. Réservez dès aujourd'hui des services à domicile sur notre plateforme intuitive. Que ce soit pour l'entretien ménager, la réparation, ou tout simplement pour prendre soin de votre espace, nous sommes là pour vous simplifier la vie. Libérez-vous du stress et laissez-nous prendre soin de votre maison. Bienvenue chez nous, où chaque service est synonyme de qualité et de tranquillité d'esprit. </p>
                                                            <div class="d-flex"><a class="text-uppercase custom_orange-btn mr-3" href="">Decouvrir</a><a class="text-uppercase custom_dark-btn" href=""> Contact Us </a></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="slider_img-box">
                                                        <div><img alt="" src="../Client/assets/img/illustration.avif"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
{{--                        <div class="custom_carousel-control"><a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev" data-slide="prev"><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next" data-slide="next"><span class="sr-only">Next</span></a></div>--}}
                    </div>
                </section>
            </div>
            <section class="service_section layout_padding">
                <div class="container">
                    <h2 class="custom_heading">Nos Services</h2>
                    <p class="custom_heading-text"> Explorez notre sélection de services à domicile de qualité. Des experts compétents pour chaque besoin, un confort sans souci pour vous. Découvrez nos services dès aujourd'hui et simplifiez votre vie ! </p>
                    <div class="row">
                        <?php
// Read the JSON file
                        $json = file_get_contents('./services/services.json');

// Decode the JSON into a PHP object
                        $services = json_decode($json);
                        $i=0;

// Loop through the services
                        foreach ($services->services as $service) {
                            // Generate the HTML for the service card
                            echo $i<3?'
    <div class="col-md-4">
        <div class="nft">
            <div class="main justify-content-center justify-self-auto" style="width: 100%;height:500px;">
                <img class="tokenImage" width="100%" src="' . $service->url_icone . '" alt="' . $service->nom . '">
                <h2>' . strtoupper($service->nom) . '</h2>
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
    ':'';
                            $i++;
                        }
                        ?>
                    </div>
                    <div class="d-flex justify-content-center"><a href="/client/all-services" class="custom_dark-btn"> Read More </a></div>
                </div>
            </section>

            <section class="container-fluid footer_section">
                <p> Copyright © 2024 All Rights Reserved<a href="https://html.design/"></a></p>
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
            <script src="../Client/assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="../Client/assets/js/jquery-3.4.1.min.js"></script>
            <script src="../Client/assets/js/bootstrap.js"></script>



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
