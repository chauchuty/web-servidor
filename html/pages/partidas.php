<?php
require_once './auth.php';
require_once './components/header.php';
?>

<body id="page-top">
    <div id="wrapper">
        <!-- Sidebar -->
        <?php require_once './components/sidebar.php'; ?>
        <!-- End of Sidebar -->
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">
            <!-- Main Content -->
            <div id="content">
                <!-- NavBar -->
                <?php require_once './components/navbar.php'; ?>
                <!-- NavBar -->
                <!-- Begin Page Content CODE! -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800">Partidas</h1>

                    <table class="table table-bordered table-striped table-md table-dark text-center small border-bottom-success border-left-success">
                        <tbody>
                            <tr>
                                <td colspan="2" class="text-left">Sábado 09 de Abril</td>
                                <td>Seleção 1</td>
                                <td>Empate</td>
                                <td>Seleção 2</td>
                            </tr>
                            <tr>
                                <td class="align-middle">16:30</td>
                                <td class="align-middle text-left">
                                    <div>
                                        <img src="./assets/img/brazil.logo.png" class="img-fluid" width="25">
                                        Brasil <sup>s1</sup>
                                    </div>
                                    <div class="mt-2">
                                        <img src="./assets/img/argentina.logo.png" class="img-fluid" width="25">
                                        Argentina <sup>s2</sup>
                                    </div>

                                </td>
                                <td class="align-middle">
                                    <a href="#" class="btn btn-success btn-icon-split btn-sm" id="s1">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-coins"></i>
                                        </span>
                                        <span class="text">1.75</span>
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <a href="#" class="btn btn-info btn-icon-split btn-sm" id="s1">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-coins"></i>
                                        </span>
                                        <span class="text">1.15</span>
                                    </a>
                                </td>
                                <td class="align-middle">
                                    <a href="#" class="btn btn-warning btn-icon-split btn-sm" id="s1">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-coins"></i>
                                        </span>
                                        <span class="text">2.55</span>
                                    </a>
                                </td>
                                
                            </tr>
                        </tbody>
                    </table>
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
    
    <?php require_once './components/footer.php'; ?>