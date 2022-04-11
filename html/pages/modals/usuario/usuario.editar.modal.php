<div class="modal fade" id="selecaoModalEditar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-flag fa-2x mr-3"></i>
                <h5 class="modal-title" id="exampleModalLabel">Editar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body m-2">
                <form action="./../gateway.php" method="post">
                    <input name="operation" value="atualizarUsuario" hidden />
                    <input id="id" name="id" hidden />
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nome" name="nome" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-sm-2 col-form-label col-form-label-sm">Email</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="email" name="email" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="senha" class="col-sm-2 col-form-label col-form-label-sm">Senha</label>
                        <div class="col-sm-7">
                            <input type="text" class="form-control form-control-sm" id="senha" name="senha" placeholder="Senha..." autocomplete="off">
                        </div>
                        <div class="col-sm-2">
                            <a href="#" class="btn btn-dark btn-icon-split btn-sm" id="gerarSenha">
                                <span class="icon text-white-50">
                                    <i class="fas fa-redo"></i>
                                </span>
                                <span class="text">Gerar</span>
                            </a>
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="creditos" class="col-sm-2 col-form-label col-form-label-sm">Créditos</label>
                        <div class="col-sm-10">
                            <input type="number" class="form-control form-control-sm" id="creditos" name="creditos" autocomplete="off">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="senha" class="col-sm-2 col-form-label col-form-label-sm">Admin</label>
                        <div class="col-sm-10">
                            <select class="form-select form-control form-control-sm" aria-label="Default select example" id="is_admin" name="is_admin">
                                <option value="1">Sim</option>
                                <option value="0">Não</option>
                            </select>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-info btn-sm">Atualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    function randomPassword(length) {
        var chars = "abcdefghijklmnopqrstuvwxyz!@#$%^&*()-+<>ABCDEFGHIJKLMNOP1234567890";
        var pass = "";
        for (var x = 0; x < length; x++) {
            var i = Math.floor(Math.random() * chars.length);
            pass += chars.charAt(i);
        }
        return pass;
    }

    $(document).ready(function() {

        $('#gerarSenha').on('click', () => {
            $('#senha').val(randomPassword(8));
        });

        $('#selecaoModalEditar').on('show.bs.modal', async function(event) {
            var modal = $(this)
            var button = $(event.relatedTarget)
            var id = button.attr('value')
            await fetch('http://localhost/gateway.php?operation=getUsuario&id=' + id)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    modal.find('#id').val(data.id)
                    modal.find('#nome').val(data.nome)
                    modal.find('#email').val(data.email)
                    modal.find('#creditos').val(data.creditos)
                    modal.find('#is_admin').val(data.is_admin)
                })
        })
    })
</script>


<!-- Diretivas -->
<!--  data-toggle="modal" data-target="#timeModal"-->