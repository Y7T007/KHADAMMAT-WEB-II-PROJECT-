<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="Partenaire/assets/images/logo.jpeg">
    <title>Khadamt</title>
    <link href="Partenaire/dist/css/style.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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
       
        @include('Partenaire.header')
        @include('Partenaire.sidebar')
        
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
                                    
                       





                                
                                @foreach($feedbacks as  $feedback)
<div class="comment-card">
    <div class="comment-info">
        <button class="btn btn-success btn-rounded" style="pointer-events: none;">Category: {{$feedback->service->categorie}}</button>
        <button class="btn btn-danger btn-rounded" style="pointer-events: none;">Service: {{$feedback->service->nom}}</button>
        <button style="background-color: rgb(49, 166, 255); color: aliceblue; pointer-events: none;" type="button" class="btn btn-rounded">
            <i class="fas fa-check"></i> Date: {{$feedback->date}}
        </button>
    </div>
    <!-- Affichage du commentaire du client -->
    <div class="client-comment">
        <div class="client-photo">
        @if($feedback->client->photo)
                    <img src="{{ asset('uploads/profile_pictures/' . $feedback->client->name) }}" alt="Client's Profile Picture" class="profile-picture img-thumbnail rounded-circle custom-circle-img mb-3" style="width: 150px; height: 150px;">
                @else
                    <img src="{{ asset('uploads/profile_pictures/default.png') }}" alt="Default Profile Picture" class="profile-picture img-thumbnail rounded-circle custom-circle-img mb-3" style="width: 150px; height: 150px;">
                @endif
                          
            <strong>Client: {{$feedback->client->name}}</strong>
        </div>
       
        <div class="slide-reviews__rating">
                                                    @for ($i = 0; $i < $feedback->client->Note; $i++)
                                                        <img src="Page_Principale/images/reviews/star-gold.svg" alt="yellow star" />
                                                    @endfor
                                                    @for ($i = $feedback->client->Note; $i < 5; $i++)
                                                        <img src="Page_Principale/images/reviews/star-grey.svg" alt="gray star" />
                                                    @endfor
                                                </div>
                                                
        <button class="btn btn-rate-comment" data-bs-toggle="modal" data-bs-target="#CommentModal" data-url="{{ route('Rate.Comment') }}"  data-user-id="{{ $feedback->partenaire->id }}" data-client-id="{{ $feedback->client->id }}"    data-demande-id="{{ $feedback->id }}">Rate & Comment</button>
    </div>
    
</div>
@endforeach




                                    <!-- POP UP Pour commenter et rating -->
                                    <div class="modal fade" id="CommentModal" tabindex="-1" aria-labelledby="CommentModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">FeedBack</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              

                <!-- Commenting section -->
                <div class="comment-section">
                    <label for="comment">Leave your comment:</label>
                    <textarea class="form-control" id="comment" rows="3"></textarea>
                </div>
                <!-- End of Commenting section -->

                <!-- Rating section -->
                <p>Give a Rating to the Client and the service</p>
                <div class="rating-css">
                    <div class="star-icon">
                        <input type="radio" value="1" name="product_rating" checked id="rating1">
                        <label for="rating1" class="fa fa-star"></label>
                        <input type="radio" value="2" name="product_rating" id="rating2">
                        <label for="rating2" class="fa fa-star"></label>
                        <input type="radio" value="3" name="product_rating" id="rating3">
                        <label for="rating3" class="fa fa-star"></label>
                        <input type="radio" value="4" name="product_rating" id="rating4">
                        <label for="rating4" class="fa fa-star"></label>
                        <input type="radio" value="5" name="product_rating" id="rating5">
                        <label for="rating5" class="fa fa-star"></label>
                    </div>
                </div>
                <!-- End of Rating section -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-success btn-rounded">Submit</button>
            </div>
        </div>
    </div>










                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

        </div>
    </div>
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
    <script src="{{ asset('js/RateComment.js') }}"></script>
    <script>
    </script>   
</body>

</html>