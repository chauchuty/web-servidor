<div class="modal fade" id="timeModalCadastrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-flag fa-2x mr-3"></i>
                <h5 class="modal-title" id="exampleModalLabel">Novo Usuário</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body m-2">
                <form action="./../gateway.php" method="post">
                    <input name="operation" value="cadastrarUsuario" hidden />
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" name="nome" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control form-control-sm" name="email" autocomplete="off">
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
                        <label for="escudo" class="col-sm-2 col-form-label col-form-label-sm">Créditos</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control form-control-sm" name="creditos" autocomplete="off">
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