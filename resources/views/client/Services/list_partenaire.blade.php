<link rel="stylesheet" href="{{ asset('Client/assets/css/list_partenaire.css') }}"><div class="container">


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
                                <div class="m-widget4__item">
                                    <div class="m-widget4__img m-widget4__img--pic">
                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt="">
                                    </div>
                                    <div class="m-widget4__info">
                        <span class="m-widget4__title">
                            {{ $partner->name }}
                        </span>
                                        <br>
                                        <span class="m-widget4__sub">
                            {{ $partner->price }} dhs/h
                        </span>
                                    </div>
                                    <div class="m-widget4__progress">
                                        <div class="m-widget4__progress-wrapper">
                            <span class="m-widget17__progress-number">
                                Disponnible dans 5 jours
                            </span>
                                            <div class="progress m-progress--sm">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 63%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="63"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="m-widget4__ext">
                                        <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-primary">
                                            Voir profile
                                        </a>
                                        <a href="#" class="m-btn m-btn--hover-brand m-btn--pill btn btn-sm btn-secondary" >
                                            Choisir.........
                                        </a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="tab-pane" id="m_widget4_tab2_content"></div>
                    <div class="tab-pane" id="m_widget4_tab3_content"></div>
                </div>
            </div>
        </div>
        <!--end:: Widgets/User Progress -->
    </div>
</div>
