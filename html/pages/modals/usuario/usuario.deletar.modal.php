<div class="modal fade" id="deletarModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <i class="fas fa-trash fa-2x mr-3"></i>
                <h5 class="modal-title" id="exampleModalLabel">Deletar</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body text-center">Deseja realmente deletar?</div>
            <div class="modal-footer">
                <button class="btn btn-secondary btn-sm" type="button" data-dismiss="modal">Cancelar</button>
                <a id="btnDeletar" class="btn btn-danger btn-sm" href="./../logout.php">Deletar</a>
            </div>
        </div>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#deletarModal').on('show.bs.modal', async function(event) {
            var button = $(event.relatedTarget)
            var [id, nome] = button.attr('value').split('#')
            var modal = $(this)
            modal.find('.modal-body').text(`Você deseja excluir a seleção ${nome} (#${id})?`)
            modal.find('#btnDeletar').attr('href', './../gateway.php?operation=deletarUsuario&id=' + id)
        })
    })
</script>

<!-- Diretivas -->
<!--  data-toggle="modal" data-target="#timeModalDeletar"-->