@extends('layouts.master')
@section('title') Pesquisa de Satisfação @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Pesquisa de Satisfação @endslot
        @slot('title') Pesquisa de Satisfação @endslot
    @endcomponent

    <div class="container-fluid">


        <form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Criar Pesquisa de Satisfação</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-md-12">
                                        <div>
                                            <label for="titulo_formulario" class="form-label">Título do Formulário</label>
                                            <input type="text" class="form-control" id="titulo_formulario" placeholder="Título do Formulário">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-md-12">
                                        <div>
                                            <label for="descricao_formulario" class="form-label">Descrição do Formulário</label>
                                            <textarea class="form-control" id="descricao_formulario" name="descricao_formulario" placeholder="Descrição"></textarea>
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
                                    <h4 class="card-title mb-0 flex-grow-1">Perguntas</h4>
                                </div>
                                <div class="col-md-2 flex-end">
                                    <div class="flex-shrink-0">
                                        <div class="form-check">
                                            <button type="button" class="btn btn-primary waves-effect waves-light btn-padrao" id="btn_abrir_modal_perguntas" name="btn_abrir_modal_perguntas"><i class="ri-add-fill"></i>Adicionar Perguntas</button>
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
                                            <div class="divComPerguntas">
                                            </div>
                                            <div class="divSemPerguntas">
                                                <h6 class="text-center mt-5 mb-5">Ainda não há perguntas vinculadas a esta pesquisa.</h6>
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
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_cadastrar_pesquisa" name="btn_cadastrar_pesquisa">Cadastrar</button>
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

    @component('components.modal-perguntas')
    @endcomponent

@endsection
@section('script')
    
    <script src="{{ URL::asset('/assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pesquisa-satisfacao.js') }}"></script>
  
@endsection
