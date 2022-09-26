$('#cep').on('keydown', function (e) {
    let cep = $(this).val()
    if (e.key == "Tab") {
        $.get("https://viacep.com.br/ws/" + cep + "/json/", function (data) {
            if (data.erro) {
                Swal.fire({
                    icon: 'error', title: 'Oops...', text: 'Cep não foi encontrado'
                })
                $(this).focus()
                return;
            }
            $('#address').val(data.logradouro);
            $('#complement').val(data.complemento);
            $('#uf').val(data.uf);
            $('#neighborhood').val(data.bairro);
        });
    }
})

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

$('.active-aluno').on('click', function (e) {
    e.preventDefault()
    Swal.fire({
        title: 'Deseja ativar o aluno',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ativar'
    }).then((result) => {
        if (result.isConfirmed) {
            response = $.ajax({
                type: 'PUT',
                url: "aluno/alter-status",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id: $(this).data('id')},
                success: function (data) {
                    Swal.fire('Ativado!', 'Student ativado com sucesso.', 'success')
                    setInterval(function () {
                        document.location.reload(true);
                    }, 2000)
                    return;
                },
                error: function (data) {
                    Swal.fire('Error!', 'Algo deu errado', 'error')
                }
            });
        }
    })
})
$('.disable-aluno').on('click', function (e) {
    e.preventDefault()
    Swal.fire({
        title: 'Deseja desativar o aluno',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ativar'
    }).then((result) => {
        if (result.isConfirmed) {
            response = $.ajax({
                type: 'PUT',
                url: "aluno/alter-status",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id: $(this).data('id')},
                success: function (data) {
                    Swal.fire('Desativado!', 'Student desativado com sucesso.', 'success')
                    setInterval(function () {
                        document.location.reload(true);
                    }, 2000)
                    return;
                },
                error: function (data) {
                    Swal.fire('Error!', 'Algo deu errado', 'error')
                }
            });
        }
    })
})


$('#curso').on('click', function (e) {
    curso = $(this).val();
    $('#periodo').html('')
    $.get('../get-amount-curso/' + curso).then(function (e) {
        for (i = 1; i <= e[0].amount_period; i++) {
            $('#periodo').append(` <option value="${i}">${i}</option>`)
        }
    });
})


$('#gerar-codigo').on('click', function (e) {
    e.preventDefault()
    let cod = Math.random() * (9 - 10) + 10000000;
    let newcod = String(cod).split(".")[1];
    $('#codigo').val(newcod);
})
