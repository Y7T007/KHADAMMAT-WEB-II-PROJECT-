<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="/admin/assets/images/logo.jpeg">
    <title></title>
    <!-- This page css -->
    <!-- Custom CSS -->
    <link href="/admin/dist/css/style.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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
        <header class="topbar" data-navbarbg="skin6">
        @include('admin.navbar')
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        @include('admin.sidebar')
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Clients Liste</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item"><a href="../../home" class="text-muted">Apps</a></li>
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Clients Liste
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
                                                <h1 class="font-light text-white">{{$clientsCount}}</h1>
                                                <h6 class="text-white">Clients</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div style="border-radius: 30px;" class="p-2 bg-cyan text-center">
                                                <h1 class="font-light text-white">{{$demandesCount}}</h1>
                                                <h6 class="text-white">Total demandes</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div style="border-radius: 30px;" class="p-2 bg-success text-center">
                                                <h1 class="font-light text-white">{{$partnersCount}}</h1>
                                                <h6 class="text-white">Partners</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                    <div class="col-md-6 col-lg-3 col-xlg-3">
                                        <div class="card card-hover">
                                            <div style="border-radius: 30px;" class="p-2 bg-danger text-center">
                                                <h1 class="font-light text-white">{{$deactivatedAccountsCount}}</h1>
                                                <h6 class="text-white">deactivated Accounts</h6>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Column -->
                                </div>
                                <div class="table-responsive">

</div>


@foreach($demandes as $demande)
    @if($demande->commentaires->count() > 0)
        <div class="comment-card">
            <div class="comment-info">
                <button class="btn btn-success btn-rounded" style="pointer-events: none;">Category: {{$demande->service->categorie}}</button>
                <button class="btn btn-danger btn-rounded" style="pointer-events: none;">Service: {{$demande->service->nom}}</button>
                <button style="background-color: rgb(49, 166, 255); color: aliceblue; pointer-events: none;" type="button" class="btn btn-rounded">
                    <i class="fas fa-check"></i> Date: {{$demande->date}}
                </button>
            </div>

            <!-- Affichage du commentaire du partenaire -->
            @if($demande->commentaires->where('Userid', $demande->partenaireid)->count() > 0)
                <strong>Partner: {{$demande->partenaire->name}}</strong><br>
                <div class="partner-comment">
                    <div class="partner-photo">
                        <img src="{{ asset('uploads/profile_pictures/' . $demande->partenaire->photo) }}" alt="Partner Photo"  >
                    </div>
                    <div class="comment">
                        {{ $demande->commentaires->where('Userid', $demande->partenaireid)->first()->content }}
                    </div>
                    <button class="btn btn-outline-danger btn-rounded delete-comment-btn" data-bs-toggle="modal" data-bs-target="#DeleteModal" data-url="{{ route('delete.comment') }}" data-comment-id="{{ $demande->commentaires->where('Userid', $demande->partenaireid)->first()->id }}">Delete</button>
                </div>
            @endif

            <!-- Affichage du commentaire du client -->
            @if($demande->commentaires->where('Userid', $demande->idclient)->count() > 0)
                <strong>Client: {{$demande->client->name}}</strong><br>
                <div class="client-comment">
                    <div class="client-photo">
                        <img src="{{ asset('uploads/profile_pictures/' . $demande->client->photo) }}" alt="client Photo"  >
                    </div>
                    <div class="comment">
                        {{ $demande->commentaires->where('Userid', $demande->idclient)->first()->content }}
                    </div>
                    <button class="btn btn-outline-danger btn-rounded delete-comment-btn" data-bs-toggle="modal" data-bs-target="#DeleteModal" data-url="{{ route('delete.comment') }}" data-comment-id="{{ $demande->commentaires->where('Userid', $demande->idclient)->first()->id }}">Delete</button>
                </div>
            @endif
        </div>
    @endif
@endforeach



<div class="modal fade" id="DeleteModal" tabindex="-1" aria-labelledby="DeleteModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Are you sure you want to delete this comment?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-danger btn-rounded delete-comment-confirm-btn">Delete</button>
            </div>
        </div>
    </div>
</div>







                                    <ul class="pagination float-end">
                                        <li class="page-item disabled">
                                            <a class="page-link" href="#" tabindex="-1">Previous</a>
                                        </li>
                                        <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">2 <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item">
                                            <a class="page-link" href="#">Next</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <footer class="footer text-center text-muted">
                All Rights Reserved by Freedash. Designed and Developed by <a
                    href="https://adminmart.com/">Adminmart</a>.
            </footer>
        </div>
    </div>
    <script src="/admin/assets/libs/jquery/dist/jquery.min.js"></script>
    <script src="/admin/assets/libs/popper.js/dist/umd/popper.min.js"></script>
    <script src="/admin/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/admin/dist/js/app-style-switcher.js"></script>
    <script src="/admin/dist/js/feather.min.js"></script>
    <script src="/admin/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
    <script src="/admin/dist/js/sidebarmenu.js"></script>
    <script src="/admin/dist/js/custom.min.js"></script>
    <script src="{{ asset('js/delete-comment.js') }}"></script>

</body>

</html>