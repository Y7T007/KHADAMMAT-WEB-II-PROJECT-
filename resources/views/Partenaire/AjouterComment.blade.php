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
    <link href="Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Partenaire</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Partenaire</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Update Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <!-- Insérez ce formulaire à l'endroit où vous souhaitez afficher les informations -->
           <div class="container-fluid" >
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title" >Commentaire</h4>
                                <div class="mb-3">
                                    <textarea style="background-color: rgb(199, 229, 255);
                                    border-radius:30px" class="form-control" id="message" name="message" rows="5" placeholder="Entrez votre Commentaire"></textarea>
                                </div style="margin-bottom: 30px">
                                <h4 class="card-title">Notation</h4>
                                <div class="rating" style="margin-bottom: 30px">
                                    <span style="font-size: 30px" class="star" data-value="1"><i class="fas fa-star"></i></span>
                                    <span style="font-size: 30px" class="star" data-value="2"><i class="fas fa-star"></i></span>
                                    <span style="font-size: 30px"class="star" data-value="3"><i class="fas fa-star"></i></span>
                                    <span style="font-size: 30px"class="star" data-value="4"><i class="fas fa-star"></i></span>
                                    <span style="font-size: 30px"class="star" data-value="5"><i class="fas fa-star"></i></span>
                                </div>
                                <div  class="text-center"> <button type="button" style="width: 250px" class="btn btn-danger btn-rounded">Send</button></div>
                               
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
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const stars = document.querySelectorAll('.star');
            let selectedValue = 0;
    
            stars.forEach(star => {
                star.addEventListener('mouseover', function() {
                    let value = this.getAttribute('data-value');
                    highlightStars(value);
                });
    
                star.addEventListener('click', function() {
                    let value = this.getAttribute('data-value');
                    selectedValue = value;
                    highlightStars(value);
                    // Vous pouvez ajouter du code ici pour capturer la note sélectionnée et la traiter
                });
    
                star.addEventListener('mouseout', function() {
                    highlightStars(selectedValue);
                });
            });
    
            function highlightStars(value) {
                stars.forEach(star => {
                    if (star.getAttribute('data-value') <= value) {
                        star.querySelector('i').classList.add('fas');
                        star.querySelector('i').classList.remove('far');
                        star.querySelector('i').classList.add('text-warning');
                    } else {
                        star.querySelector('i').classList.remove('fas');
                        star.querySelector('i').classList.add('far');
                        star.querySelector('i').classList.remove('text-warning');
                    }
                });
            }
        });
    </script>
    
    
    <script src="Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="Partenaire/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
    <script src="Partenaire/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
    <script src="Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- apps -->
    <script src="Partenaire/dist/js/app-style-switcher.js"></script>
    <script src="Partenaire/dist/js/feather.min.js"></script>
    <script src="Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="Partenaire/dist/js/sidebarmenu.js"></script>
    <!--Custom JavaScript -->
    <script src="Partenaire/dist/js/custom.min.js"></script>
    <!--This page JavaScript -->
    <script src="Partenaire/assets/libs/moment/min/moment.min.js"></script>
    <script src="Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
    <script src="Partenaire/dist/js/pages/calendar/cal-init.js"></script>
</body>

</html>
