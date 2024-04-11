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
                <li class="{{ request()->is('candidat/dashboard')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.dashboard') }}">
                        <i class="bi bi-clipboard-data"></i>
                        <span class="menu-text">Tableau de bord</span>
                    </a>
                </li>
                <li class="{{ request()->is('candidat/notes')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.note.index') }}">
                        <i class="bi bi-wallet2"></i>
                        <span class="menu-text">Notes</span>
                    </a>
                </li>
                <li class="{{ request()->is('candidat/programmations')? 'active current-page' : '' }}">
                    <a href="{{ route('candidat.programmation.index') }}">
                        <i class="bi bi-calendar-event"></i>
                        <span class="menu-text">Emploi du temps</span>
                    </a>
                </li>
                <li class="{{ request()->is('candidat/profil')? 'active current-page' : '' }}">
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
