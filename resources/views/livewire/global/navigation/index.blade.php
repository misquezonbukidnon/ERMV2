<div>
    <header class="navbar navbar-expand-lg navbar-spacer-y navbar-dark">
        <div class="container">
            <div class="navbar-nav-wrap">
                <div class="navbar-brand-wrapper  d-flex align-items-center">
                    <!-- Logo -->
                    <a class="navbar-brand" href="/" aria-label="Front">
                        <img width="40rem" src="{{ asset('assets/img/160x160/LGUSEAL.png') }}" alt="Logo">
                    </a>
                    <h1 class="text-light mt-2">Employee Records Management</h1>
                    <!-- End Logo -->
                </div>

                <!-- Toggle -->
                @auth
                <!-- Secondary Content -->
                <div class="navbar-nav-wrap-content-right">
                    <!-- Navbar -->
                    <ul class="navbar-nav align-items-center flex-row">
                        <li class="nav-item">
                            <!-- Account -->
                            <div class="hs-unfold">
                                <a class="js-hs-unfold-invoker navbar-dropdown-account-wrapper" href="javascript:;" data-hs-unfold-options='{
                        "target": "#accountNavbarDropdown",
                        "type": "css-animation"
                    }'>
                                    <div class="avatar avatar-sm avatar-circle">
                                        <img class="avatar-img" src="../images/users/{{ $users->userimages->name }}" alt="Image Description">
                                        <span class="avatar-status avatar-sm-status avatar-status-success"></span>
                                    </div>
                                </a>

                                <div id="accountNavbarDropdown" class="hs-unfold-content dropdown-unfold dropdown-menu dropdown-menu-right navbar-dropdown-menu navbar-dropdown-account" style="width: 16rem;">
                                    <div class="dropdown-item">
                                        <div class="media align-items-center">
                                            <div class="avatar avatar-sm avatar-circle mr-2">
                                                <img class="avatar-img" src="../images/users/{{ $users->userimages->name }}" alt="Image Description">
                                            </div>
                                            <div class="media-body">
                                                <span class="card-title h5">{{ auth()->user()->first }} {{ auth()->user()->last }}</span>
                                                <span class="card-text">{{ auth()->user()->email }}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="dropdown-divider"></div>
                                    <div class="hs-unfold w-100">
                                        <a class="dropdown-item" data-toggle="modal" data-target="#changepassmodal" href="#">
                                            <span class="text-truncate pr-2" title="Profile & account"> <i class="tio-password"></i> &nbsp;
                                                Change Password</span>
                                        </a>
                                        <div class="dropdown-divider"></div>
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="dropdown-item" type="submit">
                                                <span class="text-truncate pr-2 text-danger" title="Sign out"> <i class="tio-sign-out"></i>
                                                    &nbsp; Sign out</span>
                                                </a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <!-- End Account -->
                        </li>
                    </ul>
                    <!-- End Navbar -->
                </div>
                <!-- End Secondary Content -->
                <button type="button" class="navbar-toggler btn btn-ghost-secondary rounded-circle" aria-label="Toggle navigation" aria-expanded="false" aria-controls="navbarNavMenuHeightEg" data-toggle="collapse" data-target="#navbarNavMenuHeightEg">
                    <i class="tio-menu-hamburger"></i>
                </button>
                <!-- End Toggle -->
                <nav class="collapse navbar-collapse" id="navbarNavMenuHeightEg">
                    <!-- Main modules -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Dropdown -->
                        <li class="dropdown">
                            <a class="nav-link nav-link-toggle" href="javascript:;" id="dropdownSubMenuHeightEg" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="tio-home"></i>&nbsp;Home</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownSubMenuHeightEg" style="min-width: 230px;">
                                <a class="dropdown-item" href="/">Dashboard</a>
                            </div>
                        </li>
                        <li class="dropdown">
                            <a class="nav-link nav-link-toggle" href="javascript:;" id="dropdownSubMenuHeightEg" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="tio-document-text"></i>&nbsp;Records</a>
                            <div class="dropdown-menu" aria-labelledby="dropdownSubMenuHeightEg" style="min-width: 230px;">
                                <a class="dropdown-item" href="{{ route('employee_create') }}">New Records</a>
                                <a class="dropdown-item" href="{{ route('office') }}">Offices</a>
                                <a class="dropdown-item" href="{{ route('settings_records') }}">Import/Export Records</a>
                            </div>
                        </li>

                    </ul>
                    <!-- End Navbar -->
                </nav>
                @endauth
            </div>
        </div>
    </header>
</div>
<livewire:global.modal.modal-auth.auth-changepassword />