<div>
    <nav id="sidebar" class="sidebar-wrapper">

        <!-- App brand starts -->
        <div class="app-brand p-3 my-2 text-center">
            <a href="" class="">
                <img src="{{ asset('accueil/img/logo1.png') }}" class="" style="width: 50%"  alt="Fonction Publique" />
            </a>
        </div>

        <!-- App brand ends -->

        <!-- Sidebar menu starts -->
        <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
                <li class="{{ request()->is('admin/dashboard')? 'active current-page' : '' }}">
                    <a href="{{ route('admin.dashboard') }}">
                        <i class="bi bi-bar-chart-line"></i>
                        <span class="menu-text">Tableau de bord</span>
                    </a>
                </li>
                @forelse ($droits as $droit)
                <li class=" @if (Route::currentRouteName() == $droit->route) active current-page  @endif ">
                    <a href="{{ route($droit->route) }}"
                        class="@if (Route::currentRouteName() == $droit->route) text-white @endif">

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
