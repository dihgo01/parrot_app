@extends('layouts.master')
@section('title') @lang('translation.basic-elements') @endsection
@section('content')
    @component('components.breadcrumb')
        @slot('li_1') Categorias @endslot
        @slot('title') Categorias @endslot
    @endcomponent
      
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box d-sm-flex align-items-center justify-content-between">
                    <h4 class="mb-sm-0">Categorias</h4>

                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Categorias</a></li>
                            <li class="breadcrumb-item active">Cadastro</li>
                        </ol>
                    </div>

                </div>
            </div>
        </div>
        <!-- end page title -->
        <form>
            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header align-items-center d-flex">
                            <h4 class="card-title mb-0 flex-grow-1">Cadastro de Categorias</h4>
                        </div><!-- end card header -->
                        <div class="card-body">
                            <div class="live-preview">
                                <div class="row gy-4">
                                    <div class="col-xxl-3 col-md-4">
                                        <div>
                                            <label for="nome_categoria" class="form-label">Nome da Categoria</label>
                                            <input type="text" class="form-control inputCategoriasRequired" id="nome_categoria" placeholder="Nome da Categoria">
                                        </div>
                                    </div><!--end col--> 
                                    <div class="col-xxl-6 col-md-4">
                                        <div>
                                            <label class="form-label">Tempo de Resolução</label>
                                            <div class="input-group mb-3">
                                                <span class="input-group-text">Hr.</span>
                                                <input type="text" class="form-control required" value="" id="horas_categoria" name="horas_categoria" placeholder="Hora">
                                                <span class="input-group-text">Min.</span>
                                                <input type="text" class="form-control datetimepicker-input digits required" value="" id="minutos_categoria" name="minutos_categoria" placeholder="Minutos">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-md-4">
                                        <div>
                                            <label for="cor_categoria" class="form-label">Cor</label>
                                            <input type="color" class="form-control form-control-color w-100" id="cor_categoria" value="#364574">
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
                                            <label for="cor_categoria" class="form-label"></label>
                                            <button type="submit" class="btn btn-primary waves-effect waves-light" id="btn_cadastrar_categoria" name="btn_cadastrar_categoria">Cadastrar</button>
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
