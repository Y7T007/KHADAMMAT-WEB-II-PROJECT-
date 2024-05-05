<!DOCTYPE html>
<html dir="ltr" lang="fr">
@include('client.head')

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../Partenaire/assets/images/logo.jpeg">
    <title>Freedash Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="../Partenaire/dist/css/style.min.css" rel="stylesheet">
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
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->

        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        @include('client.header')

        @include('client.sidebar')

        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">
                            <h2>Client</h2>
                        </h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">client</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <h3 style="margin-bottom: 20px;margin-top: 50px;">Historique des services</h3>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom du service</th>
                                <th>Partenaire</th>
                                <th>Date</th>
                                <th>Prix</th>
                                <th>Statut</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($demandes as $demande)
                            <tr>
                                <td>{{ $demande->service->nom }}</td>
                                <td>{{ $demande->partenaire->name }}</td>
                                <td>{{ $demande->date }}</td>
                                <td>{{ $demande->service->prix }} DH</td>
                                <td>{{ $demande->statut }}</td>
                                <td>
                                    @if($demande->statut == 'complet')
                                    <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#commentModal-{{ $demande->id }}">Commenter</button>
<button class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#rateModal-{{ $demande->id }}">Noter</button>

                                    @endif
                                </td>
                            </tr>
                            @endforeach

                            <div class="modal fade" id="commentModal-{{ $demande->id }}" tabindex="-1" aria-labelledby="commentModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="commentModalLabel">Commentaire pour {{ $demande->service->nom }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('saveComment', $demande->id) }}">
          @csrf
          <div class="mb-3">
            <label for="comment" class="form-label">Votre commentaire</label>
            <textarea class="form-control" id="comment" name="comment" required></textarea>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</div>

<!-- Modale pour noter -->
<div class="modal fade" id="rateModal-{{ $demande->id }}" tabindex="-1" aria-labelledby="rateModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="rateModalLabel">Note pour {{ $demande->service->nom }}</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form method="POST" action="{{ route('saveRating', $demande->id) }}">
          @csrf
          <div class="mb-3">
            <label for="rating" class="form-label">Votre note (1-5)</label>
            <input type="number" class="form-control" id="rating" name="rating" min="1" max="5" required>
          </div>
          <button type="submit" class="btn btn-primary">Envoyer</button>
        </form>
      </div>
    </div>
  </div>
</div>
                        </tbody>
                    </table>
                </div>
                
                <!-- ============================================================== -->
                <!-- End Container fluid  -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- footer -->
                <!-- ============================================================== -->
                <!-- Include a footer here if needed -->
                <!-- ============================================================== -->
                <!-- End footer -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Page wrapper  -->
            <!-- ============================================================== -->
        </div>
        </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Wrapper -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- All Jquery -->
        <!-- ============================================================== -->
        <script src="../Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
        <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
        <script src="../Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../Partenaire/dist/js/app-style-switcher.js"></script>
        <script src="../Partenaire/dist/js/feather.min.js"></script>
        <script src="../Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../Partenaire/dist/js/sidebarmenu.js"></script>
        <!--Custom JavaScript -->
        <script src="../Partenaire/dist/js/custom.min.js"></script>
        <!--This page JavaScript -->
        <script src="../Partenaire/assets/libs/moment/min/moment.min.js"></script>
        <script src="../Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="../Partenaire/dist/js/pages/calendar/cal-init.js"></script>
</body>

</html>
