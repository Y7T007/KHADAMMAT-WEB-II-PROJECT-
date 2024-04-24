<!DOCTYPE html>
<html lang="en">
@include('client.head')

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" sizes="16x16" href="../Partenaire/assets/images/logo.jpeg">
    <title>Freedash Template - The Ultimate Multipurpose admin template</title>
    <!-- Custom CSS -->
    <link href="../Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet" />
    <!-- Custom CSS -->
    <link href="../Partenaire/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <div class="preloader">
        <div class="lds-ripple">
            <div class="lds-pos"></div>
            <div class="lds-pos"></div>
        </div>
    </div>
    <div id="main-wrapper" data-theme="light" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
        data-sidebar-position="fixed" data-header-position="fixed" data-boxed-layout="full">

        @include('client.header')

        @include('client.sidebar')

        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row">
                    <div class="col-7 align-self-center">
                        <h4 class="page-title text-truncate text-dark font-weight-medium mb-1">Client</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb m-0 p-0">
                                    <li class="breadcrumb-item text-muted active" aria-current="page">Client</li>
                                    <li class="breadcrumb-item text-muted" aria-current="page">Update Profile</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Informations personnelles</h4>{{ $errors->first('field_name') }}
                                <form action="{{ route('client.profile.update') }}" method="POST" enctype="multipart/form-data">
                                    @csrf

                                    <!-- Votre formulaire ici -->
                                    <div class="mb-3">
                                    <label for="name" class="form-label">Nom :</label><br>
                                    <input type="text" class="form-control" id="name" name="name"
                                       placeholder=" {{ $client->name }}">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Adresse :</label>
                                    <input type="text" class="form-control" id="address" name="address"
                                         placeholder=" {{ $client->address }}">
                                </div>
                                <div class="mb-3">
                                    <label for="phone_number" class="form-label">Numéro de téléphone :</label>
                                    <input type="number" min="0" class="form-control" id="phone_number" name="phone_number"

                                        placeholder=" {{ $client->phone_number }}" oninput="this.value = this.value.replace(/[^0-9]/g, '').slice(0, 10)">
                                </div>
                                <div class="mb-3">
                                    <label for="ville" class="form-label">Ville :</label>
                                    <input type="text" class="form-control" id="ville" name="ville"
                                        placeholder=" {{ $client->ville }}">
                                </div>
                                <div class="mb-3">
                                    <label for="date_naissance" class="form-label">Date de naissance :</label>
                                    <input type="date" class="form-control" id="date_naissance"
                                        name="date_naissance" placeholder=" {{ $client->date_naissance }}">
                                </div>
                                <div class="mb-3">
                                    <label for="genre" class="form-label">Genre :</label>
                                    <input type="text" class="form-control" id="genre" name="genre"
                                         placeholder=" {{ $client->genre }}">
                                </div>
                                <h4 class="card-title">Informations Maison</h4>

                                <div class="mb-3">
                                    <label for="nb_chambres" class="form-label">Nombre de chambres :</label>
                                    <input type="number" class="form-control" id="nb_chambres" name="nb_chambres"

                                        placeholder=" {{ $client->nb_chambres }}">
                                </div>
                                <div class="mb-3">
                                    <label for="nb_bain" class="form-label">Nombre de salles de bain :</label>
                                    <input type="number" class="form-control" id="nb_bain" name="nb_bain"
                                         placeholder=" {{ $client->nb_bain }}">
                                </div>
                                <div class="mb-3">
                                    <label for="television" class="form-label">Télévision :</label>
                                    <input type="checkbox" value="1" id="television" name="television"
                                        {{ $client->television ? 'checked' : '' }}>
                                </div>
                                <div class="mb-3">
                                    <label for="refrigirateur" class="form-label">Réfrigérateur :</label>
                                    <input type="checkbox" value="1" id="refrigerateur" name="refrigerateur"
                                        {{ $client->refrigirateur ? 'checked' : '' }}>
                                </div>
                                <div class="mb-3">
                                    <label for="machine_a_laver" class="form-label">Machine à laver :</label>
                                    <input type="checkbox" value="1" id="machine_a_laver" name="machine_a_laver"
                                        {{ $client->machine_a_laver ? 'checked' : '' }}>
                                </div>
                                <div class="mb-3">
                                    <label for="Garage" class="form-label">Garage :</label>
                                    <input type="checkbox" value="1" id="Garage" name="Garage" {{ $client->Garage ? 'checked' : '' }}>
                                </div>
                                <div class="mb-3">
                                    <label for="jardin" class="form-label">Jardin :</label>
                                    <input type="checkbox" value="1" id="jardin" name="jardin" {{ $client->jardin ? 'checked' : '' }}>
                                </div>
                                <div class="mb-3">
                                    <label for="superficie" class="form-label">Superficie :</label>
                                    <input type="number" class="form-control" id="superficie" name="superficie"
                                         placeholder=" {{ $client->superficie }}">
                                </div>
                                <div class="mb-3">
    <label for="profile_picture" class="form-label">Image de profil :</label><br>
    <!-- Afficher l'image de profil actuelle -->
    @if($client->profile_picture)
        <img src="{{ Storage::url($client->profile_picture) }}" alt="Profile Picture" style="max-width: 200px; margin-bottom: 10px;"><br>
    @endif
    <!-- Champ de texte pour afficher le nom de fichier actuel -->
    <input type="text" class="form-control" id="profile_picture_name" readonly placeholder=" {{ $client->profile_picture }}">
    <!-- Champ pour télécharger une nouvelle image -->
    <input type="file" class="form-control" id="profile_picture" name="profile_picture">
</div>

                                <!-- Ajoutez d'autres champs ici en suivant la structure ci-dessus -->

                                    <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="../Partenaire/assets/libs/jquery/dist/jquery.min.js"></script>
        <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery.ui.touch-punch-improved.js"></script>
        <script src="../Partenaire/assets/extra-libs/taskboard/js/jquery-ui.min.js"></script>
        <script src="../Partenaire/assets/libs/popper.js/dist/umd/popper.min.js"></script>
        <script src="../Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
        <script src="../Partenaire/dist/js/app-style-switcher.js"></script>
        <script src="../Partenaire/dist/js/feather.min.js"></script>
        <script src="../Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
        <script src="../Partenaire/dist/js/sidebarmenu.js"></script>
        <script src="../Partenaire/dist/js/custom.min.js"></script>
        <script src="../Partenaire/assets/libs/moment/min/moment.min.js"></script>
        <script src="../Partenaire/assets/libs/fullcalendar/dist/fullcalendar.min.js"></script>
        <script src="../Partenaire/dist/js/pages/calendar/cal-init.js"></script>
        <script>
    function displayFileName(input) {
        var fileName = input.files[0].name;
        document.getElementById('profile_picture_name').value = fileName;
    }
</script>
    </div>
</body>

</html>
