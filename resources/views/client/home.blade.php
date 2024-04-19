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
                    <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Bonjour Mr. {{$client->name}}</h3>
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
            <div class="row">

                <h2>Home Page for the client side </h2>
            </div>


            <!-- *************************************************************** -->
            <!-- End Sales Charts Section -->
            <!-- *************************************************************** -->
            <!-- *************************************************************** -->
            <!-- Start Location and Earnings Charts Section -->
            <!-- *************************************************************** -->
{{--            <div class="row">--}}

{{--                <div class="col-md-6 col-lg-4">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <h4 class="card-title">Les activites Recent</h4>--}}
{{--                            <div class="mt-4 activity">--}}
{{--                                <div class="d-flex align-items-start border-left-line pb-3">--}}
{{--                                    <div>--}}
{{--                                        <img style="width: 50px ; border-radius:50%" src="../Partenaire/assets/images/users/3.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-3 mt-2">--}}
{{--                                        <h5 class="text-dark font-weight-medium mb-2">Nouveau Commentaire!</h5>--}}
{{--                                        <p class="font-14 mb-2 ">John Musa just comment--}}
{{--                                        </p>--}}
{{--                                        <a onclick="window.location.href = '/comment';" href="javascript:void(0)"--}}
{{--                                           class="font-14 border-bottom pb-1 border-info">Voir</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-start border-left-line pb-3">--}}
{{--                                    <div>--}}
{{--                                        <img style="width: 50px ; border-radius:50%" src="../Partenaire/assets/images/users/2.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-3 mt-2">--}}
{{--                                        <h5 class="text-dark font-weight-medium mb-2">Demande Service</h5>--}}
{{--                                        <p class="font-14 mb-2 ">Richardson just demande service </p>--}}
{{--                                        <a onclick="window.location.href = '/comment';" href="javascript:void(0)"--}}
{{--                                           class="font-14 border-bottom pb-1 border-info">Voir</a>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                                <div class="d-flex align-items-start border-left-line">--}}
{{--                                    <div>--}}
{{--                                        <img style="width: 50px ; border-radius:50%" src="../Partenaire/assets/images/users/5.jpg" alt="">--}}
{{--                                    </div>--}}
{{--                                    <div class="ms-3 mt-2">--}}
{{--                                        <h5 class="text-dark font-weight-medium mb-2">Demande Service--}}
{{--                                        </h5>--}}
{{--                                        <p class="font-14 mb-2 ">Yassir just demande service </p>--}}
{{--                                        <a onclick="window.location.href = '/comment';" href="javascript:void(0)"--}}
{{--                                           class="font-14 border-bottom pb-1 border-info">Voir</a>--}}

{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--                <div class="col-md-8">--}}
{{--                    <div class="card">--}}
{{--                        <div class="card-body">--}}
{{--                            <div class="d-flex align-items-center mb-4">--}}
{{--                                <h4 class="card-title">Derniers Demandes</h4>--}}
{{--                                <div class="ms-auto">--}}

{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <div class="table-responsive">--}}
{{--                                <table class="table no-wrap v-middle mb-0">--}}
{{--                                    <thead>--}}
{{--                                    <tr class="border-0">--}}
{{--                                        <th class="border-0 font-14 font-weight-medium ">Client--}}
{{--                                        </th>--}}
{{--                                        <th class="border-0 font-14 font-weight-medium  px-2">Date--}}
{{--                                        </th>--}}
{{--                                        <th class="border-0 font-14 font-weight-medium  text-center">--}}
{{--                                            Durre--}}
{{--                                        </th>--}}
{{--                                        <th class="border-0 font-14 font-weight-medium ">Statue</th>--}}


{{--                                    </tr>--}}
{{--                                    </thead>--}}
{{--                                    <tbody>--}}
{{--                                    <tr>--}}
{{--                                        <td class="border-top-0 px-2 py-4">--}}
{{--                                            <div class="d-flex no-block align-items-center">--}}
{{--                                                <div class="me-3"><img--}}
{{--                                                        src="../Partenaire/assets/images/users/4.jpg"--}}
{{--                                                        alt="user" class="rounded-circle" width="45"--}}
{{--                                                        height="45" /></div>--}}
{{--                                                <div class="">--}}
{{--                                                    <h5 class="text-dark mb-0 font-16 font-weight-medium">Ikram Sarghini</h5>--}}
{{--                                                    <span class=" font-14">Ikram Sarghini@gmail.com</span>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                        </td>--}}
{{--                                        <td class="border-top-0  px-2 py-4 font-14">Elite Admin</td>--}}
{{--                                        <td class="border-top-0 px-2 py-4">--}}
{{--                                            5 Jours--}}
{{--                                        </td>--}}
{{--                                        <td class="border-top-0 text-center px-2 py-4">--}}

{{--                                            <button style="background-color: rgb(49, 166, 255);color:aliceblue" type="button" class="btn  btn-rounded"><i--}}
{{--                                                    class="fas fa-check"></i> En Attente</button>--}}

{{--                                    </tr>--}}



{{--                                    </tbody>--}}
{{--                                </table>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}


{{--            </div>--}}
            <!-- *************************************************************** -->
            <!-- End Location and Earnings Charts Section -->
            <!-- *************************************************************** -->
            <!-- *************************************************************** -->
            <!-- Start Top Leader Table -->
            <!-- *************************************************************** -->
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
