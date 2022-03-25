<!-- ========== App Menu ========== -->
<div class="app-menu navbar-menu">
    <!-- LOGO -->
    <div class="navbar-brand-box">
        <!-- Dark Logo-->
        <a href="index" class="logo logo-dark">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-dark.png') }}" alt="" height="17">
            </span>
        </a>
        <!-- Light Logo-->
        <a href="index" class="logo logo-light">
            <span class="logo-sm">
                <img src="{{ URL::asset('assets/images/logo-sm.png') }}" alt="" height="22">
            </span>
            <span class="logo-lg">
                <img src="{{ URL::asset('assets/images/logo-light.png') }}" alt="" height="17">
            </span>
        </a>
        <button type="button" class="btn btn-sm p-0 fs-20 header-item float-end btn-vertical-sm-hover" id="vertical-hover">
            <i class="ri-record-circle-line"></i>
        </button>
    </div>

    <div id="scrollbar">
        <div class="container-fluid">

            <div id="two-column-menu">
            </div>
            <ul class="navbar-nav" id="navbar-nav">
                <li class="menu-title"><span>@lang('translation.menu')</span></li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="dashboard" role="button">
                        <i class="ri-dashboard-2-line"></i> <span>@lang('translation.dashboards')</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="tickets" role="button">
                        <i class="ri-apps-2-line"></i> <span>Tickets</span>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link menu-link" href="categorias" role="button">
                        <i class="ri-layout-3-line"></i> <span>Categorias</span>
                    </a>
                </li> <!-- end Dashboard Menu -->
                <li class="nav-item">
                    <a class="nav-link menu-link" href="prioridades" role="button">
                        <i class="ri-account-circle-line"></i> <span>Prioridades</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#" role="button">
                        <i class="ri-account-circle-line"></i> <span>Usuários</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="pesquisa-satisfacao" role="button">
                        <i class="ri-pages-line"></i> <span> Pesquisa de Satisfação</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link menu-link" href="#sidebarIcons" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="sidebarIcons">
                        <i class="ri-compasses-2-line"></i> <span>@lang('translation.icons')</span>
                    </a>
                    <div class="collapse menu-dropdown" id="sidebarIcons">
                        <ul class="nav nav-sm flex-column">
                            <li class="nav-item">
                                <a href="#" class="nav-link">@lang('translation.remix')</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">@lang('translation.boxicons')</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">@lang('translation.material-design')</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">@lang('translation.line-awesome')</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">@lang('translation.feather')</a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
<!-- Vertical Overlay-->
<div class="vertical-overlay"></div>