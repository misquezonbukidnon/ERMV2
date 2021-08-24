<div class="card">
    <div class="card-header">
        <h5 class="card-header-title">Profile</h5>
    </div>
    <div class="card-body">
        <ul class="list-unstyled list-unstyled-py-3 text-dark mb-3">
            <li class="py-0">
                <small class="card-subtitle">About</small>
            </li>

            <li>
                <i class="tio-user-outlined nav-icon"></i>
                {{ $users->users->first }} {{ $users->users->last }}
            </li>


            <li>
                <i class="tio-briefcase-outlined nav-icon"></i>
                {{ $users->offices->name }}
            </li>

            <li>
                <i class="tio-poi-user nav-icon"></i>
                {{ $users->positions->name }}
            </li>

            <li class="pt-2 pb-0">
                <small class="card-subtitle">Contacts</small>
            </li>

            <li>
                <i class="tio-online nav-icon"></i>
                {{ $users->users->email }}
            </li>
        </ul>
    </div>
</div>