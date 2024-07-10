@php
$containerNav = $containerNav ?? 'container-fluid';
$navbarDetached = ($navbarDetached ?? '');

@endphp

<!-- Navbar -->
@if(isset($navbarDetached) && $navbarDetached == 'navbar-detached')
<nav class="layout-navbar {{$containerNav}} navbar navbar-expand-xl {{$navbarDetached}} align-items-center bg-navbar-theme"
    id="layout-navbar" style="box-shadow: none; background: transparent !important;">
    @endif
    @if(isset($navbarDetached) && $navbarDetached == '')
    <nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar"
        style="box-shadow: none; background: transparent !important;">
        <div class="{{$containerNav}}">
            @endif

            <!--  Brand demo (display only for navbar-full and hide on below xl) -->
            @if(isset($navbarFull))
            <div class="navbar-brand app-brand demo d-none d-xl-flex py-0 me-4">
                <a href="{{url('/')}}" class="app-brand-link gap-2">
                    <span class="app-brand-logo demo">
                        @include('_partials.macros',["width"=>25,"withbg"=>'#696cff'])
                    </span>
                    <span class="app-brand-text demo menu-text fw-bolder">{{config('variables.templateName')}}</span>
                </a>
            </div>
            @endif

            <!-- ! Not required for layout-without-menu -->
            @if(!isset($navbarHideToggle))
            <div
                class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0{{ isset($menuHorizontal) ? ' d-xl-none ' : '' }} {{ isset($contentNavbar) ?' d-xl-none ' : '' }}">
                <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                    <i class="bx bx-menu bx-sm"></i>
                </a>
            </div>
            @endif

            <div class="navbar-nav-right d-flex align-items-center row" id="navbar-collapse">

                @if(!isset($menuHorizontal))
                <div class="col-7 card mb-0 px-3 search-wrap d-flex justify-content-center" style="height:54px;">
                    <!-- Search -->
                    <div class="navbar-nav">
                        <div class="nav-item navbar-search-wrapper mb-0">
                            <a class="nav-item nav-link search-toggler px-0" href="javascript:void(0);">
                                <i class="bx bx-search bx-sm"></i>
                                <span class="d-none d-md-inline-block text-muted">Search (Ctrl+/)</span>
                            </a>
                        </div>
                    </div>
                </div>
                <!-- /Search -->
                <div class="col-1 mb-0"></div>
                @endif
                <div class="col-4 card mb-0 d-flex justify-content-between align-items-center">
                    <ul class="navbar-nav flex-row align-items-center justify-content-around" style="width: 100%;">
                        @if(!isset($menuHorizontal))
                        <!-- Language -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-globe bx-sm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">English</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">French</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">Arabic</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <span class="align-middle">German</span>
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <!-- <li class="nav-item me-2 me-xl-0">
                            <a class="nav-item nav-link" href="{{url('app/user/notes?type=all-news')}}">
                                <img src="{{asset('assets/svg/icons/sticky-notes.svg')}}" width="25" alt="">
                            </a>
                        </li>

                        {{-- @if(auth()->user()->is_superadmin && auth()->user()->hasRole('Super Admin')) --}}
                        {{-- data-bs-toggle="modal" data-bs-target="#livestreammodel" --}}
                        {{-- <a href="{{url('app/user/live')}}" class="btn btn-primary">
                        <img src="{{ asset('assets/img/8103873.png') }}" width="20" />
                        </a> --}}
                        {{-- @endif --}} -->

                        <!--/ Language -->
                        @endif

                        @if(isset($menuHorizontal))
                        <!-- Search -->
                        <li class="nav-item navbar-search-wrapper me-2 me-xl-0">
                            <a class="nav-item nav-link search-toggler" href="javascript:void(0);">
                                <i class="bx bx-search bx-sm"></i>
                            </a>
                        </li>
                        <!-- /Search -->
                        @endif

                        <!-- Quick links  -->
                        <li class="nav-item dropdown-shortcuts navbar-dropdown dropdown me-2 me-xl-0">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class='bx bx-grid-alt bx-sm'></i>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end py-0">
                                <div class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Shortcuts</h5>
                                        <a href="javascript:void(0)" class="dropdown-shortcuts-add text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Add shortcuts"><i
                                                class="bx bx-sm bx-plus-circle"></i></a>
                                    </div>
                                </div>
                                <div class="dropdown-shortcuts-list scrollable-container">
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-calendar fs-4"></i>
                                            </span>
                                            <a href="{{url('app/calendar')}}" class="stretched-link">Calendar</a>
                                            <small class="text-muted mb-0">Appointments</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-food-menu fs-4"></i>
                                            </span>
                                            <a href="{{url('app/invoice/list')}}" class="stretched-link">Invoice App</a>
                                            <small class="text-muted mb-0">Manage Accounts</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-user fs-4"></i>
                                            </span>
                                            <a href="{{url('app/user/list')}}" class="stretched-link">User App</a>
                                            <small class="text-muted mb-0">Manage Users</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-check-shield fs-4"></i>
                                            </span>
                                            <a href="{{url('app/access-roles')}}" class="stretched-link">Role
                                                Management</a>
                                            <small class="text-muted mb-0">Permission</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-pie-chart-alt-2 fs-4"></i>
                                            </span>
                                            <a href="{{url('/')}}" class="stretched-link">Dashboard</a>
                                            <small class="text-muted mb-0">User Profile</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-cog fs-4"></i>
                                            </span>
                                            <a href="{{url('pages/account-settings-account')}}"
                                                class="stretched-link">Setting</a>
                                            <small class="text-muted mb-0">Account Settings</small>
                                        </div>
                                    </div>
                                    <div class="row row-bordered overflow-visible g-0">
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-help-circle fs-4"></i>
                                            </span>
                                            <a href="{{url('pages/help-center-landing')}}" class="stretched-link">Help
                                                Center</a>
                                            <small class="text-muted mb-0">FAQs & Articles</small>
                                        </div>
                                        <div class="dropdown-shortcuts-item col">
                                            <span
                                                class="dropdown-shortcuts-icon bg-label-secondary rounded-circle mb-2">
                                                <i class="bx bx-window-open fs-4"></i>
                                            </span>
                                            <a href="{{url('modal-examples')}}" class="stretched-link">Modals</a>
                                            <small class="text-muted mb-0">Useful Popups</small>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Quick links -->

                        <!-- Style Switcher -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-bell bx-sun bx-sm"></i>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item">
                                        <i class="bx bx-sun me-2"></i>
                                        <span class="align-middle">Light</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <i class="bx bx-moon me-2"></i>
                                        <span class="align-middle">Dark</span>
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item">
                                        <i class="bx bx-desktop me-2"></i>
                                        <span class="align-middle">System</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Style Switcher -->

                        <!-- Notification -->
                        <li class="nav-item dropdown-notifications navbar-dropdown dropdown me-3 me-xl-1">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown" data-bs-auto-close="outside" aria-expanded="false">
                                <i class="bx bx-bell bx-sm"></i>
                                <span class="badge bg-danger rounded-pill badge-notifications">5</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end py-0">
                                <li class="dropdown-menu-header border-bottom">
                                    <div class="dropdown-header d-flex align-items-center py-3">
                                        <h5 class="text-body mb-0 me-auto">Notification</h5>
                                        <a href="javascript:void(0)" class="dropdown-notifications-all text-body"
                                            data-bs-toggle="tooltip" data-bs-placement="top" title="Mark all as read"><i
                                                class="bx fs-4 bx-envelope-open"></i></a>
                                    </div>
                                </li>
                                <li class="dropdown-notifications-list scrollable-container">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatars/1.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Congratulation Lettie 🎉</h6>
                                                    <p class="mb-0">Won the monthly best seller gold badge</p>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span
                                                            class="avatar-initial rounded-circle bg-label-danger">CF</span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Charles Franklin</h6>
                                                    <p class="mb-0">Accepted your connection</p>
                                                    <small class="text-muted">12hr ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatars/2.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New Message ✉️</h6>
                                                    <p class="mb-0">You have new message from Natalie</p>
                                                    <small class="text-muted">1h ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                class="bx bx-cart"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Whoo! You have new order 🛒 </h6>
                                                    <p class="mb-0">ACME Inc. made new order $1,154</p>
                                                    <small class="text-muted">1 day ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatars/9.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Application has been approved 🚀 </h6>
                                                    <p class="mb-0">Your ABC project application has been approved.</p>
                                                    <small class="text-muted">2 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-success"><i
                                                                class="bx bx-pie-chart-alt"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Monthly report is generated</h6>
                                                    <p class="mb-0">July monthly financial report is generated </p>
                                                    <small class="text-muted">3 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatars/5.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">Send connection request</h6>
                                                    <p class="mb-0">Peter sent you connection request</p>
                                                    <small class="text-muted">4 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="list-group-item list-group-item-action dropdown-notifications-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <img src="{{ asset('assets/img/avatars/6.png') }}" alt
                                                            class="w-px-40 h-auto rounded-circle">
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">New message from Jane</h6>
                                                    <p class="mb-0">Your have new message from Jane</p>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                        <li
                                            class="list-group-item list-group-item-action dropdown-notifications-item marked-as-read">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar">
                                                        <span class="avatar-initial rounded-circle bg-label-warning"><i
                                                                class="bx bx-error"></i></span>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="mb-1">CPU is running high</h6>
                                                    <p class="mb-0">CPU Utilization Percent is currently at 88.63%,</p>
                                                    <small class="text-muted">5 days ago</small>
                                                </div>
                                                <div class="flex-shrink-0 dropdown-notifications-actions">
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-read"><span
                                                            class="badge badge-dot"></span></a>
                                                    <a href="javascript:void(0)"
                                                        class="dropdown-notifications-archive"><span
                                                            class="bx bx-x"></span></a>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="dropdown-menu-footer border-top">
                                    <a href="javascript:void(0);"
                                        class="dropdown-item d-flex justify-content-center text-primary p-2 h-px-40">
                                        View all notifications
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!--/ Notification -->

                        <!-- User -->
                        <li class="nav-item navbar-dropdown dropdown-user dropdown">
                            <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);"
                                data-bs-toggle="dropdown">
                                <div class="avatar avatar-online">
                                    <img src="{{ Auth::user() && Auth::user()->image ? asset('storage/'.Auth::user()->image) : asset('https://www.w3schools.com/howto/img_avatar.png') }}"
                                        alt class="w-px-40 h-auto rounded-circle">
                                </div>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end">
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin_profile') }}">
                                        <div class="d-flex">
                                            <div class="flex-shrink-0 me-3">
                                                <div class="avatar avatar-online">
                                                    <img src="{{ Auth::user() && Auth::user()->image ? asset('storage/'.Auth::user()->image) : asset('https://www.w3schools.com/howto/img_avatar.png') }}"
                                                        alt class="w-px-40 h-auto rounded-circle">
                                                </div>
                                            </div>
                                            <div class="flex-grow-1">
                                                <span class="fw-semibold d-block">
                                                    @if (Auth::check())
                                                    {{ Auth::user()->name }}
                                                    @else
                                                    John Doe
                                                    @endif
                                                </span>
                                                <small class="text-muted">{{ Auth::user()->email }}</small>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin_profile') }}">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">My Profile</span>
                                    </a>
                                </li>
                                   <li>
                                    <a class="dropdown-item" href="{{ route('admin_activity') }}">
                                        <i class="bx bx-user me-2"></i>
                                        <span class="align-middle">Admin Activity</span>
                                    </a>
                                </li>
                                @if (Auth::check() && false && Laravel\Jetstream\Jetstream::hasApiFeatures())
                                <li>
                                    <a class="dropdown-item" href="{{ route('api-tokens.index') }}">
                                        <i class='bx bx-key me-2'></i>
                                        <span class="align-middle">API Tokens</span>
                                    </a>
                                </li>
                                @endif

                                @if (Auth::User() && false && Laravel\Jetstream\Jetstream::hasTeamFeatures())
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <h6 class="dropdown-header">Manage Team</h6>
                                </li>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <li>
                                    <a class="dropdown-item"
                                        href="{{ Auth::user() ? route('teams.show', Auth::user()->currentTeam->id) : 'javascript:void(0)' }}">
                                        <i class='bx bx-cog me-2'></i>
                                        <span class="align-middle">Team Settings</span>
                                    </a>
                                </li>
                                @can('create', Laravel\Jetstream\Jetstream::newTeamModel())
                                <li>
                                    <a class="dropdown-item" href="{{ route('teams.create') }}">
                                        <i class='bx bx-user me-2'></i>
                                        <span class="align-middle">Create New Team</span>
                                    </a>
                                </li>
                                @endcan
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                <lI>
                                    <h6 class="dropdown-header">Switch Teams</h6>
                                </lI>
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                @if (Auth::user())
                                @foreach (Auth::user()->allTeams() as $team)
                                {{-- Below commented code read by artisan command while installing jetstream. !! Do not remove if you want to use jetstream. --}}

                                {{-- <x-jet-switchable-team :team="$team" /> --}}
                                @endforeach
                                @endif
                                @endif
                                <li>
                                    <div class="dropdown-divider"></div>
                                </li>
                                @if (Auth::check())
                                <li>
                                    <a class="dropdown-item" href="{{ route('admin.logout') }}"
                                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                        <i class='bx bx-power-off me-2'></i>
                                        <span class="align-middle">Logout</span>
                                    </a>
                                </li>
                                <form method="POST" id="logout-form" action="{{ route('admin.logout') }}">
                                    @csrf
                                </form>
                                @endif
                            </ul>
                        </li>
                        <!--/ User -->
                    </ul>
                </div>
            </div>

            <!-- Search Small Screens -->
            <div
                class="navbar-search-wrapper search-input-wrapper {{ isset($menuHorizontal) ? $containerNav : '' }} d-none">
                <input type="text"
                    class="form-control search-input {{ isset($menuHorizontal) ? '' : $containerNav }} border-0"
                    placeholder="Search..." aria-label="Search...">
                <i class="bx bx-x bx-sm search-toggler cursor-pointer"></i>
            </div>

            @if(!isset($navbarDetached))
        </div>
        @endif
    </nav>
    <!-- / Navbar -->

    <!-- Category Model -->
    <div class="modal fade" id="livestreammodel" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="col-xl-6">
                    <div class="nav-align-top mb-4">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <button type="button" class="nav-link active" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-home" aria-controls="navs-top-home"
                                    aria-selected="true">Publish</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="tab"
                                    data-bs-target="#navs-top-profile" aria-controls="navs-top-profile"
                                    aria-selected="false">Album</button>
                            </li>
                            <li class="nav-item">
                                <button type="button" class="nav-link" role="tab" data-bs-toggle="modal"
                                    data-bs-target="#onboardingSlideModal" aria-controls="onboardingSlideModal"
                                    aria-selected="false">Video</button>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="modal-body">
                    <div class="tab-content tabcontent--1">
                        <div class="tab-pane fade show active" id="navs-top-home" role="tabpanel">
                            <div class="row">
                                <form method="POST" action="{{ route('news-category.store') }}">
                                    @csrf
                                    <div class="col-12 d-flex">
                                        <div>
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" width="50"
                                                class="rounded-circle">
                                        </div>
                                        <textarea type="text" id="nameLarge" class="form-control border-0"
                                            placeholder="Write Something here" name="news_category"></textarea>
                                    </div>
                                </form>
                                <div class="col-12 "
                                    style="display:flex;gap:16px;margin-top:100px; border-top:1px solid #f7f7f7 ">
                                    <div>
                                        <button class="btn" style="background-color:#f7f7f7; border-radius:500px;">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-camera">
                                                <path
                                                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                </path>
                                                <circle cx="12" cy="13" r="4"></circle>
                                            </svg>&nbsp;Media</button>
                                    </div>
                                    <div>
                                        <button class="btn " style="background-color:#f7f7f7; border-radius:500px;">
                                            <img src={{ asset('assets/img/emoji-1.svg') }}
                                                width="25">&nbsp;Activity</button>
                                    </div>

                                    <div>
                                        <button class="btn " style="background-color:#f7f7f7; border-radius:500px;">
                                            <i class='bx bx-dots-horizontal-rounded '></i></button>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="navs-top-profile" role="tabpanel">
                            <div class="row">
                                <form method="POST" action="{{ route('news-category.store') }}">
                                    @csrf
                                    <div class="col-12 d-flex">
                                        <div>
                                            <img src="{{ asset('assets/img/avatars/1.png') }}" width="50"
                                                class="rounded-circle">
                                        </div>
                                        <textarea type="text" id="nameLarge" class="form-control border-0"
                                            placeholder="Write Something here" name="news_category"></textarea>
                                    </div>
                                </form>
                                <div class="col-12"
                                    style="display:flex;gap:16px;margin-top:100px; border-top:1px solid #f7f7f7 ">
                                    <div><button class="btn "
                                            style="background-color:#f7f7f7; border-radius:500px;"><svg
                                                xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-camera">
                                                <path
                                                    d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">
                                                </path>
                                                <circle cx="12" cy="13" r="4"></circle>
                                            </svg>&nbsp;Media</button></div>
                                    <div> <button class="btn "
                                            style="background-color:#f7f7f7; border-radius:500px;"><img
                                                src={{ asset('assets/img/emoji-1.svg') }}
                                                width="25">&nbsp;Activity</button></div>
                                    <button class="btn " style="background-color:#f7f7f7; border-radius:500px;"><i
                                            class='bx bx-dots-horizontal-rounded '></i></button>
                                    <div></div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>


    <!-- slider modal -->
    <div class="modal-onboarding modal fade animate__animated" id="onboardingSlideModal" tabindex="-1"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content text-center">
                <div class="modal-header border-0">
                    <a class="text-muted close-label" href="javascript:void(0);" data-bs-dismiss="modal">Skip Intro</a>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div id="modalCarouselControls" class="carousel slide pb-4 mb-2" data-bs-interval="false">
                    <ol class="carousel-indicators">
                        <li data-bs-target="#modalCarouselControls" data-bs-slide-to="0" class="active"></li>
                        <li data-bs-target="#modalCarouselControls" data-bs-slide-to="1"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="onboarding-media">
                                <div class="mx-2">
                                    <img src="{{asset('assets/img/videotrip.svg')}}" alt="girl-with-laptop-light"
                                        width="335" class="img-fluid">
                                </div>
                            </div>
                            <div class="onboarding-content">
                                <h4 class="onboarding-title text-body">Share live videos</h4>
                                <p>Lorem ipsum sit dolor amet is a dummy text used by the typography industry and the
                                    web industry.</p>
                                <br><br>
                            </div>
                            <a class="carousel-control-next" href="#modalCarouselControls" role="button"
                                data-bs-slide="next">
                                <button type="button" class="btn btn-primary">
                                    Next
                                </button>
                            </a>
                        </div>
                        <div class="carousel-item">
                            <div class="onboarding-media">
                                <div class="mx-2">
                                    <img src="{{asset('assets/img/videocall.svg')}}" alt="boy-with-laptop-light"
                                        width="300" class="img-fluid">
                                </div>
                            </div>
                            <div class="onboarding-content">
                                <h4 class="onboarding-title text-body">To build your audience</h4>
                                <div class="onboarding-info">Lorem ipsum sit dolor amet is a dummy text used by the
                                    typography industry and the web industry.</div> <br><br>
                                <button type="button" class="btn btn-primary" data-bs-toggle="modal"
                                    data-bs-target="#animationModal">
                                    Got it
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--/ slider modal -->

    <!-- Modal -->
    <div class="modal fade animate__animated fadeIn" id="animationModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel5">Go Live</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                {{-- <div class="modal-body"> --}}
                <div class="row ">
                    <div class="col-md-7">
                        <div class="video-container">
                            <iframe width="100%" height="680"
                                src="https://media.istockphoto.com/id/1365258482/video/adaptive-interface-design-video-concept.mp4?s=mp4-640x640-is&k=20&c=tf7tups5Y05BtaiZnfdCfyMrt3lhDbH3sX_H6R8Tji8=">
                            </iframe>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="d-flex justify-content-start align-items-center user-name ">
                                    <div class="avatar-wrapper">
                                        <div class="avatar avatar-sm me-3"><img src="{{asset('assets/img/10.png')}}"
                                                alt="Avatar" class="rounded-circle"></div>
                                    </div>
                                    <div class="d-flex flex-column">
                                        <a href="javascript:void(0)" class="text-body text-truncate">
                                            <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                        </a>
                                        <small class="text-muted">right now</small>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="btn border rounded">Follow</button>
                                <div class="dropup d-none d-sm-block" style="position: absolute; right:10px; top:55px;">
                                    <button class="btn p-0" type="button" id="sharedList" data-bs-toggle="dropdown"
                                        aria-haspopup="true" aria-expanded="false">
                                        <i class="bx bx-dots-vertical"></i>
                                    </button>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="sharedList"
                                        style="padding:10px;">

                                        <strong>Who can see this ?</strong>
                                        <ul class="list-group list-unstyled">
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bx-world'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Public</span>
                                                            </a>
                                                            <small class="text-muted">Anyone can see this
                                                                publication.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bx-group'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Friends</span>
                                                            </a>
                                                            <small class="text-muted">Only Friends can see this
                                                                publication.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bxs-right-arrow-alt'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Specific Friends</span>
                                                            </a>
                                                            <small class="text-muted">Dont Show it to some
                                                                friends.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                            <hr>
                                            <li><a>
                                                    <div
                                                        class="d-flex justify-content-center align-items-center user-name ">
                                                        <div class="avatar-wrapper">
                                                            <div class="avatar avatar-sm me-3 text-center"><i
                                                                    class='bx bxs-user'></i></div>
                                                        </div>
                                                        <div class="d-flex flex-column">
                                                            <a href="javascript:void(0)"
                                                                class="text-body text-truncate">
                                                                <span class="fw-semibold">Only me</span>
                                                            </a>
                                                            <small class="text-muted">Only me can see this
                                                                publication.</small>
                                                        </div>
                                                    </div>
                                                </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-11 mt-4">
                                <input type="text" class="form-control form-rounded"
                                    placeholder="what is this live about?" />
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-8 ">
                                <span style="margin-left:10px;">
                                    <i class='bx bx-heart'></i>&nbsp;&nbsp;0</span>
                                <span style="margin-left:10px;">
                                    <i class='bx bx-share'></i>&nbsp;&nbsp;0</span>
                                <span style="margin-left:10px;">
                                    <i class='bx bx-chat'></i>&nbsp;&nbsp;0</span>
                            </div>

                            <div class="col-md-4 ">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24"
                                        fill="none" stroke="#888da8" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" class="feather feather-eye">
                                        <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                                        <circle cx="12" cy="12" r="3"></circle>
                                    </svg>&nbsp;&nbsp;0</span><span>&nbsp;&nbsp;views</span>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-11">
                                <hr>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <span class="feeds_icons">
                                    <i class='bx bx-like'></i>&nbsp;Like
                                </span>
                            </div>
                            <div class="col-md-3">
                                <span class="feeds_icons">
                                    <i class='bx bx-chat'></i>&nbsp;Comment
                                </span>
                            </div>
                            <div class="col-md-3">
                                <span class="feeds_icons">
                                    <i class='bx bx-share'></i>&nbsp;Share
                                </span>
                            </div>

                            <div class="col-md-3">
                                <div class="dropdown show">
                                    <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink"
                                        data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                        <img src="{{asset('assets/img/10.png')}}" alt="Avatar" class="rounded-circle"
                                            width="20" height="20">
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuLink"
                                        style="padding:10px;">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{asset('assets/img/10.png')}}" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">right now</small>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{asset('assets/img/10.png')}}" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">right now</small>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row mt-5">

                            <div class="col-md-6 ">
                                <h6 class="comments_section"><a>Comments</a></h6>
                                <hr class="hr__commemnts">
                            </div>
                            <div class="col-md-6">
                                <h6><a>UpComing</a></h6>
                                <hr>
                            </div>

                        </div>

                        <div class="section_feeds overflow-auto" style="height:300px">
                            <div class="container-fluid">
                                {{-- item 1 --}}
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{asset('assets/img/10.png')}}" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- item 2 --}}
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{asset('assets/img/10.png')}}" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- item 2 --}}
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{asset('assets/img/10.png')}}" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                {{-- item 3 --}}
                                <div class="row mb-1">
                                    <div class="col">
                                        <div class="d-flex justify-content-start align-items-center user-name">
                                            <div class="avatar-wrapper">
                                                <div class="avatar avatar-sm me-3"><img
                                                        src="{{asset('assets/img/10.png')}}" alt="Avatar"
                                                        class="rounded-circle"></div>
                                            </div>
                                            <div class="d-flex flex-column p-2" style="background: #f5f6f7">
                                                <a href="javascript:void(0)" class="text-body text-truncate">
                                                    <span class="fw-semibold">Jenna Devis <span>is live</span></span>
                                                </a>
                                                <small class="text-muted">Lorem ipsum dolor sit amet, consectetur
                                                    adipiscing elit. Proin ornare magna eros</small>
                                                <span style=" color: #5596e6;">Like</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="row mt-4">
                            <div class="col-md-11">
                                <div class="d-flex gap-2">
                                    <img src="{{asset('assets/img/10.png')}}" alt="Avatar" class="rounded-circle"
                                        width="40" height="40">
                                    <input type="text" class="form-control form-rounded" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- </div> --}}
            </div>
        </div>
    </div>