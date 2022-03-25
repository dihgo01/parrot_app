<!-- MODAL TAREFAS -->        
<div id="modalAddTarefasTicket" class="modal fade" tabindex="-1" aria-labelledby="modalAddTarefasTicket" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Inclusão de Tarefas</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-10">
                        <label for="tarefa">Tarefa</label>
                        <input class="form-control inputTarefas" type="text" name="tarefa[]" placeholder="Descrição da Tarefa">
                    </div>
                    <div class="col-md-2 mb-3">
                        <label>&nbsp;</label>
                        <button class="form-control btn-success" id="btn_clonar_tarefa" type="button"><i class="ri-add-fill"></i></button>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btn_adicionar_tarefas" name="btn_adicionar_tarefas">Adicionar</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- END MODAL TAREFAS  -->