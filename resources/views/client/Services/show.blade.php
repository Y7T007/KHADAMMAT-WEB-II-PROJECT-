<!DOCTYPE html>
<html dir="ltr" lang="en">

@include('client.head')

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


    <header class="topbar" data-navbarbg="skin6">
        <nav class="navbar top-navbar navbar-expand-lg">
            <div class="navbar-header" data-logobg="skin6">
                <!-- This is for the sidebar toggle which is visible on mobile only -->
                <a class="nav-toggler waves-effect waves-light d-block d-lg-none" href="javascript:void(0)"><i
                        class="ti-menu ti-close"></i></a>
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div style="background-color: #ffca2bd1;" class="navbar-brand">
                    <!-- Logo icon -->
                    <a href="index.html">
                        <img style="width: 65px;" src="../Partenaire/assets/images/logo.jpeg" alt="" class="img-fluid">
                    </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Toggle which is visible on mobile only -->
                <!-- ============================================================== -->
                <a class="topbartoggler d-block d-lg-none waves-effect waves-light" href="javascript:void(0)"
                   data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                   aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><i
                        class="ti-more"></i></a>
            </div>
            <!-- ============================================================== -->
            <!-- End Logo -->
            <!-- ============================================================== -->
            <div class="navbar-collapse collapse" id="navbarSupportedContent">
                <!-- ============================================================== -->
                <!-- toggle and nav items -->
                <!-- ============================================================== -->
                <ul class="navbar-nav float-left me-auto ms-4 ps-1">

                    <!-- ============================================================== -->
                    <!-- Search -->
                    <!-- ============================================================== -->

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="javascript:void(0)" data-bs-toggle="dropdown"
                           aria-haspopup="true" aria-expanded="false">

                            <img style="object-fit: cover" src="{{Storage::url($client->profile_picture)}}"
                                 onerror="this.onerror=null; this.src='../Partenaire/assets/images/users/2.jpg'"
                                 class="rounded-circle" width="40" height="40">
                            <span class="ms-2 d-none d-lg-inline-block"><span>Hello,</span> <span
                                    class="text-dark">{{$client-> name}}</span> <i data-feather="chevron-down"
                                                                                   class="svg-icon"></i></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-right user-dd animated flipInY">
                            <a class="dropdown-item" href="profile"><i data-feather="user"
                                                                       class="svg-icon me-2 ms-1"></i> My Profile</a>

                            <a class="dropdown-item" href="profile_edit"><i data-feather="user"
                                                                            class="svg-icon me-2 ms-1"></i>Update My
                                Profile</a>


                            <a href="javascript:void(0)"
                               onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                               class="dropdown-item"><i data-feather="power" class="svg-icon me-2 ms-1"></i> Logout</a>
                            <div class="dropdown-divider"></div>
                        </div>
                    </li>

                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </ul>
                <ul class="navbar-nav float-left me-auto ms-auto">
                    <!---->
                    <h2 class="custom_heading " style="padding-right: 50px">Nos Services</h2>

                </ul>
                <ul class="navbar-nav float-right me-auto ms-right">
                    <!---->
                    <div class="search-box">
                        <button class="btn-search"><i class="fas fa-search"></i></button>
                        <input type="text" class="input-search" id="searchInput" placeholder="Type to Search...">
                    </div>
                </ul>
                <!-- ============================================================== -->
                <!-- Right side toggle and nav items -->
                <!-- ============================================================== -->

            </div>
        </nav>
    </header>

    <style>
        .selected-partner {
            background-color: #a0f1a0;
            border-radius: 25px;
            padding-left: 30px;
            padding-right: 30px;
        }
    </style>


    @include('client.sidebar')
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
                    <div class="d-flex align-items-center">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb m-0 p-0">
                                <li class="breadcrumb-item"><a href="index.html">{{ $service->nom  }}</a>
                                </li>
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
            <!-- ***********************************=*************************** -->
            <!-- Start First Cards -->
            <!-- *************************************************************** -->


            <section class="service_section layout_padding">
                <div class="container">

                    <h2 class="custom_heading">Le Service de {{ $service -> nom  }}</h2>
                    <p class="custom_heading-text"> {{ $service -> sous_titre  }} </p>


                    <main class="container"
                          style="  max-width: 1200px; margin: 0 auto;  padding: 15px;  display: flex;">

                        <Style>


                            /* Columns */
                            .left-column {
                                width: 65%;
                                position: relative;
                            }

                            .right-column {
                                width: 35%;
                                margin-top: 60px;
                            }


                            /* Left Column */
                            .left-column img {
                                width: 100%;
                                position: absolute;
                                left: 0;
                                top: 0;
                                opacity: 0;
                                transition: all 0.3s ease;
                            }

                            .left-column img.active {
                                opacity: 1;
                            }


                            /* Right Column */

                            /* Product Description */
                            .product-description {
                                border-bottom: 1px solid #E1E8EE;
                                margin-bottom: 20px;
                            }

                            .product-description span {
                                font-size: 12px;
                                color: #358ED7;
                                letter-spacing: 1px;
                                text-transform: uppercase;
                                text-decoration: none;
                            }

                            .product-description h1 {
                                font-weight: 300;
                                font-size: 52px;
                                color: #43484D;
                                letter-spacing: -2px;
                            }

                            .product-description p {
                                font-size: 16px;
                                font-weight: 300;
                                color: #86939E;
                                line-height: 24px;
                            }

                            /* Product Configuration */
                            .product-color span,
                            .cable-config span {
                                font-size: 14px;
                                font-weight: 400;
                                color: #86939E;
                                margin-bottom: 20px;
                                display: inline-block;
                            }

                            /* Product Color */
                            .product-color {
                                margin-bottom: 30px;
                            }

                            .color-choose div {
                                display: inline-block;
                            }

                            .color-choose input[type="radio"] {
                            }

                            .color-choose input[type="radio"] + label span {
                                display: inline-block;
                                width: 40px;
                                height: 40px;
                                margin: -1px 4px 0 0;
                                vertical-align: middle;
                                cursor: pointer;
                                border-radius: 50%;
                            }

                            .color-choose input[type="radio"] + label span {
                                border: 2px solid #FFFFFF;
                                box-shadow: 0 1px 3px 0 rgba(0, 0, 0, 0.33);
                            }

                            .color-choose input[type="radio"]#red + label span {
                                background-color: #C91524;
                            }

                            .color-choose input[type="radio"]#blue + label span {
                                background-color: #314780;
                            }

                            .color-choose input[type="radio"]#black + label span {
                                background-color: #323232;
                            }

                            .color-choose input[type="radio"]:checked + label span {
                                background-image: url(images/check-icn.svg);
                                background-repeat: no-repeat;
                                background-position: center;
                            }

                            /* Cable Configuration */
                            .cable-choose {
                                margin-bottom: 20px;
                            }

                            .cable-choose button {
                                border: 2px solid #E1E8EE;
                                border-radius: 6px;
                                padding: 13px 20px;
                                font-size: 14px;
                                color: #5E6977;
                                background-color: #fff;
                                cursor: pointer;
                                transition: all .5s;
                            }

                            .cable-choose button:hover,
                            .cable-choose button:active,
                            .cable-choose button:focus {
                                border: 2px solid #86939E;
                                outline: none;
                            }

                            .cable-config {
                                border-bottom: 1px solid #E1E8EE;
                                margin-bottom: 20px;
                            }

                            .cable-config a {
                                color: #358ED7;
                                text-decoration: none;
                                font-size: 12px;
                                position: relative;
                                margin: 10px 0;
                                display: inline-block;
                            }

                            .cable-config a:before {
                                content: "?";
                                height: 15px;
                                width: 15px;
                                border-radius: 50%;
                                border: 2px solid rgba(53, 142, 215, 0.5);
                                display: inline-block;
                                text-align: center;
                                line-height: 16px;
                                opacity: 0.5;
                                margin-right: 5px;
                            }

                            /* Product Price */
                            .product-price {
                                display: flex;
                                align-items: center;
                            }

                            .product-price span {
                                font-size: 26px;
                                font-weight: 300;
                                color: #43474D;
                                margin-right: 20px;
                            }

                            .cart-btn {
                                display: inline-block;
                                background-color: #7DC855;
                                border-radius: 6px;
                                font-size: 16px;
                                color: #FFFFFF;
                                text-decoration: none;
                                padding: 12px 30px;
                                transition: all .5s;
                            }

                            .cart-btn:hover {
                                background-color: #64af3d;
                            }

                            /* Responsive */
                            @media (max-width: 940px) {
                                .container {
                                    flex-direction: column;
                                    margin-top: 60px;
                                }

                                .left-column,
                                .right-column {
                                    width: 100%;
                                }

                                .left-column img {
                                    width: 300px;
                                    right: 0;
                                    top: -65px;
                                    left: initial;
                                }
                            }

                            @media (max-width: 535px) {
                                .left-column img {
                                    width: 220px;
                                    top: -85px;
                                }
                            }

                        </Style>

                        <!-- Left Column / Headphones Image -->
                        <div class="left-column">
                            <img data-image="red" class="active" src="assets/img/plomb.avif" alt=""
                                 style="border-radius: 50px; padding: 30px;object-fit: contain;margin-top: 50px">
                        </div>


                        <!-- Right Column -->
                        <div class="right-column">

                            <!-- Product Description -->
                            <div class="product-description">
                                <span>Service</span>
                                <h1>{{ $service->nom  }}</h1>
                                <p>{{ $service->sous_titre  }} </p>
                            </div>

                            <form id="demandForm" action="{{ route('submit_demand') }}" method="POST">
                                @csrf

                                <input type="hidden" id="partenaireid" name="partenaireid" value="">
                                <input type="hidden" id="serviceId" name="serviceId" value="">
                                <input type="hidden" id="idservice" name="idservice" value="{{ $service->id }}">
                                <input type="hidden" id="idclient" name="idclient" value="{{ $client->id }}">

                                <!-- Product Configuration -->
                                <div class="product-configuration">

                                    <!-- Product Color -->
                                    <div class="product-color">
                                        <span>Addresse</span>

                                        <div class="address-choose">
                                            <div>
                                                <input type="radio" id="Address" name="client_address"
                                                       value="{{$client->address}}" required>
                                                <label for="client_address">{{$client->address}}</label>
                                            </div>
                                            <br>
                                            <div>
                                                <input type="radio" id="other" name="client_address" required>
                                                <label for="address">Autre ...</label>
                                                <input type="text" id="otherAddress" name="otherAddress"
                                                       style="display: none;">

                                            </div>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                $('input[type=radio][name=client_address]').change(function () {
                                                    if (this.id == 'other') {
                                                        $('#otherAddress').show();
                                                    } else {
                                                        $('#otherAddress').hide();
                                                    }
                                                });
                                            });
                                        </script>
                                        <script>
                                            document.getElementsByName('client_address').forEach(function (radio) {
                                                radio.addEventListener('change', function () {
                                                    if (this.id == 'other') {
                                                        document.getElementById('otherAddress').style.display = 'block';
                                                    } else {
                                                        document.getElementById('otherAddress').style.display = 'none';
                                                    }
                                                });
                                            });
                                        </script>

                                    </div>

                                    <div class="product-color">
                                        <span>Sous Services Demande</span>

                                        <div class="address-choose">
                                            <select name="sub_service"
                                                    style="width:100%;padding: 25px; border-radius: 15px"
                                                    id="serviceDropdown" required>
                                                <option value="">Tous les services</option>
                                                @foreach($service->sous_services as $subService)
                                                    <option value="{{ $subService }}">{{ $subService }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="product-color">
                                        <span>Date du service : </span>

                                        <div class="address-choose">
                                            <input type="date" id="demandDate" name="demandDate"
                                                   style="width:100%;padding: 25px; border-radius: 15px" required>
                                        </div>
                                        <script>
                                            $(document).ready(function () {
                                                var today = new Date();
                                                var dd = String(today.getDate()).padStart(2, '0');
                                                var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
                                                var yyyy = today.getFullYear();

                                                today = yyyy + '-' + mm + '-' + dd;
                                                document.getElementById('demandDate').value = today;
                                            });
                                        </script>
                                    </div>

                                    <div class="address-choose">
                                        <label for="charge_horaire">Charge Horaire (en Heures)</label><br>
                                        <input type="number" name="charge_horaire" id="charge_horaire" min="0"
                                               placeholder="" value="0"
                                               style="width:100%;padding: 25px; border-radius: 15px;margin-bottom: 15px"
                                               required>
                                        <br>
                                    </div>

                                    <!-- Product Pricing -->
                                    <div class="product-price" style="font-size: small; width: 100%;margin: 25px">
                                        <strong><span>  Aucun Partenaire selectionné</span></strong>
                                        {{--                               the following button gonna be shown only if the partner is selected--}}

                                    </div>
                                    <div class="product-price" style="font-size: small; width: 100%">
                                        <button type="submit" class="cart-btn">Poursuivre la commande</button>
                                    </div>
                                </div>

                    </main>

                    {{--                    @include('client.services.list_partenaire')--}}
                    <link rel="stylesheet" href="{{ asset('Client/assets/css/list_partenaire.css') }}">
                    <div class="container">


                        <div class="col-md-12">
                            <!--begin:: Widgets/User Progress -->
                            <div class="m-portlet m-portlet--full-height ">
                                <div class="m-portlet__head">
                                    <div class="m-portlet__head-caption">
                                        <div class="m-portlet__head-title">
                                            <h3 class="m-portlet__head-text">
                                                Liste des agents disponibles
                                            </h3>
                                        </div>
                                    </div>

                                </div>
                                <div class="m-portlet__body">
                                    <div class="tab-content">
                                        <div class="tab-pane active" id="m_widget4_tab1_content">
                                            <div class="m-widget4 m-widget4--progress">
                                                @foreach($partners as $partner)
                                                    @foreach($partner->proposed_services as $proposed_service)
                                                        <div class="m-widget4__item"
                                                             data-service="{{ $proposed_service->nom }}">
                                                            <div class="m-widget4__img m-widget4__img--pic">
                                                                <img
                                                                    src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                    alt="">
                                                            </div>
                                                            <div class="m-widget4__info">
                    <span class="m-widget4__title">
                        {{ $partner->name }}
                    </span>
                                                                <br>
                                                                <span class="m-widget4__sub">
                    {{ $proposed_service->prix . ' dhs/h' }}
                    </span>
                                                                <br>
                                                            </div>
                                                            <div class="m-widget4__progress">
                                                                <div class="m-widget4__progress-wrapper">
                        <span class="m-widget17__progress-number">
                          <div class="flex items-center" style="height: 100%;width: auto">
                                @for ($i = 0; $i < 5; $i++)
                                  @if ($partner->note > $i)
                                      <span class="fa fa-star checked"></span>
                                  @else
                                      <span class="fa fa-star "></span>
                                  @endif
                              @endfor
                        </div>
                        </span>
                                                                </div>
                                                            </div>
                                                            <div class="m-widget4__ext">
                                                                <a href="/partners/{{ $partner->id }}"
                                                                   class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">
                                                                    Voir profile
                                                                </a>
                                                                <a style="color: white"
                                                                   class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary"
                                                                   data-partnerid="{{$partner->id}}"
                                                                   data-serviceid="{{ $proposed_service->id }}"
                                                                   data-price="{{ $proposed_service->prix }}">
                                                                    Choisir.........
                                                                </a>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                @endforeach
                                            </div>
                                            <style>
                                                .checked {
                                                    color: orange;
                                                }
                                            </style>
                                        </div>
                                        <div class="tab-pane" id="m_widget4_tab2_content"></div>
                                        <div class="tab-pane" id="m_widget4_tab3_content"></div>
                                    </div>
                                </div>
                            </div>
                            <!--end:: Widgets/User Progress -->
                        </div>
                    </div>

                    <!-- Scripts -->
                    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

                    <script>
                        $(document).ready(function () {
                            // When the form is submitted
                            $('#demandForm').submit(function (event) {
                                // Prevent the default form submission action
                                event.preventDefault();

                                // Submit the form via AJAX
                                $.ajax({
                                    type: 'POST',
                                    url: $(this).attr('action'),
                                    data: $(this).serialize(),
                                    success: function (response) {
                                        // Show success alert
                                        Swal.fire({
                                            title: "Success!",
                                            text: response.message, // Show the success message from the server
                                            backdrop: `
                        rgba(0,0,123,0.4)
                    `,
                                            icon: "success",
                                            didClose: function () {
                                                // Redirect to the service history page when the modal is closed
                                                window.location.href = '/client/service_history';
                                            }
                                        });
                                        // Optionally, you can perform additional actions after successful submission
                                    },
                                    error: function (xhr, status, error) {
                                        // Handle error response
                                        var errorMessage = xhr.responseJSON.message;
                                        Swal.fire({
                                            title: "Error!",
                                            text: errorMessage,
                                            backdrop: `
                        rgba(0,0,123,0.4)
                    `,
                                            icon: "error"
                                        });
                                    }
                                });
                            });
                        });
                    </script>

                    <script>
                        // Get the dropdown menu
                        var dropdown = document.getElementById('serviceDropdown');

                        // Listen for the change event
                        dropdown.addEventListener('change', function () {
                            // Get the selected service
                            var selectedService = this.value;

                            // Get all the partners
                            var partners = document.querySelectorAll('.m-widget4__item');

                            // Loop over the partners
                            partners.forEach(function (partner) {
                                // Get the service of the partner
                                var partnerService = partner.getAttribute('data-service');

                                // If the partner's service matches the selected service, show the partner, otherwise hide it
                                if (partnerService === selectedService) {
                                    partner.style.display = 'block';
                                } else {
                                    partner.style.display = 'none';
                                }
                            });
                        });
                    </script>

                    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"
                            charset="utf-8"></script>
                    <script>
                        $(document).ready(function () {
                            // Initialize the price per hour
                            var pricePerHour = 0;

                            // Listen for changes on the charge_horaire input field
                            $('#charge_horaire').on('input', function () {
                                // Get the number of hours from the input field
                                var hours = $(this).val();

                                // Calculate the new price
                                var newPrice = hours * pricePerHour;

                                // Update the price on the page
                                $('.product-price span').text((pricePerHour != 0) ? newPrice + ' Dhs' : 'Aucun Partenaire selectionné');
                            });

                            // Listen for clicks on the "Choisir..." buttons
                            $('.btn-secondary').on('click', function () {
                                // Get the price per hour from the data-price attribute
                                console.log("partner selected" + $(this).data('serviceid'));

                                var serviceId = $(this).data('serviceid');
                                var partnerId = $(this).data('partnerid');

                                // Set the value of the partenaireid field
                                $('#partenaireid').val(partnerId);
                                $('#serviceId').val(serviceId);
                                console.log("partner selected" + partnerId);
                                console.log("service selected" + serviceId);

                                pricePerHour = $(this).data('price');

                                // Trigger an input event on the charge_horaire input field to update the price
                                $('#charge_horaire').trigger('input');
                                // Remove the selected-partner class from all partners
                                $('.m-widget4__item').removeClass('selected-partner');

                                // Add the selected-partner class to the clicked button's parent partner element
                                $(this).closest('.m-widget4__item').addClass('selected-partner');


                            });
                        });
                    </script>
                    <script>
                        $(document).ready(function () {

                            $('.color-choose input').on('click', function () {
                                var headphonesColor = $(this).attr('data-image');

                                $('.active').removeClass('active');
                                $('.left-column img[data-image = ' + headphonesColor + ']').addClass('active');
                                $(this).addClass('active');
                            });

                        });

                    </script>


                    <div class="d-flex justify-content-center"><a href="" class="custom_dark-btn"> Read More </a></div>
                </div>
            </section>


            <section class="container-fluid footer_section">
                <p> Copyright © 2024 All Rights Reserved</p>
            </section>
            <script>
                // This example adds a marker to indicate the position of Bondi Beach in Sydney,
                // Australia.
                function initMap() {
                    var map = new google.maps.Map(document.getElementById('map'), {
                        zoom: 11,
                        center: {
                            lat: 40.645037,
                            lng: -73.880224
                        },
                    });

                    var image = 'images/maps-and-flags.png';
                    var beachMarker = new google.maps.Marker({
                        position: {
                            lat: 40.645037,
                            lng: -73.880224
                        },
                        map: map,
                        icon: image
                    });
                }
            </script>
            <script src="assets/bootstrap/js/bootstrap.min.js"></script>
            <script src="assets/js/jquery-3.4.1.min.js"></script>
            <script src="assets/js/bootstrap.js"></script>


            <div class="row">

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
<script src="../Partenaire/assets/libs/jquery/dist/jquery.min.js"></script> <!-- Move this line to here -->
<script src="../Partenaire/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
<!-- apps -->
<!-- apps -->
<script src="../Partenaire/dist/js/app-style-switcher.js"></script>
<script src="../Partenaire/dist/js/feather.min.js"></script>
<script src="../Partenaire/assets/libs/perfect-scrollbar/dist/perfect-scrollbar.jquery.min.js"></script>
<script src="../Partenaire/dist/js/sidebarmenu.js"></script>
<!--Custom JavaScript -->
<script src="../Partenaire/dist/js/custom.min.js"></script>
<!--This page JavaScript -->
<script src="../Partenaire/assets/extra-libs/c3/d3.min.js"></script>
<script src="../Partenaire/assets/extra-libs/c3/c3.min.js"></script>
<script src="../Partenaire/assets/libs/chartist/dist/chartist.min.js"></script>
<script src="../Partenaire/assets/libs/chartist-plugin-tooltips/dist/chartist-plugin-tooltip.min.js"></script>
<script src="../Partenaire/assets/extra-libs/jvector/jquery-jvectormap-2.0.2.min.js"></script>
<script src="../Partenaire/assets/extra-libs/jvector/jquery-jvectormap-world-mill-en.js"></script>
<script src="../Partenaire/dist/js/pages/dashboards/dashboard1.min.js"></script>
<script>
    let currentStep = 1;
    const totalSteps = 3;

    function nextStep() {
        // Hide current step
        document.getElementById('step' + currentStep).style.display = 'none';

        // Increment current step
        currentStep++;

        // If we're past the last step, wrap around to the first step
        if (currentStep > totalSteps) {
            currentStep = 1;
        }

        // Show next step
        document.getElementById('step' + currentStep).style.display = 'block';
    }
</script>
</body>

</html>
