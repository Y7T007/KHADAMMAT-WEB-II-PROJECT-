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
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">List des Commentaires</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="index.html" class="text-muted">Partenaire</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Commentaire</li>
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
                
                        <!-- /.row -->
                        <div class="row">
                     
                            @foreach($comments as $comment)
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="media d-flex align-items-center">
                                        @if($comment->User->photo)
                    <img src="{{ asset('uploads/profile_pictures/' . $comment->User->photo) }}" alt="Client's Profile Picture" class="profile-picture img-thumbnail rounded-circle custom-circle-img mb-2" style="width: 100px; height: 150px; margin-right:300px;">
                @else
                    <img src="{{ asset('uploads/profile_pictures/default.png') }}" alt="Default Profile Picture" class="profile-picture img-thumbnail rounded-circle custom-circle-img mb-3" style="width: 150px; height: 150px; margin-right:150px;">
                    
                @endif

                
                           
                            
                                          
                                            <div class="media-body">
                                                <h5 class="card-title">{{ $comment->User->name }}</h5>
                                                <p>{{ $comment->content }}</p>
                            
                                                <div class="slide-reviews__rating">
                                                    @for ($i = 0; $i < $comment->Note; $i++)
                                                        <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                                                    @endfor
                                                    @for ($i = $comment->Note; $i < 5; $i++)
                                                        <img src="Page_Principale/images/reviews/star-grey.svg" alt="gray star" />
                                                    @endfor
                                                </div>
                         
                                                {{ $comment->created_at}}


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            
                           
                            
                        </div>
                    </div>
                </div>
 
            </div>
   
        </div>

    </div>

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