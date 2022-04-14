<?php
require_once './../auth.php';
require_once './../components/header.php';
require_once './../controller/usuario.controller.php';
require_once './../controller/team.controller.php';

$usuarioController = new UsuarioController();
$teamController = new TeamController();
$usuario = $usuarioController->getOne($_SESSION['id']);

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
                    <h1 class="h3 mb-4 text-gray-800">Perfil</h1>
                    <div class="row">



                        <!-- Créditos -->
                        <div class="col-xl-12 col-md-12 mb-4 align-items-center">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                                Dados</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?= $usuario->getNome() ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-user fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                    <hr>
                                    <form action="./../gateway.php" method="post" class="p-3">
                                        <input name="operation" value="atualizarUsuario" hidden />
                                        <div class="form-group row">
                                            <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control form-control-sm" name="nome" value="<?= $usuario->getNome()?>" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                                            <div class="col-sm-10">
                                                <input type="email" class="form-control form-control-sm" name="email" value="<?= $usuario->getEmail()?>" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="senha" class="col-sm-2 col-form-label col-form-label-sm">Senha</label>
                                            <div class="col-sm-5">
                                                <input type="password" class="form-control form-control-sm" name="senha" autocomplete="off">
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="password" class="form-control form-control-sm" name="senha_repetida" autocomplete="off">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="escudo" class="col-sm-2 col-form-label col-form-label-sm">Saldo</label>
                                            <div class="col-sm-10">
                                                <input type="number" class="form-control form-control-sm" value="<?= number_format($usuario->getSaldo(), '2') ?>" autocomplete="off" disabled>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <a href="./dashboard.php" class="btn btn-secondary btn-sm" type="a" >Cancelar</a>
                                            <button class="btn btn-primary btn-sm">Atualizar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
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

    <?php require_once './../components/footer.php'; ?>