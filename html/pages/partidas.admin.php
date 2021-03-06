<?php
require_once './auth.php';
require_once './components/header.php';
require_once './controller/partida.controller.php';
require_once './controller/team.controller.php';
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

                    <a href="#" class="btn btn-primary btn-icon-split btn-sm float-right mb-3" data-toggle="modal" data-target="#partidaModalCadastrar">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Nova Partida</span>
                    </a>

                    <table class="table table-dark table-bordered table-striped text-center small">
                        <thead>
                            <th>#</th>
                            <th>Data</th>
                            <th>Equipe A</th>
                            <th>Equipe B</th>
                            <th>Perc. A</th>
                            <th>Perc. Empate</th>
                            <th>Perc. B</th>
                            <th>Vencedor</th>
                            <th>Status</th>
                            <th>Criado/Atualizado</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            <?php
                            $partidaController = new PartidaController();
                            $partidas = $partidaController->getAll();


                            while ($partida = $partidas->fetchObject('Partida')) {
                                $teamController = new TeamController();
                                $team_a = $teamController->getOne($partida->getFkTeamAId());
                                $team_b = $teamController->getOne($partida->getFkTeamBId());
                                $vencedor = $teamController->getOne($partida->getVencedor());
                            ?>
                                <tr>
                                    <td><?= $partida->getId() ?></td>
                                    <td><?= $partida->getDataInicio() ?></td>
                                    <td>
                                        <img src="<?= $team_a->getEscudo() ?>" width="20">
                                        <?= $team_a->getNome(); ?>
                                    </td>
                                    <td>
                                        <img src="<?= $team_b->getEscudo() ?>" width="20">
                                        <?= $team_b->getNome(); ?>
                                    </td>
                                    <td>
                                        <?= $partida->getPercTeamA(); ?>
                                    </td>
                                    <td>
                                        <?= $partida->getPercEmpate(); ?>
                                    </td>
                                    <td>
                                        <?= $partida->getPercTeamB(); ?>
                                    </td>
                                    <td>
                                        <?php if ($vencedor) { ?>
                                            <img src="<?= $vencedor->getEscudo() ?>" width="20">
                                            <?= $vencedor->getNome(); ?>
                                        <?php } else { ?>
                                            <img src="./assets/img/loading.svg" width="20">
                                        <?php } ?>

                                    </td>
                                    <td>
                                        <?= $partida->getStatus() ? 'Encerrado' : 'Andamento' ?>
                                    </td>

                                    <td>
                                        <div>
                                            <?= $partida->getCreatedAt() ?>
                                        </div>
                                        <div>
                                            <?= $partida->getUpdatedAt() ?>
                                        </div>
                                    </td>
                                    <td>
                                        <a title="Encerrar" href="#" class="btn btn-success btn-sm mr-2" value="" data-toggle="modal" data-target="#selecaoModalDeletar">
                                            <i class="fas fa-check"></i>
                                        </a>
                                        <a title="Editar" href="#" class="btn btn-info btn-sm mr-2" value="" data-toggle="modal" data-target="#selecaoModalDeletar">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <a title="Deletar" href="#" class="btn btn-danger btn-sm mr-2" value="<?= $partida->getId() ?>#<?= $team_a->getNome() ?>#<?= $team_b->getNome() ?>" data-toggle="modal" data-target="#selecaoModalDeletar">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                    </td>
                                </tr>

                            <?php } ?>

                            <!-- <tr>
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
                                    <img src="./assets/img/loading.svg" width="20" />
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
                            </tr> -->

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
    <?php require_once './modals/partida/partida.cadastrar.modal.php'; ?>
    <?php require_once './modals/partida/partida.editar.modal.php'; ?>
    <?php require_once './modals/partida/partida.deletar.modal.php'; ?>