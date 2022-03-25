
/***************** INÍCIO MODAL DE PERGUNTAS  *****************/

$("body").on("click", "#btn_abrir_modal_perguntas", function () {
    $("#modalAddPerguntas #pergunta").val("");
    $("#modalAddPerguntas #tipo_de_respostas").val("");
    $("#modalAddPerguntas .clones_multipla_escolha").remove();
    $("#modalAddPerguntas .clones_lista_suspensa").remove();
    $("#modalAddPerguntas .clones_caixa_de_selecao").remove();
    $("#modalAddPerguntas .tipos").hide();
    $("#modalAddPerguntas").modal("toggle");
})

$("body").on("change", "#tipo_de_respostas", function () {
    var tipo = $(this).val().trim();
    if(tipo === 'Múltipla Escolha') {
        $(".tipos").slideUp();
        $(".divMultiplaEscolha").slideDown();
    } else if (tipo === 'Caixas de Seleção') {
        $(".tipos").slideUp();
        $(".divCaixaDeSelecao").slideDown();
    } else if (tipo === 'Lista Suspensa') {
        $(".tipos").slideUp();
        $(".divListaSuspensa").slideDown();
    } else {
        $(".tipos").slideUp();
    }
})

/**
 * FUNÇÃO PARA CLONAR INPUT DE TAREFA DE MÚLTIPLA ESCOLHA NO MODAL
 * 
 */
$("body").on("click", "#btn_clonar_multipla_escolha", function () {
    var contador_placeholder = $(".input-multipla-escolha").length + 1
    $("#modalAddPerguntas .modal-body .row .divMultiplaEscolha").append(
        '<div class="row clones_multipla_escolha">'+
            '<div class="col-md-1">' +
                '<label>&nbsp;</label>' +
                '<label class="pesquisa-multipla-escolha"><span class="radio-pesquisa-multipla-escolha"></span></label>' +
            '</div>' +
            '<div class="col-md-8">' +
                '<label>&nbsp;</label>' +
                '<input type="text" class="form-control input-multipla-escolha" name="opcao_multipla_escolha[]" placeholder="Opção ' + contador_placeholder + '">' +
            '</div>' +
            '<div class="col-md-3">' +
                '<label>&nbsp;</label>' +
                '<button class="form-control btn-danger btnRemoveTarefaMultiplaEscolha" type="button"><i class="ri-subtract-fill"></i></button>' +
            '</div>' +
        '</div>'
    );
});

/**
* FUNÇÃO PARA REMOVER UM INPUT CLONADO DE TAREFA DE MÚLTIPLA ESCOLHA NO MODAL
*/
$("body").on("click", ".btnRemoveTarefaMultiplaEscolha", function () {
    $(this).parent().parent().remove();
});

/**
 * FUNÇÃO PARA CLONAR INPUT DE TAREFA DE LISTA SUSPENSA NO MODAL
 * 
 */
$("body").on("click", "#btn_clonar_lista_suspensa", function () {
    var contador_opcoes = $(".contador-lista-suspensa").length + 1;
    var contador_placeholder = $(".input-lista-suspensa").length + 1
    $("#modalAddPerguntas .modal-body .row .divListaSuspensa").append(
        '<div class="row clones_lista_suspensa">'+
            '<div class="col-md-1">' +
                '<label>&nbsp;</label>' +
                '<label class="pesquisa-multipla-escolha"><span class="contador-lista-suspensa">' + contador_opcoes + '</span></label>' +
            '</div>' +
            '<div class="col-md-8">' +
                '<label>&nbsp;</label>' +
                '<input type="text" class="form-control input-lista-suspensa" name="opcao_lista_suspensa[]" placeholder="Opção ' + contador_placeholder + '">' +
            '</div>' +
            '<div class="col-md-3">' +
                '<label>&nbsp;</label>' +
                '<button class="form-control btn-danger btnRemoveTarefaListaSuspensa" type="button"><i class="ri-subtract-fill"></i></button>' +
            '</div>' +
        '</div>'
    );
});

/**
* FUNÇÃO PARA REMOVER UM INPUT CLONADO DE TAREFA DE LISTA SUSPENSA NO MODAL
*/
$("body").on("click", ".btnRemoveTarefaListaSuspensa", function () {
    $(this).parent().parent().remove();
});

/**
 * FUNÇÃO PARA CLONAR INPUT DE TAREFA DE LISTA SUSPENSA NO MODAL
 * 
 */
$("body").on("click", "#btn_clonar_caixa_de_selecao", function () {
    var contador_placeholder = $(".input-caixa-de-selecao").length + 1
    $("#modalAddPerguntas .modal-body .row .divCaixaDeSelecao").append(
        
        '<div class="row clones_caixa_de_selecao">'+
            '<div class="col-md-1">' +
                '<label>&nbsp;</label>' +
                '<label class="pesquisa-caixa-de-selecao"><span class="checkbox-pesquisa-caixa-de-selecao"></span></label>' +
            '</div>' +
            '<div class="col-md-8">' +
                '<label>&nbsp;</label>' +
                '<input type="text" class="form-control input-caixa-de-selecao" name="opcao_caixa_de_selecao[]" placeholder="Opção ' + contador_placeholder + '">' +
            '</div>' +
            '<div class="col-md-3">' +
                '<label>&nbsp;</label>' +
                '<button class="form-control btn-danger btnRemoveTarefaCaixaDeSelecao" type="button"><i class="ri-subtract-fill"></i></button>' +
            '</div>' +
        '</div>'
    );
});

/**
* FUNÇÃO PARA REMOVER UM INPUT CLONADO DE TAREFA DE LISTA SUSPENSA NO MODAL
*/
$("body").on("click", ".btnRemoveTarefaCaixaDeSelecao", function () {
    $(this).parent().parent().remove();
});

/**
* FUNÇÃO PARA VALIDAR AS TAREFAS QUE VAO SER INSERIDAS E INSERIR NO FORMULARIO
*/

$("body").on("click", "#btn_adicionar_perguntas", function () {
    var tipo_de_pergunta = $("#tipo_de_respostas").val();
    var pergunta = $("#pergunta").val();
    if(tipo_de_pergunta === 'Múltipla Escolha') {
        var contador = $(".container").length + 1;
        $(".divComPerguntas").append(
            '<div class="container pergunta_' + contador + ' mb-5">' + 
                '<ul class="list-group">' +
                    '<div class="row">' +
                        '<div class="col-md-12">' +
                            '<li class="list-group-item active">' +
                                '<h5 class="titulo-perguntas">' + pergunta + '</h5>' +
                                '<input hidden value="' + pergunta + '" name="pergunta[]">' +
                            '</li>' +
                        '</div>' +
                    '</div>' +
                '</ul>' +
            '</div>'
        );
        $('#modalAddPerguntas .input-multipla-escolha').each(function () {
            $(".divComPerguntas .pergunta_" + contador + " .row").append(
                '<div class="col-md-12">' +
                    '<li class="list-group-item">' +
                        '<h6 class="mt-1"> <i class="ri-checkbox-blank-circle-line icone-perguntas"></i> ' + $(this).val().trim() + '</h6>' +
                        '<input hidden pergunta="'+pergunta+'" value="' + $(this).val().trim() + '" name="opcoes_multipla_escolha[]">' +
                    '</li>' +
                '</div>'
            );
        });
        $(".divSemPerguntas").hide();
        $(".divComPerguntas").show();
        $("#modalAddPerguntas").modal("toggle");
    } else if (tipo_de_pergunta === 'Caixas de Seleção') {
        var contador = $(".container").length + 1;
        $(".divComPerguntas").append(
            '<div class="container pergunta_' + contador + ' mb-5">' + 
                '<ul class="list-group">' +
                    '<div class="row">' +
                        '<div class="col-md-12">' +
                            '<li class="list-group-item active">' +
                                '<h5 class="titulo-perguntas">' + pergunta + '</h5>' +
                                '<input hidden value="' + pergunta + '" name="pergunta[]">' +
                            '</li>' +
                        '</div>' +
                    '</div>' +
                '</ul>' +
            '</div>'
        );
        $('#modalAddPerguntas .input-caixa-de-selecao').each(function () {
            $(".divComPerguntas .pergunta_" + contador + " .row").append(
                '<div class="col-md-12">' +
                    '<li class="list-group-item">' +
                        '<h6 class="mt-1"><i class="ri-checkbox-blank-line icone-perguntas"></i> ' + $(this).val().trim() + '</h6>' +
                        '<input hidden pergunta="'+pergunta+'" value="' + $(this).val().trim() + '" name="opcoes_caixa_de_selecao[]">' +
                    '</li>' +
                '</div>'
            );
        });
        $(".divSemPerguntas").hide();
        $(".divComPerguntas").show();
        $("#modalAddPerguntas").modal("toggle");
    } else if (tipo_de_pergunta === 'Lista Suspensa') {
        var contador = $(".container").length + 1;
        $(".divComPerguntas").append(
            '<div class="container pergunta_' + contador + ' mb-5">' + 
                '<ul class="list-group">' +
                    '<div class="row">' +                        
                        '<div class="col-md-12">' +                            
                            '<li class="list-group-item active">' +
                                '<h5 class="titulo-perguntas">' + pergunta + '</h5>' +
                                '<input hidden value="' + pergunta + '" name="pergunta[]">' +
                            '</li>' +                            
                        '</div>' +                        
                    '</div>' +
                '</ul>' +
            '</div>'
        );
        $('#modalAddPerguntas .input-lista-suspensa').each(function () {
            $(".divComPerguntas .pergunta_" + contador + " .row").append(
                '<div class="col-md-12">' + 
                    '<li class="list-group-item">' +
                        '<h6 class="mt-1"><i class="ri-arrow-right-s-line icone-perguntas"></i>  ' + $(this).val().trim() + '</h6>' +
                        '<input hidden pergunta="'+pergunta+'" value="' + $(this).val().trim() + '" name="opcoes_lista_suspensa[]">' +
                    '</li>' +
                '</div>'
            );
        });
        $(".divSemPerguntas").hide();
        $(".divComPerguntas").show();
        $("#modalAddPerguntas").modal("toggle");
    }
})

/**
* FUNÇÃO REMOVER UMA TAREFA JÁ INSERIDA NO FORMULÁRIO
*/
$("body").on("click", ".iconeLixeiraTarefa", function () {
    var elemento = $(this).parent().parent().parent();
    Swal.fire({
        tittle: "Confirmação",
        text: "Tem certeza que deseja excluir esta tarefa?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#298c43",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sim, quero excluir!",
        cancelButtonText: "Voltar",
    }).then((result) => {
        if (result.value) {
            elemento.remove();
            if ($(".divComTarefas .container-modals").length <= 0) {
                $(".divComTarefas").hide();
                $(".divSemTarefas").show();
                $(".divSemTarefas").show();
            }
        }
    })
})

/***************** FIM MODAL DE TAREFAS  *****************/
