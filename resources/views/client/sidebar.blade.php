<!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside style="background-color: #ffca2bd1;" class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar" data-sidebarbg="skin6">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">


                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../client/home"
                                aria-expanded="false"><i data-feather="home" class="feather-icon"></i><span
                                    class="hide-menu">Home</span></a></li>
                        <li class="list-divider"></li>


                        <li class="sidebar-item"> <a class="sidebar-link" href="../client/all-services"
                                aria-expanded="false"><i class="bi bi-tools"></i><span
                                    class="hide-menu">Nos Services
                                </span></a>
                        </li>

                       <!-- Dans votre sidebar.blade.php ou un fichier similaire -->
<!-- Sidebar item for 'Nos Partenaires' -->
<li class="sidebar-item"> 
    <a class="sidebar-link" href="{{ route('client.partners.index') }}" aria-expanded="false">
        <i class="bi bi-people-fill"></i>
        <span class="hide-menu">Nos Partenaires</span>
    </a>
</li>




<li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="{{ route('client.service_history') }}"
    aria-expanded="false"><i class="bi bi-clock-history"></i><span
        class="hide-menu">Historique </span></a></li>


                             <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="messages"
                                      aria-expanded="false"><i class="bi bi-chat-left-text-fill"></i><span
                                           class="hide-menu">Messagerie </span></a></li>
                             <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="../client/profile"
                                      aria-expanded="false"><i class="bi bi-person-fill"></i><span
                                           class="hide-menu">Profile </span></a></li>
                             <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="logout"
                                      aria-expanded="false"><i class="bi bi-box-arrow-right"></i><span
                                           class="hide-menu">Sign Out </span></a></li>

                        {{-- <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-chat"
                                aria-expanded="false"><i data-feather="message-square" class="feather-icon"></i><span
                                    class="hide-menu">Chat</span></a></li>
                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="app-calendar"
                                aria-expanded="false"><i data-feather="calendar" class="feather-icon"></i><span
                                    class="hide-menu">Calendar</span></a></li>




                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="file-text" class="feather-icon"></i><span
                                    class="hide-menu">Forms </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="form-inputs" class="sidebar-link"><span
                                            class="hide-menu"> Form Inputs
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="form-input-grid" class="sidebar-link"><span
                                            class="hide-menu"> Form Grids
                                        </span></a>
                                </li>
                                <!-- // -->
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="grid" class="feather-icon"></i><span
                                    class="hide-menu">Tables </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="table-basic" class="sidebar-link"><span
                                            class="hide-menu"> Basic Table
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-dark-basic" class="sidebar-link"><span
                                            class="hide-menu"> Dark Basic Table
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-sizing" class="sidebar-link"><span
                                            class="hide-menu">
                                            Sizing Table
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-layout-coloured" class="sidebar-link"><span
                                            class="hide-menu">
                                            Coloured
                                            Table Layout
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="table-datatable-basic" class="sidebar-link"><span
                                            class="hide-menu">
                                            Basic
                                            Datatables
                                            Layout
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="bar-chart" class="feather-icon"></i><span
                                    class="hide-menu">Charts </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="chart-morris" class="sidebar-link"><span
                                            class="hide-menu"> Morris Chart
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="chart-chart-js" class="sidebar-link"><span
                                            class="hide-menu"> ChartJs
                                        </span></a>
                                </li>
                                <li class="sidebar-item"><a href="chart-knob" class="sidebar-link"><span
                                            class="hide-menu">
                                            Knob Chart
                                        </span></a>
                                </li>
                            </ul>
                        </li>
                        <li class="sidebar-item"> <a class="sidebar-link has-arrow" href="javascript:void(0)"
                                aria-expanded="false"><i data-feather="box" class="feather-icon"></i><span
                                    class="hide-menu">UI Elements </span></a>
                            <ul aria-expanded="false" class="collapse  first-level base-level-line">
                                <li class="sidebar-item"><a href="ui-list-media" class="sidebar-link"><span
                                            class="hide-menu">List
                                            Media</span></a></li>
                                <li class="sidebar-item"><a href="ui-carousel" class="sidebar-link"><span
                                            class="hide-menu">
                                            Carousel</span></a></li>
                            </ul>




                        <li class="sidebar-item"> <a class="sidebar-link sidebar-link" href="ui-cards"
                                aria-expanded="false"><i data-feather="sidebar" class="feather-icon"></i><span
                                    class="hide-menu">Cards
                                </span></a>
                        </li>
                        <!-- // --> --}}


                        <!-- // -->
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
