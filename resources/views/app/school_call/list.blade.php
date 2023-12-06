@extends('app.layouts.basico')

@section('titulo', 'Chamada Escolar')

@php
    $titulo = 'Listar Chamada Escolar';
    //$classe_candidato = 'active';
    $link1 = ['nome' => 'Cadastrar', 'rota' => 'app..list'];
    $link2 = ['nome' => 'Procurar', 'rota' => 'app..list'];
@endphp
    
@section('conteudo')
<div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <div>
        @if (session()->has('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
        @endif
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="7%">ID</th>
                <th width="%">Status</th>
                <th width="7%">Data</th>
                <th width="7%">Disciplina</th>
                <th width="10%">Professor</th>
                <th width="10%">Sala</th>
                <th width="20%">Aluno</th>
                <th width="7%"></th>
                <th width="7%"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($school_calls as $key => $school_call)
                <form method="POST" action="">
                    <tr>
                        <td>{{ $school_call->id }}</td>
                        <td>{{ $school_call->status}}</td>
                        <td>{{ $school_call->date }}</td>
                        <td>{{ $school_call->schoolSubject->name}}</td>
                        <td>{{ $school_call->teacher->name}}</td>
                        <td>{{ $school_call->classroom->number}}</td>
                        <td>
                        @foreach ( $school_call->students as $student)
                        
                        {{ $student->name . ', '}}
                        @endforeach
                    </td>
                   
                        <td><a href="{{ route('app.school_call.edit', [ 'id' => $school_call['id'] ]) }}">Editar</a></td>
                        <td><a href="{{ route('app.school_call.delete', [ 'id' => $school_call['id'] ]) }}">Deletar</a></td>
                        
                        
                    </tr>
                </form>

            @endforeach
        </tbody>
    </table>

    <div class="row g-3 needs-validation justify-content-center">
        <span class="col-md-6 justify-content-center">
        {{ $school_calls->links('pagination::bootstrap-4', [
  'size' => 'sm', 
  'show_prev_next' => true,
  'active' => 'primary',
  'align' => 'center'
]) }}
        </span>
    </div>

</div>

@endsection