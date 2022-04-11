<?php
require_once './../auth.php';
require_once './../components/header.php';
require_once './../controller/usuario.controller.php';
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
                    <h1 class="h3 mb-4 text-gray-800">Usuários</h1>

                    <a href="#" class="btn btn-primary btn-icon-split btn-sm float-right mb-3" data-toggle="modal" data-target="#timeModalCadastrar">
                        <span class="icon text-white-50">
                            <i class="fas fa-plus"></i>
                        </span>
                        <span class="text">Novo Usuário</span>
                    </a>

                    <table class="table table-dark table-bordered table-striped text-center small">
                        <thead>
                            <th>#</th>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Créditos</th>
                            <th>Administrador</th>
                            <th>Criado/Atualizado</th>
                            <th>Ações</th>
                        </thead>
                        <tbody>
                            <?php
                            $usuarioController = new UsuarioController();
                            $usuarios = $usuarioController->getAll();

                            while ($usuario = $usuarios->fetchObject('Usuario')) {
                            ?>
                                <tr>
                                    <td><?= $usuario->getId() ?></td>
                                    <td><?= $usuario->getNome() ?></td>
                                    <td><?= $usuario->getEmail() ?></td>
                                    <td><?= $usuario->getCreditos() ?></td>
                                    <td><?= $usuario->getIsAdmin() ? 'Sim' : 'Não' ?></td>
                                    <td>
                                        <div>
                                            C: <?= $usuario->getCreatedAt() ?>
                                        </div>
                                        <div>
                                            A: <?= $usuario->getUpdatedAt() ?>
                                        </div>
                                    </td>

                                    <td width="280">
                                        <a href="#" class="btn btn-info btn-icon-split btn-sm mr-2" value="<?= $usuario->getId() ?>" data-toggle="modal" data-target="#selecaoModalEditar">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-edit"></i>
                                            </span>
                                            <span class="text">Editar</span>
                                        </a>
                                        <a href="#" class="btn btn-danger btn-icon-split btn-sm" value="<?= $usuario->getId() ?>#<?= $usuario->getNome() ?>" data-toggle="modal" data-target="#selecaoModalDeletar">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-trash"></i>
                                            </span>
                                            <span class="text">Deletar</span>
                                        </a>
                                    </td>
                                </tr>
                            <?php } ?>
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
    <?php require_once './modals/usuario/usuario.cadastrar.modal.php'; ?>
    <?php require_once './modals/usuario/usuario.editar.modal.php'; ?>
    <?php require_once './modals/usuario//usuario.deletar.modal.php'; ?>