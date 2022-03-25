<!-- MODAL MEMBROS -->        
<div id="modalAddMembros" class="modal fade" tabindex="-1" aria-labelledby="modalAddMembros" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Inclusão de Membros</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="tarefa">Tipo</label>
                        <select type="text" class="form-select" id="tipo_membros">
                            <option value="" selected>Selecione</option>
                            <option value="Usuário">Usuário</option>
                            <option value="Departamento">Departamento</option>
                            <option value="Time">Time</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3 divSelectUsuarios opcoes-membros">
                        <label for="tarefa">Selecione o usuário</label>
                        <select type="text" class="form-select" id="membros_usuarios">
                            <option value="" selected>Selecione</option>
                            <option value="Usuário">Usuário 1</option>
                            <option value="Usuário 2">Usuário 2</option>
                            <option value="Usuário 3">Usuário 3</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3 divSelectDepartamentos opcoes-membros">
                        <label for="tarefa">Selecione o departamento</label>
                        <select type="text" class="form-select" id="membros_departamentos">
                            <option value="" selected>Selecione</option>
                            <option value="Departamento 1">Departamento 1</option>
                            <option value="Departamento 2">Departamento 2</option>
                            <option value="Departamento 3">Departamento 3</option>
                        </select>
                    </div>
                    <div class="col-md-12 mb-3 divSelectTimes opcoes-membros">
                        <label for="tarefa">Selecione o time</label>
                        <select type="text" class="form-select" id="membros_time">
                            <option value="" selected>Selecione</option>
                            <option value="Time 1">Time 1</option>
                            <option value="Time 2">Time 2</option>
                            <option value="Time 3">Time 3</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btn_adicionar_membros" name="btn_adicionar_membros">Adicionar</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- END MODAL MEMBROS  -->