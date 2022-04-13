<ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

    <!-- Sidebar - Brand -->
    <a class="sidebar-brand d-flex align-items-center justify-content-center" href="#">
        <div class="sidebar-brand-icon rotate-n-15">
            <i class="fas fa-trophy"></i>
        </div>
        <div class="sidebar-brand-text ml-3">Aposta Aí!</div>
    </a>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>Bem Vindo, <?= explode(' ', $_SESSION['nome'])[0] ?></span>
        </a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider d-none d-md-block">

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
        <a class="nav-link" href="../pages/partidas.php">
            <i class="fas fa-calendar-alt"></i>
            <span>Partidas</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-chart-line"></i>
            <span>Resultados</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-coins"></i>
            <span>Minhas Apostas</span></a>
    </li>

    <!-- Divider -->
    <hr class="sidebar-divider">

    <!-- Heading -->

    <?php
    if ($_SESSION['is_admin']) {
    ?>
        <div class="sidebar-heading">
            ADMIN
        </div>

        <!-- Nav Item  -->
        <li class="nav-item">
            <a class="nav-link" href="./usuarios.admin.php">
                <i class="fas fa-users"></i>
                <span>Usuários</span></a>
        </li>

        <!-- Nav Item  -->
        <li class="nav-item">
            <a class="nav-link" href="./teams.admin.php">
                <i class="fas fa-flag"></i>
                <span>Seleções</span></a>
        </li>

        <!-- Nav Item  -->
        <li class="nav-item">
            <a class="nav-link" href="./partidas.admin.php">
                <i class="fas fa-calendar"></i>
                <span>Partidas</span></a>
        </li>

        <!-- Divider -->
        <hr class="sidebar-divider d-none d-md-block">
    <?php
    }
    ?>

    <!-- Heading -->
    <div class="sidebar-heading">
        Opções
    </div>

    <li class="nav-item">
        <a class="nav-link" href="./profile.php">
            <i class="fas fa-user"></i>
            <span>Perfil</span></a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="#" data-toggle="modal" data-target="#logoutModal">
            <i class="fas fa-door-open"></i>
            <span>Sair</span></a>
    </li>
</ul>

<?php require_once './modals/logout.modal.php' ?>