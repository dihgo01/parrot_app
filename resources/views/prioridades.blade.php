@extends('layouts.master')
@section('title') Prioridades @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Prioridades @endslot
        @slot('title') Prioridades @endslot
    @endcomponent

   
      
    <div class="container-fluid">
        <form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Listagem de Prioridades <a href="prioridades/cadastro"><i class="ri-add-fill"></i></a></h4>
                        </div><!-- end card header -->

                        <div class="card-body">
                            <div class="live-preview">
                                <div class="table-responsive">
                                    <table class="table align-middle table-nowrap mb-0">
                                        <thead>
                                            <tr>
                                                <th class="text-center" scope="col">Nome</th>
                                                <th class="text-center" scope="col">Tempo de Resolução</th>
                                                <th class="text-center" scope="col">Cor</th>
                                                <th class="text-center"scope="col">Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">Alta</td>
                                                <td class="text-center">1 Hora</td>
                                                <td class="text-center">#000000</td>
                                                <td class="text-center"><a href="javascript:void(0);" class="link-success">View More <i class="ri-arrow-right-line align-middle"></i></a></td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div><!-- end card-body -->
                    </div><!-- end card -->
                </div><!--end col-->
            </div><!--end row-->
        </form>
    </div> <!-- container-fluid -->


    
    <div class="container-fluid">

        <form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Cadastro de Prioridades</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-6 col-md-4">
                                        <div>
                                            <label for="nome_prioridade" class="form-label">Nome da Prioridade</label>
                                            <input type="text" class="form-control required" id="nome_prioridade" placeholder="Nome da Prioridade">
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-xxl-6 col-md-4">
                                        <div>
                                            <label for="tempo_resolucao_prioridade" class="form-label">Tempo de Resolução</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Hr.</span>
                                                <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Hora">
                                                <span class="input-group-text">Min.</span>
                                                <input type="text" class="form-control" aria-label="Dollar amount (with dot and two decimal places)" placeholder="Minutos">
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                    <div class="col-xxl-6 col-md-4">
                                        <div>
                                            <label for="cor_prioridade" class="form-label">Cor</label>
                                            <input type="color" class="form-control form-control-color w-100" id="cor_prioridade" value="#364574">
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
                                            <label for="btn_cadastrar_prioridade" class="form-label"></label>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_cadastrar_prioridade" name="btn_cadastrar_prioridade">Cadastrar</button>
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
   


@endsection
@section('script')
    <script src="{{ URL::asset('/assets/libs/prismjs/prismjs.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/app.min.js') }}"></script>
    <script src="{{ URL::asset('/assets/js/pesquisa-satisfacao.js') }}"></script>
@endsection
