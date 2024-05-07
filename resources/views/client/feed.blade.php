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
        @foreach($demandedServices as $demandedService)
            <!-- Display the demanded service -->
            <div>
                <h2>{{ $demandedService->service->nom }}</h2>
                <p>{{ $demandedService->service->description }}</p>
                <p>Requested by: {{ $demandedService->client->name }}</p>
                <p>Provided by: {{ $demandedService->partenaire->name }}</p>
                <!-- Display the comments related to the demanded service -->
                @foreach($demandedService->commentaires as $comment)
                    <div>
                        <p>{{ $comment->content }}</p>
                    </div>
                @endforeach
            </div>
        @endforeach

        @foreach($providedServices as $providedService)
            <!-- Display the provided service -->
            <div>
                <h2>{{ $providedService->nom }}</h2>
                <p>{{ $providedService->description }}</p>
                <p>Provided by: {{ $providedService->partenaire->name }}</p>
            </div>
        @endforeach
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <section class="bg-white">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 col-lg-12" style="padding: 0px;background: url(assets/img/office-front.jpeg) center / cover no-repeat;">
                        <p><br><br><br><br><br><br><br><br><br><br><br><br><br></p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <div class="row">
                            <div class="col">
                                <div class="title-div" style="width: auto;margin-top: 30px;margin-right: auto;margin-left: auto;margin-bottom: 30px;text-align: center;">
                                    <h1 style="text-align: center;">Fil D'actualité</h1>
                                </div>
                                <div style="height: auto;background: var(--bs-light-border-subtle);margin-right: auto;margin-left: auto;max-width: 899px;border-radius: 38px;">


                                    <div class="col">
                                        <div class="row d-flex flex-row justify-content-center align-items-center align-content-center align-self-center" style="height: 80px;background: #3c3c3c;border-radius: 75px;width: 104%;margin-left: -2%;">
                                            <div class="col-xl-1" style="max-width: 80px;min-width: 80px;"><img width="100" height="80" src="assets/img/office-front.jpeg" style="height: 60px;width: 60px;border-radius: 60px;margin-left: -1px;"></div>
                                            <div class="col" style="margin-top: auto;margin-bottom: auto;">
                                                <p style="font-size: 15px;font-family: Poppins;margin-top: auto;margin-bottom: auto;color: var(--bs-body-bg);"> <strong>Yassir WAHID</strong> (<i>#Client</i>)  -&gt;&nbsp;<strong>Nossair SEDKI</strong> (<i>#Partener</i>)</p>
                                            </div>
                                        </div>
                                        <div class="row" style="width: auto;margin-right: 0;margin-left: 0;">
                                            <div class="col">
                                                <p style="text-align: left;font-size: 25px;height: auto;width: auto;padding: 43px;">M. <strong>Yassir WAHID</strong>&nbsp; a demander le service de "<strong>Netoyage a domicile</strong>" de M. <strong>Nossair SEDKI</strong>.</p>
                                            </div>
                                        </div>
                                        <div class="row" style="border-radius:75px">
                                            <div class="card">
                                                <div class="header p-6" >
                                                    <h2>Comments</h2>
                                                </div>
                                                <div class="body">
                                                    <ul class="comment-reply list-unstyled">
                                                        <li class="row clearfix" style="border-radius: 25px;padding: 25px;">
                                                            <div class="icon-box col-md-2 col-4" style="display: flex;flex-direction: row;justify-content: center;align-items: center">
                                                                <img class="img-fluid img-thumbnail" style="border-radius: 50%;height: 70px" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image">
                                                            </div>
                                                            <div class="text-box col-md-7 col-8 p-l-0 p-r0"style="height: 80px">
                                                                <h5 class="m-b-0" style="font-size: 15px">Gigi Hadid </h5>
                                                                <p style="font-size: 10px">Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                                                <ul class="list-inline">
                                                                    <li><a style="font-size: 10px" href="javascript:void(0);">Mar 09 2018</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li class="row clearfix" style="border-radius: 25px;padding: 25px;">
                                                            <div class="icon-box col-md-2 col-4" style="display: flex;flex-direction: row;justify-content: center;align-items: center">
                                                                <img class="img-fluid img-thumbnail" style="border-radius: 50%;height: 70px" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image">
                                                            </div>
                                                            <div class="text-box col-md-7 col-8 p-l-0 p-r0"style="height: 80px">
                                                                <h5 class="m-b-0" style="font-size: 15px">Gigi Hadid </h5>
                                                                <p style="font-size: 10px">Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                                                <ul class="list-inline">
                                                                    <li><a style="font-size: 10px" href="javascript:void(0);">Mar 09 2018</a></li>
                                                                </ul>
                                                            </div>
                                                        </li><li class="row clearfix" style="border-radius: 25px;padding: 25px;">
                                                            <div class="icon-box col-md-2 col-4" style="display: flex;flex-direction: row;justify-content: center;align-items: center">
                                                                <img class="img-fluid img-thumbnail" style="border-radius: 50%;height: 70px" src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Awesome Image">
                                                            </div>
                                                            <div class="text-box col-md-7 col-8 p-l-0 p-r0"style="height: 80px">
                                                                <h5 class="m-b-0" style="font-size: 15px">Gigi Hadid </h5>
                                                                <p style="font-size: 10px">Why are there so many tutorials on how to decouple WordPress? how fast and easy it is to get it running (and keep it running!) and its massive ecosystem. </p>
                                                                <ul class="list-inline">
                                                                    <li><a style="font-size: 10px" href="javascript:void(0);">Mar 09 2018</a></li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col">
                                <div class="title-div" style="width: auto;margin-top: 30px;margin-right: auto;margin-left: auto;margin-bottom: 30px;text-align: center;">
                                    <h1 style="text-align: center;">Derniers services</h1>
                                </div>
                                @foreach($providedServices as $providedService)
                                    <div style="height: auto;background: var(--bs-light-border-subtle);margin-right: auto;margin-left: auto;max-width: 899px;border-radius: 38px;">
                                        <div class="col">
                                            <div class="row d-flex flex-row justify-content-center align-items-center align-content-center align-self-center" style="height: 80px;background: #3c3c3c;border-radius: 75px;width: 104%;margin-left: -2%;">
                                                <div class="col-xl-1" style="max-width: 80px;min-width: 80px;">
                                                    <img width="100" height="80" src="{{ $providedService->partenaire->photo ? $providedService->partenaire->photo : 'https://bootdey.com/img/Content/avatar/avatar1.png' }}" alt="{{ pathinfo($providedService->partenaire->photo, PATHINFO_FILENAME) }}" style="height: 60px;width: 60px;border-radius: 60px;margin-left: -1px;">                                                </div>
                                                <div class="col" style="margin-top: auto;margin-bottom: auto;">
                                                    <p style="font-size: 15px;font-family: Poppins;margin-top: auto;margin-bottom: auto;color: var(--bs-body-bg);"> <strong>{{ $providedService->partenaire->name }}</strong> (<i>#Partner</i>)</p>
                                                </div>
                                            </div>
                                            <div class="row" style="width: auto;margin-right: 0;margin-left: 0;">
                                                <div class="col">
                                                    <p style="text-align: left;font-size: 25px;height: auto;width: auto;padding: 43px;">M. <strong>{{ $providedService->partenaire->name }}</strong> (<i>#Partner</i>) offre actuellement le service de "<strong>{{ $providedService->nom }}</strong>". Vous pourrez voir son profil
                                                        <a href="#  "> ici.</a></p>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <p style="text-align: right"><i class="bi bi-clock"></i>&nbsp Publié le : {{ $providedService->created_at->format('d/m/Y à H:i') }} &nbsp  &nbsp </p>
                                            </div>
                                        </div>
                                    </div>
                                    <br><br>
                                @endforeach

                            </div>

                    </div>
                    </div>
                </div>
            </div>
        </section>
        <script src="assets/bootstrap/js/bootstrap.min.js"></script>
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
