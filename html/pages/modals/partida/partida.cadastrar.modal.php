<div class="modal fade" id="partidaModalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-flag fa-2x mr-3"></i>
                <h5 class="modal-title" id="exampleModalLabel">Nova Partida</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body m-2">
                <form action="./../gateway.php" method="post">
                    <input name="operation" value="cadastrarPartida" hidden />
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Data</label>
                        <div class="col-sm-10">
                            <input type="datetime-local" class="form-control form-control-sm" name="data_inicio" min="<?= date("Y-m-d\TH:i"); ?>">
                        </div>
                    </div>
                 
                    <?php
                    $teamController = new TeamController();
                    $partidaController = new PartidaController();
                    $teams_a = $teamController->getAll();
                    $teams_b = $teamController->getAll();
                    ?>

                    <div class="form-group row">
                        <label for="senha" class="col-sm-2 col-form-label col-form-label-sm">Time A</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control form-control-sm" aria-label="Default select example" id="fk_team_a_id" name="fk_team_a_id">
                                <?php while ($team_a = $teams_a->fetchObject('Team')) { ?>
                                    <option value="<?= $team_a->getId(); ?>">
                                        <?=  $team_a->getNome(); ?>
                                    </option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="senha" class="col-sm-2 col-form-label col-form-label-sm">Time B</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control form-control-sm" aria-label="Default select example" id="fk_team_b_id" name="fk_team_b_id">
                                <?php while ($team_b = $teams_b->fetchObject('Team')) { ?>
                                    <option value="<?= $team_b->getId(); ?>"><?= $team_b->getNome() ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-primary btn-sm">Cadastrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Diretivas -->
<!--  data-toggle="modal" data-target="#timeModal"-->