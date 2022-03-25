/**
* FUNÇÃO PARA VALIDAR OS CAMPOS DO FORMULÁRIO
*/
$("body").on("click", "#btn_cadastrar_ticket", function () {
    $(".required").each(function () {
        if ($(this).val().trim() === '') {
            Swal.fire({
                title: "Ooops!",
                text: "Não pode ter campos em branco.",
                icon: "error",
                cancelButtonText: "OK",
            });
        }
    });
})

/***************** INÍCIO MODAL DE TAREFAS  *****************/
$("body").on("click", "#btn_abrir_modal_tarefas", function () {
    $("#modalAddTarefasTicket .inputTarefas").val("");
    $("#modalAddTarefasTicket").modal("toggle");
})

/**
 * FUNÇÃO PARA CLONAR INPUT DE TAREFA NO MODAL
 * 
 */
$("body").on("click", "#btn_clonar_tarefa", function () {
    $("#modalAddTarefasTicket .modal-body").append(
        '<div class="row elementosDinamicosTarefas ">' +
            '<div class="col-md-10">' +
                '<label for="tarefa">Tarefa</label>' +
                '<input class="form-control inputTarefas" type="text" name="tarefa_add[]" placeholder="Descrição da tarefa">' +
            '</div>' +
            '<div class="col-md-2 mb-3">' +
                '<label>&nbsp;</label>' +
                '<button class="form-control btn-danger btnRemoveTarefa" type="button"><i class="ri-subtract-line"></i></button>' +
            '</div>' +
        '</div>'
    );
});

/**
* FUNÇÃO PARA REMOVER UM INPUT CLONADO DE TAREFA NO MODAL
*/
$("body").on("click", ".btnRemoveTarefa", function () {
    $(this).parent().parent().remove();
})

/**
* FUNÇÃO PARA VALIDAR AS TAREFAS QUE VAO SER INSERIDAS E INSERIR NO FORMULARIO
*/

$("body").on("click", "#btn_adicionar_tarefas", function () {
    var validacao = true;
    $(".inputTarefas").each(function () {
        if ($(this).val().trim() === '') {
            validacao = false;
        }
    });

    if (validacao) {
        $(".inputTarefas").each(function () {
            $(".divComTarefas").append(
                '<div class="container-modals">' + 
                    '<ul class="list-group-flush">' +
                        '<div class="row">' +
                            '<div class="col-md-12">' +
                                '<li class="list-group-item">' +
                                    '<div class="row">' +
                                        '<div class="col-md-11 tarefas">' +
                                            '<input type="hidden" name="tarefa[]" value="' + $(this).val().trim() + '" />' +
                                            '<input type="hidden" name="tarefa_hash[]" value="" />' +
                                            '<h6 class="task-label tarefa-lista mb-3 checkmark"><input type="checkbox" class="checkbox checkbox-input concluindo-tarefa" name="tarefa[]" value="'+ $(this).val().trim() +'">' + $(this).val().trim() + '</h6>' +
                                        '</div>' +
                                        '<div class="col-md-1 tarefas">'+
                                            '<i class="ri-delete-bin-line iconeLixeiraTarefa"></i>'+
                                        '</div>'+
                                    '</div>' +
                                '</li>' +
                            '</div>' +
                        '</div>' +
                    '</ul>' +
                '</div>'
            );
            $(".divSemTarefas").hide();
            $(".divComTarefas").show();
            $("#modalAddTarefasTicket").modal("toggle");
        })
    } else {
        Swal.fire({
            title: "Ooops!",
            text: "Não pode ter campos em branco.",
            icon: "error",
            cancelButtonText: "OK",
        });
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


/***************** INÍCIO MODAL DE MEMBROS  *****************/

/**
* FUNÇÃO PARA ABRIR O MODAL DE MEMBROS
*/
$("body").on("click", "#btn_abrir_modal_membros", function () {
    $("#modalAddMembros .inputMembros").val("");
    $("#modalAddMembros").modal("toggle");
})

/**
* FUNÇÃO PARA EXIBIR O INPUT CONFORME O TIPO DE MEMBRO SELECIONADO
*/
$("body").on("change", "#tipo_membros", function () {
    var tipo = $(this).val().trim();
    if (tipo === 'Usuário') {
        $('.divSelectTimes').slideUp();
        $('.divSelectDepartamentos').slideUp();
        $('.divSelectUsuarios').slideDown();
    } else if (tipo === 'Departamento') {
        $('.divSelectTimes').slideUp();
        $('.divSelectDepartamentos').slideDown();
        $('.divSelectUsuarios').slideUp();
    } else if (tipo === 'Time'){
        $('.divSelectTimes').slideDown();
        $('.divSelectDepartamentos').slideUp();
        $('.divSelectUsuarios').slideUp();
    } else {
        $('.opcoes-membros').slideUp();
    }
})

/**
* FUNÇÃO PARA VALIDAR OS CAMPOS E ADICIONAR OS MEMBROS NO FORMULÁRIO
*/
 $("body").on("click", "#btn_adicionar_membros", function () {
    var validacao = true;
    var tipo_usuario = $("#membros_usuarios").val();
    var tipo_departamento = $("#membros_departamentos").val();
    var tipo_time = $("#membros_time").val();
    var resultado = '';
    var resultado_hidden = '';
    if(tipo_usuario !== '') {
        resultado = '<i class="ri-user-fill"></i>   ' + tipo_usuario;
        resultado_hidden = tipo_usuario;
    } else if (tipo_departamento !== '') {
        resultado = '<i class="ri-team-fill"></i>   ' + tipo_departamento;
        resultado_hidden = tipo_departamento;
    } else if (tipo_time !== '') {
        resultado = '<i class="ri-team-line"></i>   ' + tipo_time;
        resultado_hidden = tipo_time;
    } else {
        resultado = false;
    }
    if($("#tipo_membros").val() === '') {
        validacao = false;
    }
    $("#tipo_membros").each(function () {
        if ($(this).val().trim() === '') {
            validacao = false;
        }
    });

    if (validacao) {
        if(resultado) {
            $(".divComMembros").append(
                "<div class='container-modals'>" +
                    '<ul class="list-group-flush">' +
                        '<div class="row">' +
                            '<div class="col-md-12">' +
                                '<li class="list-group-item">' +
                                    '<div class="row">' +
                                        '<div class="col-md-11 membros">' +
                                            '<input type="hidden" name="membro[]" value="' + resultado_hidden + '" />' +
                                            '<input type="hidden" name="membro[]" value="" />' +
                                            '<h6 class="task-label tarefa-lista mb-3 checkmark">' + resultado + '</h6>' +
                                        '</div>' +
                                        '<div class="col-md-1 membros">' +
                                            '<i class="ri-delete-bin-line iconeLixeiraMembro float-right"></i>'+
                                        '</div>' +
                                    '</div>' +
                                '</li>' +
                            '</div>'+
                        '</div>' +
                    '</ul>' +
                "</div>"
            );
            $(".divSemMembros").hide();
            $("#membros_usuarios").val("");
            $("#membros_departamentos").val("");
            $("#membros_time").val("");
            $('.opcoes-membros').slideUp();
            $("#modalAddMembros").modal("toggle");
        } else {
            Swal.fire({
                title: "Ooops!",
                text: "Selecione o membro para vincular.",
                icon: "error",
                cancelButtonText: "OK",
            });
        }
    } else {
        Swal.fire({
            title: "Ooops!",
            text: "Selecione um tipo de membro para vincular.",
            icon: "error",
            cancelButtonText: "OK",
        });
    }
})

/**
* FUNÇÃO PARA REMOVER UM MEMBRO JÁ INSERIDO NO FORMULÁRIO
*/
$("body").on("click", ".iconeLixeiraMembro", function () {
    var elemento = $(this).parent().parent().parent();
    Swal.fire({
        tittle: "Confirmação",
        text: "Tem certeza que deseja excluir este membro?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#298c43",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sim, quero excluir!",
        cancelButtonText: "Voltar",
    }).then((result) => {
        if (result.value) {
            elemento.remove();
            if ($(".divComMembros .container-modals").length <= 0) {
                $(".divComMembros").hide();
                $(".divSemMembros").show();
                $(".divSemMembros").show();
            }
        }
    })
})


/***************** FIM MODAL DE MEMBROS  *****************/

/***************** INÍCIO MODAL DE MÍDIAS  *****************/

/**
* FUNÇÃO PARA ABRIR MODAL DE MÍDIAS
*/
$("body").on("click", "#btn_abrir_modal_midias", function () {
    $("#modalAddMidia .inputMidia").val("");
    $("#modalAddMidia").modal("toggle");
})


/**
* FUNÇÃO PARA VALIDAR OS CAMPOS E INSERIR NO FORMULARIO
*/
$("body").on("click", "#btn_adicionar_midias", function () {
    var validacao = true;
    var titulo = $("#titulo_midia").val();

    if (validacao) {
        $(".divComMidias").append(
            "<div class='container-modals'>" +
                '<ul class="list-group-flush">' +
                    '<div class="row task-lista mb-3">' +
                        '<div class="col-md-12">' + 
                            '<li class="list-group-item">' +
                                '<div class="row">' +
                                    '<div class="col-md-11 midias">' +
                                        '<input type="hidden" name="midia[]" value="' + titulo + '" />' +
                                        '<input type="hidden" name="midia[]" value="" />' +
                                        '<h6 class="task-label tarefa-lista mb-3 checkmark">' + titulo + '</h6>' +
                                    '</div>' +
                                    '<div class="col-md-1 midias">'+
                                        '<i class="ri-delete-bin-line iconeLixeiraMidia"></i>'+
                                    '</div>'+
                                '</div>' +
                            '</li>' + 
                        '</div>' +
                    '</div>' +
                '</ul>' +
            "</div>"
        );
        $(".divSemMidias").hide();
        $("#modalAddMidia").modal("toggle");
    } else {
        Swal.fire({
            title: "Ooops!",
            text: "Não pode ter campos em branco.",
            icon: "error",
            cancelButtonText: "OK",
        });
    }

    
})

/**
* FUNÇÃO PARA REMOVER UMA MÍDIA JÁ INCLUSA NO FORMULÁRIO
*/
$("body").on("click", ".iconeLixeiraMidia", function () {
    var elemento = $(this).parent().parent().parent();
    Swal.fire({
        tittle: "Confirmação",
        text: "Tem certeza que deseja excluir esta mídia?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#298c43",
        cancelButtonColor: "#3085d6",
        confirmButtonText: "Sim, quero excluir!",
        cancelButtonText: "Voltar",
    }).then((result) => {
        if (result.value) {
            elemento.remove();
            if ($(".divComMidias .container-modals").length <= 0) {
                $(".divComMidias").hide();
                $(".divSemMidias").show();
                $(".divSemMidias").show();
            }
        }
    })
})


/***************** FIM MODAL DE MEMBROS  *****************/