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
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="Partenaire/dist/css/style.min.css" rel="stylesheet">
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Interventions List</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Apps</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Interventions List
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>

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
                <!-- basic table -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row">
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div style="border-radius: 30px;" class="p-2 bg-primary text-center">
                                                <h1 class="font-light text-white">5</h1>
                                                <h6 class="text-white">Total Demande</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div style="border-radius: 30px;" class="p-2 bg-cyan text-center">
                                                <h1 class="font-light text-white">3</h1>
                                                <h6 class="text-white">Demande Accepter</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div style="border-radius: 30px;" class="p-2 bg-success text-center">
                                                <h1 class="font-light text-white">2</h1>
                                                <h6 class="text-white">Demande Refuse</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div style="border-radius: 30px;" class="p-2 bg-danger text-center">
                                                <h1 class="font-light text-white">1</h1>
                                                <h6 class="text-white">Demande En Attente</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <div class="table-responsive">
                                    <table id="zero_config"
                                        class="table border table-striped table-bordered text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Client</th>
                                                <th>Date Début</th>
                                                <th>Durré</th>
                                                <th>Accepter</th>
                                                <th>Refuser</th>
                                                <th>Satatue</th>
                                                <th>Commenter</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Omar abarra</td>
                                                <td>12-12-2023</td>
                                                <td>3 <span>Jours</span></td>
                                                <td><button class="btn btn-success btn-rounded" > Accepter</button></td>
                                                <td><button class="btn btn-danger btn-rounded" > refuser</button></td>
                                                <td> <button style="background-color: rgb(49, 166, 255);color:aliceblue" type="button" class="btn  btn-rounded"><i
                                                    class="fas fa-check"></i> En Attente</button></td>
                                                  <td>
                                                        <button onclick="window.location.href = '/AjouterComment';" class="btn btn-info btn-rounded">Commenter & Noter</button>
                                                    </td>
                                            </tr>

                                            <tr>
                                                <td>Omar abarra</td>
                                                <td>12-12-2023</td>
                                                <td>3 <span>Jours</span></td>
                                                <td><button class="btn btn-success btn-rounded" > Accepter</button></td>
                                                <td><button class="btn btn-danger btn-rounded" > refuser</button></td>
                                                <td> <button type="button" class="btn btn-danger btn-rounded"><i
                                                    class="fas fa-times"></i> Refuser</button></td>
                                                  <td>
                                                        <button onclick="window.location.href = '/AjouterComment';" class="btn btn-info btn-rounded">Commenter & Noter</button>
                                                    </td>
                                            </tr>

                                            <tr>
                                                <td>Omar abarra</td>
                                                <td>12-12-2023</td>
                                                <td>3 <span>Jours</span></td>
                                                <td><button class="btn btn-success btn-rounded" > Accepter</button></td>
                                                <td><button class="btn btn-danger btn-rounded" > refuser</button></td>
                                                <td> <button type="button" class="btn btn-warning btn-rounded"><i
                                                    class="fas fa-check"></i> Success</button></td>
                                                  <td>
                                                        <button onclick="window.location.href = '/AjouterComment';" class="btn btn-info btn-rounded">Commenter & Noter</button>
                                                    </td>
                                            </tr>
                                            <tr>
                                                <td>Omar abarra</td>
                                                <td>12-12-2023</td>
                                                <td>3 <span>Jours</span></td>
                                                <td><button class="btn btn-success btn-rounded" > Accepter</button></td>
                                                <td><button class="btn btn-danger btn-rounded" > refuser</button></td>
                                                <td> <button type="button" class="btn btn-danger btn-rounded"><i
                                                    class="fas fa-times"></i> Refuser</button></td>
                                                    <td>
                                                        <button onclick="window.location.href = '/AjouterComment';" class="btn btn-info btn-rounded">Commenter & Noter</button>
                                                    </td>
                                                    
                                            </tr>
                                            <tr>
                                                <td>Omar abarra</td>
                                                <td>12-12-2023</td>
                                                <td>3 <span>Jours</span></td>
                                                <td><button class="btn btn-success btn-rounded" > Accepter</button></td>
                                                <td><button class="btn btn-danger btn-rounded" > refuser</button></td>
                                                <td> <button type="button" class="btn btn-warning btn-rounded"><i
                                                    class="fas fa-check"></i> Success</button></td>
                                                    <td>
                                                        <button onclick="window.location.href = '/AjouterComment';" class="btn btn-info btn-rounded">Commenter & Noter</button>
                                                    </td>
                                                    
                                            </tr>

                                          
                                       
                                          
                                        </tbody>
                                     
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <script src="Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <!-- apps -->
    <script src="Partenaire/dist/js/app-style-switcher.js"></script>
    <script src="Partenaire/dist/js/feather.min.js"></script>
    <script src="Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="Partenaire/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="Partenaire/dist/js/custom.min.js"></script>
</body>

</html>