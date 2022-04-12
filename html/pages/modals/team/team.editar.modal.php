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
                    <input name="operation" value="atualizarTeam" hidden />
                    <input id="id" name="id" hidden />
                    <div class="form-group row">
                        <label for="nome" class="col-sm-2 col-form-label col-form-label-sm">Nome</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="nome" name="nome" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sigla" class="col-sm-2 col-form-label col-form-label-sm">Sigla</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control form-control-sm" id="sigla" name="sigla" autocomplete="off">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sigla" class="col-sm-2 col-form-label col-form-label-sm">Escudo</label>

                        <div class="col-sm-10">
                            <div class="input-group input-group-sm mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-sm">
                                        <img id="imgEscudo" src="#" width=20 />
                                    </span>
                                </div>
                                <input type="text" class="form-control" aria-label="Small" aria-describedby="inputGroup-sizing-sm" id="escudo" name="escudo" autocomplete="off">
                            </div>
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
    $(document).ready(function() {
        $('#selecaoModalEditar').on('show.bs.modal', async function(event) {
            var modal = $(this)
            var button = $(event.relatedTarget)
            var id = button.attr('value')
            await fetch('http://localhost/gateway.php?operation=getTeam&id=' + id)
                .then(response => response.json())
                .then(data => {
                    console.log(data)
                    modal.find('#id').val(data.id)
                    modal.find('#nome').val(data.nome)
                    modal.find('#sigla').val(data.sigla)
                    modal.find('#escudo').val(data.escudo)
                    modal.find('#imgEscudo').attr('src', data.escudo)
                })
        })
    })
</script>


<!-- Diretivas -->
<!--  data-toggle="modal" data-target="#timeModal"-->