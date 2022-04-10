<?php
require_once './../auth.php';
require_once './../components/header.php';
require_once './../controller/team.controller.php';

$teamController = new TeamController();
$team = $teamController->getOne($_GET['id']);
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
                    <h1 class="h3 mb-4 text-gray-800">Seleção</h1>
                    
                    <form action="./../gateway.php" method="post">
                        <input name="operation" value="atualizarTeam" hidden />
                        <input name="id" value="<?= $team->getId(); ?>" hidden />
                        <div class="form-group row">
                            <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="nome" name="nome" autocomplete="off" value="<?= $team->getNome() ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sigla" class="col-sm-2 col-form-label col-form-label-sm">Sigla</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control form-control-sm" id="sigla" name="sigla" autocomplete="off" value="<?= $team->getSigla() ?>">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="sigla" class="col-sm-2 col-form-label col-form-label-sm">Escudo</label>

                            <div class="col-sm-10">
                                <div class="input-group input-group-sm mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" id="inputGroup-sizing-sm">
                                            <img src="<?= $team->getEscudo()?>" width=20/>
                                        </span>
                                    </div>
                                    <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="escudo" name="escudo" autocomplete="off" value="<?= $team->getEscudo()?>">
                                </div>
                            </div>
                        </div>

                        <div class="modal-footer">
                            <a href="./teams.admin.php" class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Voltar</a>
                            <button class="btn btn-info btn-sm">Atualizar</button>
                        </div>
                    </form>
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

    <?php require_once './../components/footer.php'; ?>