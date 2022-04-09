<?php require_once './../components/header.php'; ?>

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
                    <h1 class="h3 mb-4 text-gray-800">Calendário</h1>


                    <!-- Dados Mock  -->
                    <?php
                    $jogos = [
                        [
                            "time_a" => "Senegal",
                            "time_b" => "Holanda",
                            "data" => "21/06/2020",
                            "horario" => "19:00",
                        ],
                    ];
                    ?>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Time A</th>
                                <th scope="col">Time B</th>
                                <th scope="col">Data/Horário</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($jogos as $key => $jogo) {
                                echo "<tr>";
                                echo "<th scope='row'>" . $key + 1 . "</th>";
                                echo "<td>" . $jogo["time_a"] . "</td>";
                                echo "<td>" . $jogo["time_b"] . "</td>";
                                echo "<td>" . $jogo["data"] . " - " . $jogo["horario"] . "</td>";
                                echo "</tr>";
                            }

                            ?>
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