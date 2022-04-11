<?php
require_once './../auth.php';
require_once './../components/header.php';
require_once './../controller/partida.controller.php';
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
                    <h1 class="h3 mb-4 text-gray-800">Partidas</h1>

                    <a href="#" class="btn btn-primary btn-icon-split btn-sm float-right mb-3" data-toggle="modal" data-target="#timeModalCadastrar">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Nova Partida</span>
                    </a>

                    <table class="table table-dark table-bordered table-striped text-center small">
                        <thead>
                            <th>#</th>
                            <th>Data</th>
                            <th>Horário</th>
                            <th>Time A</th>
                            <th>Time B</th>
                            <th>Resultado</th>
                            <th>Criado/Atualizado</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>22/11/2022</td>
                                <td>16:30</td>
                                <td>
                                    <img src="https://i.imgur.com/pm8V6VY.png" width="20" />
                                    <label for="">Brasil</label>
                                </td>
                                <td>
                                    <img src="https://i.imgur.com/Nrtcwae.png" width="20" />
                                    <label for="">Argentina
                                        
                                    </label>
                                </td>
                                <td>
                                    <img src="./../assets/img/loading.svg" width="20" />
                                </td>
                                <td>
                                    Data...
                                </td>
                                <td width="280">
                                    <a href="#" class="btn btn-success btn-sm mr-2 mb-2" data-toggle="modal" data-target="#selecaoModalEditar">
                                        <span class="icon text-white-100">
                                            <i class="fas fa-check"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-info btn-sm mr-2 mb-2" data-toggle="modal" data-target="#selecaoModalEditar">
                                        <span class="icon text-edit-100">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-sm mr-2 mb-2" data-toggle="modal" data-target="#selecaoModalEditar">
                                        <span class="icon text-white-100">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                    </a>
                                   
                                </td>
                            </tr>
                            <!-- <?php
                                    $teamController = new TeamController();
                                    $teams = $teamController->getAll();

                                    while ($team = $teams->fetchObject('Team')) {
                                    ?> -->
                            <tr>
                                <td><?= $team->getId() ?></td>
                                <td><?= $team->getNome() ?></td>
                                <td><?= $team->getSigla() ?></td>
                                <td>
                                    <img src="<?= $team->getEscudo() ?>" width="25" />
                                </td>
                                <td>
                                    <div>
                                        C: <?= $team->getCreatedAt() ?>
                                    </div>
                                    <div>
                                        A: <?= $team->getUpdatedAt() ?>
                                    </div>
                                </td>
                                <td width="280">
                                    <a href="#" class="btn btn-info btn-icon-split btn-sm mr-2" value="<?= $team->getId() ?>" data-toggle="modal" data-target="#selecaoModalEditar">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-edit"></i>
                                        </span>
                                        <span class="text">Editar</span>
                                    </a>
                                    <a href="#" class="btn btn-danger btn-icon-split btn-sm" value="<?= $team->getId() ?>#<?= $team->getNome() ?>" data-toggle="modal" data-target="#selecaoModalDeletar">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-trash"></i>
                                        </span>
                                        <span class="text">Deletar</span>
                                    </a>
                                </td>
                            </tr>
                            <!-- <?php } ?> -->
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

    <?php require_once './../components/footer.php'; ?>
    <?php require_once './modals/team/team.cadastrar.modal.php'; ?>
    <?php require_once './modals/team/team.editar.modal.php'; ?>
    <?php require_once './modals/team//team.deletar.modal.php'; ?>