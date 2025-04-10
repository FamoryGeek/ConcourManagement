<div>
    <nav id="sidebar" class="sidebar-wrapper">

        <!-- App brand starts -->
        <div class="app-brand p-3 my-2 text-center">
            <a href="" class="">
                <img src="{{ asset('accueil/img/logo1.png') }}" class="logo" alt="Bootstrap Gallery" />
            </a>
        </div>

        <!-- App brand ends -->

        <!-- Sidebar menu starts -->
        <div class="sidebarMenuScroll">
            <ul class="sidebar-menu">
                <li class="{{ request()->is('candidat/dashboard')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.dashboard') }}">
                        <i class="bi bi-clipboard-data"></i>
                        <span class="menu-text">Tableau de bord</span>
                    </a>
                </li>
                <li class="{{ request()->is('notes')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.note.index') }}">
                        <i class="bi bi-wallet2"></i>
                        <span class="menu-text">Notes</span>
                    </a>
                </li>
                <li class="{{ request()->is('programmations')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.programmation.index') }}">
                        <i class="bi bi-calendar-event"></i>
                        <span class="menu-text">Emploi du temps</span>
                    </a>
                </li>
                <li class="{{ request()->is('ancienSujets')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.anciens-sujets.index') }}">
                        <i class="bi bi-file-text"></i>
                        <span class="menu-text">Anciens sujets</span>
                    </a>
                </li>
                <li class="{{ request()->is('profil')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.profil.index') }}">
                        <i class="bi bi-person"></i>
                        <span class="menu-text">Profil</span>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Sidebar menu ends -->

    </nav>

</div>
