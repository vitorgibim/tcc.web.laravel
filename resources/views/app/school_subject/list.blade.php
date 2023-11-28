@extends('app.layouts.basico')

@section('titulo', 'Disciplina')

@php
    $titulo = 'Listar Disciplina';
    //$classe_candidato = 'active';
    $link1 = ['nome' => 'Cadastrar', 'rota' => 'app..list'];
    $link2 = ['nome' => 'Procurar', 'rota' => 'app..list'];
@endphp
    
@section('conteudo')
<div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="7%">ID</th>
                <th width="7%">Nome</th>
                <th width="20%">Carga Horária</th>
                <th width="7%"></th>
                <th width="7%"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($school_subjects as $key => $school_subject)
                <form method="POST" action="">
                    <tr>
                        <td>{{ $school_subject->id }}</td>
                        <td>{{ $school_subject->name }}</td>
                        <td>{{ $school_subject->workload ? $school_subject->workload . 'h': '-' }}</td>
                        <td><a href="{{ route('app.school_subject.edit', [ 'id' => $school_subject['id'] ]) }}">Editar</a></td>
                        <td><a href="{{ route('app.school_subject.delete', [ 'id' => $school_subject['id'] ]) }}">Deletar</a></td>
                        
                        
                    </tr>
                </form>

            @endforeach
        </tbody>
    </table>

    <div class="row g-3 needs-validation justify-content-center">
        <span class="col-md-6 justify-content-center">
        {{ $school_subjects->links('pagination::bootstrap-4', [
  'size' => 'sm', 
  'show_prev_next' => true,
  'active' => 'primary',
  'align' => 'center'
]) }}
        </span>
    </div>

</div>

@endsection