<div>
    <nav id="sidebar" class="sidebar-wrapper">

        <!-- App brand starts -->
        <div class="app-brand p-3 my-2">
            <a href="">
                <img src="{{ asset('assets/images/logo.svg') }}" class="logo" alt="Bootstrap Gallery" />
            </a>
        </div>

        <!-- App brand ends -->

        <!-- Sidebar menu starts -->
        <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
                <li class="current-page">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-bar-chart-line"></i>
                        <span class="menu-text">Dashboard</span>
                    </a>
                </li>
                @forelse ($droits as $droit)
                <li class="border-top @if (Route::currentRouteName() == $droit->route) @endif ">
                    <a href="{{ route($droit->route) }}"
                        class="@if (Route::currentRouteName() == $droit->route) text-dark @endif">
                        <i class="bi bi-shop-window"></i>
                        <span class="menu-text">{{ $droit->nom }}</span>
                    </a>
                </li>
                @empty
                    <span></span>
                @endforelse
            </ul>
        </div>
        <!-- Sidebar menu ends -->

    </nav>

</div>
