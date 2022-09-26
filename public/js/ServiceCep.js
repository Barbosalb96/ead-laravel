

$(document).ready(function ($) {
    $('#price').maskMoney({
        prefix: '',
        allowNegative: true,
        thousands: '.', decimal: ',',
        affixesStay: true
    });
})

jQuery(function ($) {
    $("#cep").mask("99999-999");
    $("#telefone").mask("(99) 9 9999-9999");
    $("#telefone-outro").mask("(99) 9 9999-9999");
    $("#cpf").mask("999.999.999-99");
});

$('#cpf').on('keydown', function (e) {
    let cpf = $(this).val()
    if (e.key == "Tab") {
        let valid = validarCPF(cpf);
        if (!valid) {
            Swal.fire({
                icon: 'error', title: 'Oops...', text: 'CPF INVALIDO'
            })
            $(this).focus()
            return;
        }
    }
})

function validarCPF(cpf) {
    cpf = cpf.replace(/[^\d]+/g, '');
    if (cpf == '') return false;
    // Elimina CPFs invalidos conhecidos
    if (cpf.length != 11 || cpf == "00000000000" || cpf == "11111111111" || cpf == "22222222222" || cpf == "33333333333" || cpf == "44444444444" || cpf == "55555555555" || cpf == "66666666666" || cpf == "77777777777" || cpf == "88888888888" || cpf == "99999999999") return false;
    // Valida 1o digito
    add = 0;
    for (i = 0; i < 9; i++) add += parseInt(cpf.charAt(i)) * (10 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11) rev = 0;
    if (rev != parseInt(cpf.charAt(9))) return false;
    // Valida 2o digito
    add = 0;
    for (i = 0; i < 10; i++) add += parseInt(cpf.charAt(i)) * (11 - i);
    rev = 11 - (add % 11);
    if (rev == 10 || rev == 11) rev = 0;
    if (rev != parseInt(cpf.charAt(10))) return false;
    return true;
}



