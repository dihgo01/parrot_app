@extends('layouts.master')
@section('title') @lang('translation.basic-elements') @endsection
@section('css') 
<link href="assets/css/custom.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
@endsection
@section('content')

    @component('components.breadcrumb')
        @slot('li_1') Tickets @endslot
        @slot('title') Tickets @endslot
    @endcomponent


    <div class="container-fluid">
        <form action="{{ route('create-ticket') }}" method="POST">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Cadastro de Tickets </h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class=" col-md-6">
                                        <div>
                                            <label for="solicitante_ticket" class="form-label">Solicitante</label>
                                            <input type="text" class="form-control required" name="usuario_id" id="solicitante_ticket" placeholder="Selecione">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-6">
                                        <div>
                                            <label for="data_limite_finalizacao_ticket" class="form-label">Data Prevista de Finalização</label>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="input-group date">
                                                        <input type="text" class="form-control field-get-date required" name="previsao_solucao" id="data_limite_finalizacao_ticket" placeholder="Data Prevista de Finalização">
                                                        <div class="input-group-text bg-primary" data-target="#data_limite_finalizacao_ticket"><i class="ri-calendar-2-line label-icon"></i></div>
                                                    </div>
                                                </div>                                                                
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div>
                                            <label for="categoria_ticket" class="form-label">Categoria</label>
                                            <select type="text" class="form-select required" name="categoria_id" id="categoria_ticket">
                                                <option value="" selected>Selecione</option>
                                                <option value="1">Problema</option>
                                                <option value="1">Planejamento</option>
                                                <option value="1">Projeto de Longo Prazo</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div>
                                            <label for="prioridade_ticket" class="form-label">Prioridade</label>
                                            <select type="text" class="form-select required" name="prioridade_id" id="prioridade_ticket">
                                                <option value="" selected>Selecione</option>
                                                <option value="1">Alta</option>
                                                <option value="1">Média</option>
                                                <option value="1">Baixa</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-4">
                                        <div>
                                            <label for="tipo_ticket" class="form-label">Tipo</label>
                                            <select type="text" class="form-select required" name="tipo" id="tipo_ticket">
                                                <option value="" selected>Selecione</option>
                                                <option value="Interno">Interno</option>
                                                <option value="Externo">Externo</option>
                                            </select>
                                        </div>
                                    </div><!--end col-->
                                    <div class=" col-md-12">
                                        <div>
                                            <label for="titulo_ticket" class="form-label">Título</label>
                                            <input type="text" class="form-control required" id="titulo_ticket" name="titulo" placeholder="Título do Ticket" value="">

                                        </div>
                                    </div><!--end col-->
                                    <div class=" col-md-12 mb-5">
                                        <div>
                                            <label for="descricao_ticket" class="form-label">Descrição</label>
                                            <textarea type="text" class="form-control required" rows="8" id="descricao_ticket" name="descricao" placeholder="Descrição do Ticket" value=""></textarea>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10 mt-3">
                                    <h4 class="card-title mb-0 flex-grow-1">Tarefas</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="flex-shrink-0">
                                        <div class="form-check">
                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-padrao" id="btn_abrir_modal_tarefas" name="btn_abrir_modal_tarefas"><i class="ri-add-fill"></i>Adicionar Tarefas</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div>
                                            <div class="divComTarefas">
                                                
                                            </div>
                                            <div class="divSemTarefas">
                                                <h6 class="text-center mt-5 mb-5">Ainda não há tarefas vinculadas a este ticket.</h6>
                                            </div>
                                        
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10 mt-3">
                                    <h4 class="card-title mb-0 flex-grow-1">Membros</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="flex-shrink-0">
                                        <div class="form-check">
                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-padrao" id="btn_abrir_modal_membros" name="btn_abrir_modal_membros"><i class="ri-add-fill"></i>Adicionar Membros</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-12">
                                        <div>
                                            <div class="divComMembros">
                                                
                                            </div>
                                            <div class="divSemMembros">
                                                <h6 class="text-center mt-5 mb-5">Ainda não há membros vinculados a este ticket.</h6>
                                            </div>
                                        
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-10 mt-3">
                                    <h4 class="card-title mb-0 flex-grow-1">Mídia</h4>
                                </div>
                                <div class="col-md-2">
                                    <div class="flex-shrink-0">
                                        <div class="form-check">
                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-padrao" id="btn_abrir_modal_midias" name="btn_abrir_modal_midias"><i class="ri-add-fill"></i>Adicionar Mídia</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-12">
                                        <div>
                                            <div class="divComMidias">
                                                
                                            </div>
                                            <div class="divSemMidias">
                                                <h6 class="text-center mt-5 mb-5">Ainda não há mídias vinculadas a este ticket.</h6>
                                            </div>
                                        
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-6">
                                        <div>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_cadastrar_ticket" name="btn_cadastrar_ticket">Cadastrar</button>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div>
                        </div>
                    </div>
                </div><!--end col-->
            </div><!--end row-->
        </form>
    </div> <!-- container-fluid -->

    @component('components.modal-tarefas-tickets')
    @endcomponent

    @component('components.modal-membros-tickets')
    @endcomponent

    @component('components.modal-midias-tickets')
    @endcomponent


@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/tickets.js') }}"></script>
@endsection
