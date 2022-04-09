<ul class="navbar-nav bg-gradient-danger sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-trophy"></i>
        </div>
        <div class="sidebar-brand-text mx-3">WORLD CUP <sup>2022</sup></div>
    </a>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Bem Vindo, <?= explode(' ', $_SESSION['nome'])[0] ?></span>
        </a>
    </li>

    <div class="sidebar-heading">
        Menu Principal
    </div>


    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
        <a class="nav-link" href="../pages/dashboard.php">
            <i class="fas fa-home"></i>
            <span>Dashboard</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="../pages/calendario.php">
            <i class="fas fa-calendar-alt"></i>
            <span>Calendário</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-coins"></i>
            <span>Apostas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-chart-line"></i>
            <span>Resultados</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        USUÁRIO
    </div>

    <li class="nav-item">
        <a class="nav-link" href="index.html">
            <i class="fas fa-chart-line"></i>
            <span>Minhas Apostas</span></a>
    </li>


    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->
    <div class="sidebar-heading">
        ADMIN
    </div>

    <!-- Nav Item - Charts -->
    <li class="nav-item">
        <a class="nav-link" href="charts.html">
            <i class="fas fa-fw fa-chart-area"></i>
            <span>Others...</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

    <!-- Heading -->
    <div class="sidebar-heading">
        Opções
    </div>

    <li class="nav-item">
        <a class="nav-link" href="./../logout.php">
        <i class="fas fa-user"></i>
            <span>Perfil</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="./../logout.php">
            <i class="fas fa-door-open"></i>
            <span>Sair</span></a>
    </li>

</ul>