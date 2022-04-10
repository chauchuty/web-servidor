<?php
require_once './../auth.php';
require_once './../components/header.php';
require_once './../controller/usuario.controller.php';
require_once './../controller/team.controller.php';
$usuarioController = new UsuarioController();
$teamController = new TeamController();
?>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once './../components/sidebar.php'; ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- NavBar -->
                <?php require_once './../components/navbar.php'; ?>
                <!-- NavBar -->
                <!-- Begin Page Content CODE! -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Dashboard</h1>
                    <div class="card" style="width: 12rem;">
                        <i class="fas fa-users fa-2x pt-3 pl-3"></i>
                        <div class="card-body">
                            <!-- <h5 class="card-title">Usuários</h5> -->
                            <h5 class="card-text">Usuários: <?= $usuarioController->getCount() ?></h5>
                        </div>
                    </div>
                    <div class="card" style="width: 12rem;">
                        <i class="fas fa-flag fa-2x pt-3 pl-3"></i>
                        <div class="card-body">
                            <!-- <h5 class="card-title">Usuários</h5> -->
                            <h5 class="card-text">Seleções: <?= $teamController->getCount() ?></h5>
                        </div>
                    </div>
                </div>
                <!-- End Page Content CODE! -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Web Servidor 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <!-- <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a> -->

    <!-- Logout Modal-->
    <!-- <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div> -->

    <?php require_once './../components/footer.php'; ?>