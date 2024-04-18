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
    <link rel="icon" type="image/png" sizes="16x16" href="Partenaire/assets/images/logo.jpeg">
    <title>Khadamt</title>
    <!-- Custom CSS -->
    <link href="Partenaire/dist/css/style.min.css" rel="stylesheet">
    <!-- This Page CSS -->
    <link rel="stylesheet" type="text/css" href="Partenaire/assets/extra-libs/prism/prism.css">
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
        @include('Partenaire.header')

        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        @include('Partenaire.sidebar')
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Mes Services</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Partenaire</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Mes Services</li>
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
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- row -->
              
                
                <!-- End row -->
                <!-- row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-lg-6"  style="margin-bottom:30px ">
                                        <h4 class="card-title">Service d'electricite</h4>
                                        <h6 class="card-subtitle">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quia aperiam assumenda voluptates, nobis distinctio pariatur suscipit libero officia fuga earum quod illo nesciunt, neque ipsa quas reiciendis quo sint excepturi.
                                        </h6>
                                        <div id="carouselExampleIndicators2" class="carousel slide"
                                            data-ride="carousel">
                                           
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img style="border-radius: 40px" class="img-fluid" src="Page_Principale/images/blog/image1.jpg"
                                                        alt="First slide">
                                                </div>
                                              
                                            </div>

                                            
                                          
                                        </div>

                                        <div style="margin-top: 10px" class="text-center"> <!-- Div pour centrer le bouton -->
                                            <button type="submit" style="width: 200px" class="btn btn-warning btn-rounded">Voir</button>
                                        </div>
                                    </div>


                                    <div style="cursor: pointer" class="col-lg-6" style="margin-bottom:30px "  onclick="window.location='service';">
                                        <h4 class="card-title">Service d'electricite</h4>
                                        <h6 class="card-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam accusantium recusandae aliquam ex corrupti sint inventore, vitae labore ad repellat totam, delectus, nesciunt ratione ea aspernatur aut laborum molestiae veniam.
                                        </h6>
                                        <div id="carouselExampleIndicators2" class="carousel slide"
                                            data-ride="carousel">
                                           
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img style="border-radius: 40px" class="img-fluid" src="Page_Principale/images/blog/image1.jpg"
                                                        alt="First slide">
                                                </div>
                                              
                                            </div>
                                          
                                        </div>

                                        <div style="margin-top: 10px" class="text-center"> <!-- Div pour centrer le bouton -->
                                            <button type="submit" style="width: 200px" class="btn btn-warning btn-rounded">Voir</button>
                                        </div>
                                        
                                    </div>

                                    <div class="col-lg-6"  style="margin-bottom:30px ">
                                        <h4 class="card-title">Service d'electricite</h4>
                                        <h6 class="card-subtitle">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Quibusdam accusantium recusandae aliquam ex corrupti sint inventore, vitae labore ad repellat totam, delectus, nesciunt ratione ea aspernatur aut laborum molestiae veniam.
                                        </h6>
                                        <div id="carouselExampleIndicators2" class="carousel slide"
                                            data-ride="carousel">
                                           
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <img style="border-radius: 40px" class="img-fluid" src="Page_Principale/images/blog/image1.jpg"
                                                        alt="First slide">
                                                </div>
                                              
                                            </div>
                                          
                                        </div>

                                         <div style="margin-top: 10px" class="text-center"> <!-- Div pour centrer le bouton -->
                                            <button type="submit" style="width: 200px" class="btn btn-warning btn-rounded">Voir</button>
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                   
                </div>
                <!-- End row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
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
    <script src="Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="Partenaire/dist/js/app-style-switcher.js"></script>
    <script src="Partenaire/dist/js/feather.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="Partenaire/assets/extra-libs/sparkline/sparkline.js"></script>
    <!--Wave Effects -->
    <!-- themejs -->
    <!--Menu sidebar -->
    <script src="Partenaire/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="Partenaire/dist/js/custom.min.js"></script>
    <!-- This Page JS -->
    <script src="Partenaire/assets/extra-libs/prism/prism.js"></script>
</body>

</html>