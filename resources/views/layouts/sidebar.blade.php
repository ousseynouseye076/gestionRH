<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link collapsed" href="">
                    <i class="bi bi-grid"></i>
                    <span>{{ __('Dashboard') }}</span>
                </a>
            </li><!-- End Dashboard Nav -->

        <li class="nav-heading">{{ __('ADMINISTRATION') }}</li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.roles.index') }}">
                    <i class="bi bi-file-ruled"></i>
                    <span>{{ __('Roles') }}</span>
                </a>
            </li><!-- Fin Role Nav -->

            <li class="nav-item">
                <a class="nav-link collapsed" href="{{ route('admin.permissions.index') }}">
                    <i class="bi bi-file-ruled"></i>
                    <span>{{ __('Permissions') }}</span>
                </a>
            </li><!-- Fin Catégories Nav -->

        <li class="nav-heading">{{ __('GESTION PERSONNEL') }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-bookmark"></i>
                <span>{{ __('Employées') }}</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="#">
                        <i class="bi bi-car-front"></i><span>{{ __('Liste des employées') }}</span>
                    </a>
                </li>

                <li>
                    <a href="#">
                        <i class="bi bi-plus-circle-dotted"></i><span>{{ __('Ajouter un employé') }}</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Employées Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-person-badge"></i>
                <span>{{ __('Contrats') }}</span>
                <i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                @if(Route::has('admin.contrats.index'))
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>{{ __('Liste des Contrats') }}</span>
                        </a>
                    </li>
                @endif

                @if(Route::has('admin.contrats.create'))
                    <li>
                        <a href="#">
                            <i class="bi bi-circle"></i><span>{{ __('Ajouter un Contrat') }}</span>
                        </a>
                    </li>
                @endif
            </ul>
        </li><!-- End Chauffeurs Nav -->

        <li class="nav-heading">{{ __('GESTION DES CONGéS') }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="#">
                <i class="bi bi-people"></i>
                <span>{{ __('Congés') }}</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-heading">{{ __('GESTION DES UTILISATEURS') }}</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('admin.users.index') }}">
                <i class="bi bi-people"></i>
                <span>{{ __('Utilisateurs') }}</span>
            </a>
        </li><!-- End Profile Page Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed"
               href="#">
                <i class="bi bi-person"></i>
                <span>Profile</span>
            </a>
        </li><!-- End Profile Page Nav -->

        @guest
            @if(Route::has('login'))
                <li class="nav-item">
                    <a class="nav-link collapsed" href="{{ route('login') }}">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>Login</span>
                    </a>
                </li><!-- End Login Page Nav -->
            @endif
        @endguest

        @auth
            <li class="nav-item" >
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit" class="nav-link collapsed"
                            onclick="event.preventDefault();
                                this.closest('form').submit();">
                        <i class="bi bi-box-arrow-in-right"></i>
                        <span>{{ __('Logout') }}</span>
                    </button>
                </form>
            </li><!-- End Login Page Nav -->
        @endauth

    </ul>

</aside>
