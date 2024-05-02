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
    <link rel="icon" type="image/png" sizes="16x16" href="admin/assets/images/logo.jpeg">
    <title>Freedash Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="admin/assets/extra-libs/c3/c3.min.css" rel="stylesheet">
    <link href="admin/assets/libs/chartist/dist/chartist.min.css" rel="stylesheet">
    <link href="admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="admin/dist/css/style.min.css" rel="stylesheet">

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
       @include('admin.navbar')
        </header>
        @include('admin.sidebar')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h3 class="page-title text-truncate text-dark font-weight-medium mb-1">Good Morning Jason!</h3>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html">Dashboard</a>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <!---->
                </div>
            </div>
            <div class="container-fluid">
                <!-- *************************************************************** -->
                <!-- Start First Cards -->
                <!-- *************************************************************** -->
                <div class="row">
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">{{$clientsCount}}</h2>

                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Clients
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="user-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="text-dark mb-1 w-100 text-truncate font-weight-medium"> {{$partnersCount}}</h2></h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate"> Partenaires
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="dollar-sign"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card border-end ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="d-inline-flex align-items-center">
                                            <h2 class="text-dark mb-1 font-weight-medium">{{$demandesCount}}</h2>
                                            <span
                                                class="badge bg-danger font-12 text-white font-weight-medium rounded-pill ms-2 d-md-none d-lg-block">-{{$refusedDemandesPercentage}}</span>
                                        </div>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">demandes
                                        </h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="file-plus"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-lg-3">
                        <div class="card ">
                            <div class="card-body">
                                <div class="d-flex align-items-center">
                                    <div>
                                        <h2 class="text-dark mb-1 font-weight-medium">{{$deactivatedAccountsCount}}</h2>
                                        <h6 class="text-muted font-weight-normal mb-0 w-100 text-truncate">Deactivated Accounts</h6>
                                    </div>
                                    <div class="ms-auto mt-md-3 mt-lg-0">
                                        <span class="opacity-7 text-muted"><i data-feather="globe"></i></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Top Partners</h4>
                                </div>
                                <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
    <thead>
        <tr class="border-0">
            <th class="border-0 font-14 font-weight-medium text-muted">Name</th>
            <th class="border-0 font-14 font-weight-medium text-muted px-2">Email</th>
            <th class="border-0 font-14 font-weight-medium text-muted">Note</th>
        </tr>
    </thead>
    <tbody>
    @foreach($topBookedPartners as $partner)
<tr>
    <td class="border-top-0">
        {{ $partner->name }}
    </td>
    <td class="border-top-0 px-2">
        {{ $partner->email }}
    </td>
    <td class="border-top-0">
        @for ($i = 0; $i < 5; $i++)
            @if ($i < $partner->note)
                @if ($partner->note - $i > 0.5)
                    <img src="{{ asset('Page_Principale/images/reviews/star-gold.svg') }}" alt="yellow star" />
                @else
                    <img src="{{ asset('Page_Principale/images/reviews/star-gold-half.svg') }}" alt="half yellow star" />
                @endif
            @else
                @if ($i + 0.5 == $partner->note)
                    <img src="{{ asset('Page_Principale/images/reviews/star-gold-half.svg') }}" alt="half yellow star" />
                @else
                    <img src="{{ asset('Page_Principale/images/reviews/star-grey.svg') }}" alt="gray star" />
                @endif
            @endif
        @endfor
    </td>
</tr>
@endforeach

    </tbody>
</table>


</div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center mb-4">
                                    <h4 class="card-title">Top Clients</h4>
                                </div>
                                <div class="table-responsive">
                                <table class="table no-wrap v-middle mb-0">
<table class="table no-wrap v-middle mb-0">
    <thead>
        <tr class="border-0">
            <th class="border-0 font-14 font-weight-medium text-muted">Name</th>
            <th class="border-0 font-14 font-weight-medium text-muted px-2">Email</th>
            <th class="border-0 font-14 font-weight-medium text-muted">Note</th>
        </tr>
    </thead>
    <tbody>
    @foreach($mostactivecliens as $client)
<tr>
    <td class="border-top-0">
        {{ $client->name }}
    </td>
    <td class="border-top-0 px-2">
        {{ $client->email }}
    </td>
    <td class="border-top-0">
        @for ($i = 0; $i < 5; $i++)
            @if ($i < $client->note)
                @if ($client->note - $i > 0.5)
                    <img src="{{ asset('Page_Principale/images/reviews/star-gold.svg') }}" alt="yellow star" />
                @else
                    <img src="{{ asset('Page_Principale/images/reviews/star-gold-half.svg') }}" alt="half yellow star" />
                @endif
            @else
                @if ($i + 0.5 == $client->note)
                    <img src="{{ asset('Page_Principale/images/reviews/star-gold-half.svg') }}" alt="half yellow star" />
                @else
                    <img src="{{ asset('Page_Principale/images/reviews/star-grey.svg') }}" alt="gray star" />
                @endif
            @endif
        @endfor
    </td>
</tr>
@endforeach

    </tbody>
</table>
</div>
                            </div>
                        </div>
                    </div>
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
            <footer class="footer text-center text-muted">
                All Rights Reserved by Freedash. Designed and Developed by <a
                    href="https://adminmart.com/">Adminmart</a>.
            </footer>
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
    <script src="admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="admin/dist/js/app-style-switcher.js"></script>
    <script src="admin/dist/js/feather.min.js"></script>
    <script src="admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="admin/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="admin/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="admin/assets/extra-libs/c3/d3.min.js"></script>
    <script src="admin/assets/extra-libs/c3/c3.min.js"></script>
    <script src="admin/assets/libs/chartist/dist/chartist.min.js"></script>
    <script src="admin/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
    <script src="admin/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
    <script src="admin/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
    <script src="admin/dist/js/pages/dashboards/dashboard1.min.js"></script>
</body>

</html>