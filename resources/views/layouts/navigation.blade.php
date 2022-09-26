<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="index.html">
            <span class="align-middle">Gestão EAD</span>
        </a>

        <ul class="sidebar-nav">

            <li class="sidebar-item active">
                <a class="sidebar-link" href="{{route('dashboard')}}">
                    <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                </a>
            </li>

            <li class="sidebar-header">
                Gestão de alunos
            </li>


            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('students.index')}}">
                    <i class="align-middle" data-feather="user"></i> <span class="align-middle">Matricular</span>
                </a>
            </li>

{{--            <li class="sidebar-item">--}}
{{--                <a class="sidebar-link" href="pages-sign-in.html">--}}
{{--                    <i class="align-middle" data-feather="log-in"></i> <span class="align-middle">Listar</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="sidebar-item">--}}
{{--                <a class="sidebar-link" href="pages-sign-in.html">--}}
{{--                    <i class="align-middle" data-feather="log-in"></i> <span--}}
{{--                        class="align-middle">Relatorio de notas</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="sidebar-header">--}}
{{--                Gestão de Professores--}}
{{--            </li>--}}

{{--            <li class="sidebar-item">--}}
{{--                <a class="sidebar-link" href="ui-buttons.html">--}}
{{--                    <i class="align-middle" data-feather="square"></i> <span class="align-middle">Matricular</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="sidebar-item">--}}
{{--                <a class="sidebar-link" href="ui-forms.html">--}}
{{--                    <i class="align-middle" data-feather="check-square"></i> <span--}}
{{--                        class="align-middle">Montar Horarios</span>--}}
{{--                </a>--}}
{{--            </li>--}}

            <li class="sidebar-header">
                Curso
            </li>

            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('course.index')}}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span
                        class="align-middle">Listar Curso</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a class="sidebar-link" href="{{route('course.create')}}">
                    <i class="align-middle" data-feather="bar-chart-2"></i> <span
                        class="align-middle">Criar Curso</span>
                </a>

            </li>

{{--            <li class="sidebar-header">--}}
{{--                Financeiro--}}
{{--            </li>--}}

{{--            <li class="sidebar-item">--}}
{{--                <a class="sidebar-link" href="charts-chartjs.html">--}}
{{--                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Cobrança</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="sidebar-item">--}}
{{--                <a class="sidebar-link" href="charts-chartjs.html">--}}
{{--                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Relatorio</span>--}}
{{--                </a>--}}
{{--            </li>--}}

{{--            <li class="sidebar-item">--}}
{{--                <a class="sidebar-link" href="charts-chartjs.html">--}}
{{--                    <i class="align-middle" data-feather="bar-chart-2"></i> <span class="align-middle">Folha de pagamento</span>--}}
{{--                </a>--}}
{{--            </li>--}}

        </ul>
    </div>
</nav>
