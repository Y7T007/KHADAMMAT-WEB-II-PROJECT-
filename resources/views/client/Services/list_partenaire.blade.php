<!-- Include jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<!-- Include CSS -->
<link rel="stylesheet" href="{{ asset('Client/assets/css/list_partenaire.css') }}">

<!-- HTML Structure for Partner List -->
<div class="container">
    <div class="col-md-12">
        <div class="m-portlet m-portlet--full-height">
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
                <div class="m-widget4 m-widget4--progress" id="partnerList">
                    <!-- Partner items will be dynamically inserted here -->
                </div>
            </div>
        </div>
    </div>
</div>

<!-- JavaScript using jQuery for AJAX Request -->
<script>
    // jQuery AJAX request to fetch partner data
    $(document).ready(function() {
        $.ajax({
            url: 'http://localhost:8000/client/get-partners',
            type: 'GET',
            data: {
                service: 'Installation de plomberie'
            },
            success: function(response) {
                const partner = response.partner;
                const partnerListContainer = $('#partnerList');

                // Construct HTML for partner item
                const partnerItemHTML = `
                    <div class="m-widget4__item">
                        <div class="m-widget4__img m-widget4__img--pic">
                            <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                        </div>
                        <div class="m-widget4__info">
                            <span class="m-widget4__title">${partner.name}</span><br>
                            <span class="m-widget4__sub">Email: ${partner.email}</span>
                        </div>
                        <div class="m-widget4__progress">
                            <div class="m-widget4__progress-wrapper">
                                <span class="m-widget17__progress-number">Disponible aujourd'hui</span>
                                <div class="progress m-progress--sm">
                                    <div class="progress-bar bg-brand" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                                </div>
                            </div>
                        </div>
                        <div class="m-widget4__ext">
                            <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">Voir profil</a>
                            <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary">Choisir</a>
                        </div>
                    </div>
                `;

                // Append partner item HTML to the container
                partnerListContainer.html(partnerItemHTML);
            },
            error: function(error) {
                console.error('Error fetching partner data:', error);
            }
        });
    });
</script>
