<div class="app-header d-flex align-items-center">

    <!-- Toggle buttons starts -->
    <div class="d-flex">
        <button class="toggle-sidebar">
            <i class="bi bi-list lh-1"></i>
        </button>
        <button class="pin-sidebar">
            <i class="bi bi-list lh-1"></i>
        </button>
    </div>
    <!-- Toggle buttons ends -->

    <!-- App brand sm starts -->
    <div class="app-brand-sm d-lg-none d-flex">

        <!-- Logo sm starts -->
        <a href="index.html">
            <img src="{{ asset('assets/images/logo.svg') }}" class="logo" alt="Bootstrap Gallery">
        </a>
        <!-- Logo sm end -->

    </div>
    <!-- App brand sm ends -->

    <!-- Page title starts -->
    <h5 class="m-0 ms-2 fw-semibold">Dashboard</h5>
    <!-- Page title ends -->

    <!-- App header actions starts -->
    <div class="header-actions">

        <!-- Search container start -->

        <!-- Search container ends -->

        <!-- Header action bar starts -->
        <div class="bg-white p-2 rounded-4 d-flex align-items-center">

            <!-- Header actions start -->
            
            @livewire('candidat.header.header')
            <!-- Header actions end -->

            <!-- User settings start -->
            <div class="dropdown ms-2">
                <a id="userSettings" class="dropdown-toggle user-settings" href="#!" role="button"
                    data-bs-toggle="dropdown" aria-expanded="false">
                    <span class="me-2 text-truncate d-lg-block d-none">
                        @if (session('nom') && session('prenom'))
                            {{ session('prenom') }} {{ session('nom') }}
                        @else
                            user
                        @endif
                    </span>
                    <div class="icon-box md rounded-4 fw-bold bg-primary-subtle text-primary">
                        @if (session('nom') && session('prenom'))
                            {{ strtoupper(substr(session('prenom'), 0, 1))."".strtoupper(substr(session('nom'), 0, 1)) }}
                            {{-- {{ Auth::guard('candidat')->user()->nom }} --}}
                        @else

                        @endif
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end shadow-lg">
                    <a class="dropdown-item d-flex align-items-center" href="profile.html"><i
                            class="bi bi-person fs-4 me-2"></i>My Profile</a>
                    <a class="dropdown-item d-flex align-items-center" href="settings.html"><i
                            class="bi bi-gear fs-4 me-2"></i>Account Settings</a>
                    <div class="mx-3 my-2 d-grid">
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"
                            class="btn btn-warning">Logout</a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </div>
            </div>
            <!-- User settings end -->

        </div>
        <!-- Header action bar ends -->

    </div>
    <!-- App header actions ends -->


</div>
