<div class="modal fade" id="novoTimeModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-flag fa-2x mr-3"></i>
                <h5 class="modal-title" id="exampleModalLabel">Novo Time</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body m-2">
                <form action="./../gateway.php" method="post">
                    <input name="operation" value="cadastrarTeam" hidden />
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nome" name="nome">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sigla" class="col-sm-2 col-form-label col-form-label-sm">Sigla</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="sigla" name="sigla">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="escudo" class="col-sm-2 col-form-label col-form-label-sm">Escudo</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="escudo" placeholder="http://..." name="escudo">
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
<!--  data-toggle="modal" data-target="#novoTimeModal"-->