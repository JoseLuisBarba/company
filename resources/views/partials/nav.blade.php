<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-body fixed-top">
    <div class="container-fluid">
        <button
            data-mdb-collapse-init
            class="navbar-toggler"
            type="button"
            data-mdb-target="#navbarExample01"
            aria-controls="navbarExample01"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <i class="fas fa-bars"></i>
        </button>

        <div class="collapse navbar-collapse" id="navbarExample01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('inicio') }}" 
                        href="/"
                    >
                        Inicio
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('programas') }}" 
                        href="programas"
                    >
                        Programas
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('talleres') }}" 
                        href="talleres"
                    >
                        Talleres
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('asesoramiento') }}" 
                        href="asesoramiento"
                    >
                        Asesoramiento
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('personas') }}" 
                        href="personas"
                    >
                        Personas
                    </a>
                </li>
                <li class="nav-item">
                    <a 
                        class="nav-link {{ request()->routeIs('contacto') }}" 
                        href="contacto"
                    >
                        Contacto
                    </a>
                </li>
            </ul>
        </div>

    </div>
</nav>
<!-- Navbar -->