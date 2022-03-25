<!-- MODAL PERGUNTAS -->        
<div id="modalAddPerguntas" class="modal fade" tabindex="-1" aria-labelledby="modalAddPerguntas" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="myModalLabel">Adicionar Perguntas ao Formulário</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-xxl-3 col-md-6 mb-1">
                        <div>
                            <label for="nome_categoria" class="form-label">Pergunta</label>
                            <input type="text" class="form-control" id="pergunta" name="pergunta" placeholder="Escreva sua pergunta">
                        </div>
                    </div><!--end col--> 
                    <div class="col-xxl-3 col-md-6">
                        <div>
                            <label for="nome_categoria" class="form-label">Tipos de Respostas</label>
                            <select class="form-control" id="tipo_de_respostas" name="tipo_de_respostas">
                                <option value="" selected>Selecione</option>
                                <option value="Múltipla Escolha">Múltipla Escolha</option>
                                <option value="Caixas de Seleção">Caixas de Seleção</option>
                                <option value="Lista Suspensa">Lista Suspensa</option>
                            </select>
                        </div>
                    </div><!--end col--> 
                    <div class="divMultiplaEscolha tipos col-xxl-3 col-md-12">
                        <div class="row">
                            <div class="col-md-1">
                                <label>&nbsp;</label>
                                <label class="pesquisa-multipla-escolha"><span class="radio-pesquisa-multipla-escolha"></span></label>
                            </div>
                            <div class="col-md-8">
                                <label>&nbsp;</label>
                                <input type="text" class="form-control input-multipla-escolha" name="opcao_multipla_escolha[]" placeholder="Opção 1">
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label>
                                <button class="form-control btn-success" id="btn_clonar_multipla_escolha" type="button"><i class="ri-add-fill"></i></button>
                            </div>
                        </div>
                    </div><!--end col--> 
                    <div class="divCaixaDeSelecao tipos col-xxl-3 col-md-12">
                        <div class="row">
                            <div class="col-md-1">
                                <label>&nbsp;</label>
                                <label class="pesquisa-caixa-de-selecao"><span class="checkbox-pesquisa-caixa-de-selecao"></span></label>
                            </div>
                            <div class="col-md-8">
                                <label>&nbsp;</label>
                                <input type="text" class="form-control input-caixa-de-selecao" name="opcao_caixa_de_selecao[]" placeholder="Opção 1">
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label>
                                <button class="form-control btn-success" id="btn_clonar_caixa_de_selecao" type="button"><i class="ri-add-fill"></i></button>
                            </div>
                        </div>
                    </div><!--end col--> 
                    <div class="divListaSuspensa tipos col-xxl-3 col-md-12">
                        <div class="row">
                            <div class="col-md-1">
                                <label>&nbsp;</label>
                                <label class="pesquisa-multipla-escolha"><span class="contador-lista-suspensa">1</span></label>
                            </div>
                            <div class="col-md-8">
                                <label>&nbsp;</label>
                                <input type="text" class="form-control input-lista-suspensa" name="opcao_lista_suspensa[]" placeholder="Opção 1">
                            </div>
                            <div class="col-md-3">
                                <label>&nbsp;</label>
                                <button class="form-control btn-success" id="btn_clonar_lista_suspensa" type="button"><i class="ri-add-fill"></i></button>
                            </div>
                        </div>
                    </div><!--end col--> 
                    <div class="col-xxl-3 col-md-12 mt-2">
                        <div>
                            <label for="nome_categoria" class="form-label">Resposta obrigatória?</label>
                            <select class="form-control" id="tipo_de_respostas" name="tipo_de_respostas">
                                <option value="" selected>Selecione</option>
                                <option value="Sim">Sim</option>
                                <option value="Não">Não</option>
                            </select>
                        </div>
                    </div><!--end col--> 
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-light" data-bs-dismiss="modal">Fechar</button>
                <button type="button" class="btn btn-primary" id="btn_adicionar_perguntas" name="btn_adicionar_perguntas">Adicionar</button>
            </div>

        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- END MODAL PERGUNTAS  -->