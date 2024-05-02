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
    <meta name="csrf-token" content="{{ csrf_token() }}">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
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
                                    
                                <table id="zero_config" class="table border table-striped table-bordered text-nowrap">
    <thead>
        <tr>
            <th>Client</th>
            <th>Servicet</th>
            <th>Date Début</th>
            <th>Durée</th>
            <th>Accepter</th>
            <th>Refuser</th>
    
       
        </tr>
    </thead>
    <tbody>
        @foreach($demandes as $demande)
        <tr>
        <td>
            <a href="#" data-bs-toggle="modal" data-bs-target="#clientInfoModal{{ $demande->client->id }}">{{ $demande->client->name }}</a>
        </td>
            <td>{{ $demande->service->nom }}</td>
            <td>{{ $demande->date }}</td>
        
            <td>{{ $demande->duree }} <span>h</span></td>
            
            <td>
    <button class="btn btn btn-outline-success btn-rounded" data-bs-toggle="modal" data-bs-target="#acceptModal" data-user-id="{{ Auth::user()->id }}" data-client-id="{{ $demande->client->id }} "  data-url="{{ route('accept.service') }}" data-service-id="{{ $demande->id }}">Accepter</button>
</td>

            <td><button class="btn btn-outline-danger btn-rounded" data-bs-toggle="modal" data-bs-target="#refuseModal" data-user-id="{{ Auth::user()->id }}" data-client-id="{{ $demande->client->id }} "  data-url="{{ route('refuse.service') }}"  data-service-id="{{ $demande->id }}">Refuser</button>
        </tr>




        
    <!-- Client Information Modal -->
<!-- Client Information Modal -->
<div class="modal fade" id="clientInfoModal{{ $demande->client->id }}" tabindex="-1" aria-labelledby="clientInfoModalLabel{{ $demande->client->id }}" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="clientInfoModalLabel{{ $demande->client->id }}">Client Information</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body text-center">
                <!-- Display Client Profile Picture -->
                @if($demande->client->photo)
                    <img src="{{ asset('uploads/profile_pictures/' . $demande->client->photo) }}" alt="Client's Profile Picture" class="profile-picture img-thumbnail rounded-circle custom-circle-img mb-3" style="width: 150px; height: 150px;">
                @else
                    <img src="{{ asset('uploads/profile_pictures/default.png') }}" alt="Default Profile Picture" class="profile-picture img-thumbnail rounded-circle custom-circle-img mb-3" style="width: 150px; height: 150px;">
                @endif
                <!-- Display Client Name, Email, and Rating -->
                <p><strong>Name:</strong> {{ $demande->client->name }}</p>
                <p><strong>Email:</strong> {{ $demande->client->email }}</p>
                <p><strong>Phone:</strong> {{ $demande->client->phone }}</p>
                <p><strong>Rating:</strong>
                    @for ($i = 0; $i < 5; $i++)
                        @if ($i < $demande->client->note)
                            @if ($demande->client->note - $i > 0.5)
                                <img src="{{ asset('Page_Principale/images/reviews/star-gold.svg') }}" alt="yellow star" />
                            @else
                                <img src="{{ asset('Page_Principale/images/reviews/star-gold-half.svg') }}" alt="half yellow star" />
                            @endif
                        @else
                            @if ($i + 0.5 == $demande->client->note)
                                <img src="{{ asset('Page_Principale/images/reviews/star-gold-half.svg') }}" alt="half yellow star" />
                            @else
                                <img src="{{ asset('Page_Principale/images/reviews/star-grey.svg') }}" alt="gray star" />
                            @endif
                        @endif
                    @endfor
                </p>
                <!-- Add more client information fields as needed -->
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


        @endforeach
    </tbody>
</table>





<div class="modal fade " id="refuseModal" tabindex="-1" aria-labelledby="refuseModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Refuser</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        vous voulez Refuser le service ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-danger btn-rounded" >Refuser</button>

      </div>
    </div>
  </div>
</div>



<div class="modal fade " id="acceptModal" tabindex="-1" aria-labelledby="acceptModalLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">ACCEPETER</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        vous voulez accepter le service ?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-rounded" data-bs-dismiss="modal">Annuler</button>
        <button type="button" class="btn btn-success btn-rounded" >Accepter</button>

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
    
        <!-- ============================================================== -->
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
    <script src="{{ asset('js/refuse-demande.js') }}"></script>
    <script src="{{ asset('js/accepte-demande.js') }}"></script>
    <script>






    </script>

    
    
</body>

</html>