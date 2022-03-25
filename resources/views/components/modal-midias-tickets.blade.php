 <!-- MODAL MÍDIAS -->        
 <div id="modalAddMidia" class="modal fade" tabindex="-1" aria-labelledby="modalAddMidia" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Inclusão de Mídia</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-12 mb-3">
                        <label for="tarefa">Título</label>
                        <input type="text" class="form-control inputMidia" placeholder="Título" name="titulo_midia" id="titulo_midia">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="arquivo_midia">Arquivo de Mídia</label>
                        <input class="form-control inputMidia" type="file" id="arquivo_midia" name="arquivo_midia"> <br>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btn_adicionar_midias" name="btn_adicionar_midias">Adicionar</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- END MODAL MÍDIA  -->
