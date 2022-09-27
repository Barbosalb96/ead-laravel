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
                url: "students/alter-status",
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
                url: "students/alter-status",
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

$('.disabled-status-course').on('click', function (e) {
    e.preventDefault()
    Swal.fire({
        title: 'Deseja desativar este curso',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ativar'
    }).then((result) => {
        if (result.isConfirmed) {
            response = $.ajax({
                type: 'PUT',
                url: "course/alter-status",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id: $(this).data('id')},
                success: function (data) {
                    Swal.fire('Desativado!', 'Curso desativado com sucesso.', 'success')
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
$('.active-status-course').on('click', function (e) {
    e.preventDefault()
    Swal.fire({
        title: 'Deseja ativar este curso',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ativar'
    }).then((result) => {
        if (result.isConfirmed) {
            response = $.ajax({
                type: 'PUT',
                url: "course/alter-status",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data: {id: $(this).data('id')},
                success: function (data) {
                    Swal.fire('Ativado!', 'Curso ativado com sucesso.', 'success')
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
