/*VALIDAÇÃO DOS FORMULÁRIOS*/

$('#form-cadastro').submit(function(){

    var nome = $('#nome');
    var email = $('#email');
    var dataNasc = $('#date');
    var renda = $('#renda');
    var erro = $('.alert'); //variável erro manipula a classe alert
    var campo = $('#campo-erro');

    //garante que as mensagens de erro não continuarão a ser exibida após o preenchimento dos campos
    erro.addClass('d-none');
    $('.is-invalid').removeClass('is-invalid');

    //Validação do campo 'nome'
    if(nome.val() == ''){
        erro.removeClass('d-none');
        campo.html('nome'); //nome do campo não preenchido
        nome.focus();
        nome.addClass('is-invalid');

        return false
    }

    //Validação do campo 'email'
    if(email.val() == ''){
        erro.removeClass('d-none');
        campo.html('email'); //nome do campo não preenchido
        email.focus();
        email.addClass('is-invalid');

        return false
    }

    //Validação do campo 'dataNasc'
    if(dataNasc.val() == ''){
        erro.removeClass('d-none');
        dataNasc.focus();
        dataNasc.addClass('is-invalid');

        return false
    }
    
    //Validação do campo 'renda'
    if(renda.val() == ''){
        erro.removeClass('d-none');
        campo.html('renda'); //nome do campo não preenchido
        renda.focus();
        renda.addClass('is-invalid');

        return false
    }
    
    //quando as condições forem atendidas, o formulário é enviado
    return true;
});