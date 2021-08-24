<div>
  <header class="navbar navbar-expand-lg navbar-spacer-y navbar-dark">
    <div class="container">
      <div class="navbar-nav-wrap">
        <div class="navbar-brand-wrapper">
          <!-- Logo -->
          <a class="navbar-brand" href="../index.html" aria-label="Front">
            <img width="50rem" src="./assets/img/160x160/LGUSEAL.png" alt="Logo">
          </a>
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
                          <span class="text-truncate pr-2" title="Profile & account"> <i class="tio-password"></i> &nbsp; Change Password</span>
                          </a>
                          <div class="dropdown-divider"></div>
                          <form action="{{ route('logout') }}" method="POST">
                          @csrf
                          <button class="dropdown-item" type="submit">
                              <span class="text-truncate pr-2 text-danger" title="Sign out"> <i class="tio-sign-out"></i> &nbsp; Sign out</span>
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
                  <a class="dropdown-item" href="/create/record">New Records</a>
                  <a class="dropdown-item" href="#">Update Records</a>
                  <a class="dropdown-item" href="{{ route('office') }}">Offices</a>
                  <a class="dropdown-item" href="#">Import/Export Records</a>
                </div>
              </li>
              
            </ul>
            <!-- End Navbar -->
          </nav>
        @endauth
      </div>
    </div>
  </header>


  <!-- ********************************************************************Modal Change Password (Can be converted to Component)************************************************* -->

  <div class="modal fade" id="changepassmodal" tabindex="-2" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Change Password</h5>
          <button type="button" class="btn btn-xs btn-icon btn-ghost-secondary" data-dismiss="modal" aria-label="Close">
            <i class="tio-clear tio-lg"></i>
          </button>
        </div>
        <div class="modal-body">
          <form class="js-validate">
            <div class="text-center">
              <div class="mb-5">
                <h1 class="display-4">Change password?</h1>
                <p>That's okay, it happens! Enter new Password.</p>
              </div>
            </div>

            <!-- Form Group -->
            <div class="form-group ">
              <label for="showPasswordLabel" class="input-label">Password</label>

              <div class="input-group input-group-merge">
                <input type="password" class="js-toggle-password form-control" id="showPasswordLabel" placeholder="Enter password" value="" data-hs-toggle-password-options='{
             "target": ".js-password-toggle-show-target",
             "show": true,
             "defaultClass": "tio-hidden",
             "showClass": "tio-visible",
             "classChangeTarget": "#changePasswordShowIcon"
           }'>
                <a class="input-group-append js-password-toggle-show-target" href="javascript:;">
                  <span class="input-group-text">
                    <i id="changePasswordShowIcon"></i>
                  </span>
                </a>
              </div>
            </div>
            <!-- End Form Group -->

            <!-- Form Group -->
            <div class="form-group ">
              <label for="showPasswordLabel2" class="input-label">Confirm Password</label>

              <div class="input-group input-group-merge">
                <input type="password" class="js-toggle-password form-control" id="showPasswordLabel2" placeholder="Confirm password" value="" data-hs-toggle-password-options='{
             "target": ".js-password-toggle-show-target",
             "show": true,
             "defaultClass": "tio-hidden",
             "showClass": "tio-visible",
             "classChangeTarget": "#changePasswordShowIcon2"
           }'>
                <a class="input-group-append js-password-toggle-show-target" href="javascript:;">
                  <span class="input-group-text">
                    <i id="changePasswordShowIcon2"></i>
                  </span>
                </a>
              </div>
            </div>
            <!-- End Form Group -->
            <button type="submit" class="btn btn-lg btn-block btn-primary">Reset Password</button>

            <div class="text-center mt-2">
              <a class="btn btn-link" data-dismiss="modal">
                <i class="tio-chevron-left"></i> Back
              </a>
            </div>
          </form>
        </div>

      </div>
    </div>
  </div>
  <!-- End Modal -->
</div>