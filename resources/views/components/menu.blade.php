<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">



        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-home"></i>
                <p>Acceuil</p>
            </a>
        </li>


        @can("admin")
        <li class="nav-item">
            <a href="#" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                    Tableau de bord
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link active">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>vue globale</p>
                    </a>
                </li>



                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-swatchbook"></i>
                        <p>Materiel</p>
                    </a>
                </li>
            </ul>
        </li>
        <li class="nav-item {{ setMenuClass('admin.habilitations.','menu-open') }}">
            <a href="#" class="nav-link {{ setMenuClass('admin.habilitations.','active') }}">
                <i class="nav-icon fas fa-user-shield"></i>
                <p>
                    Habilitations
                    <i class="right fas fa-angle-left"></i>
                </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="{{ route('admin.habilitations.user.index') }}" class="nav-link active">
                        <i class="nav-icon fas fa-users-cog"></i>
                        <p>utilisateur</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-fingerprint"></i>
                        <p>Profil et Permission</p>
                    </a>
                </li>
            </ul>
        </li>
        @endcan
        @can("employe")



            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-cogs"></i>
                    <p>
                        Gestion Materiel
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
            <ul class="nav nav-treeview">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon far fa-circle"></i>
                        <p>Type de Materiel</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fas fa-list-ul"></i>
                        <p>Materiel</p>
                    </a>
                </li>
            </ul>
             </li>

            <li class="nav-item">
                <a href="#" class="nav-link">
                    <i class="nav-icon fas fa-users"></i>
                    <p>Gestion des clients</p>
                </a>
            </li>
        @endcan

    </ul>
    </nav>
