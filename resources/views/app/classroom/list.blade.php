@extends('app.layouts.basico')

@section('titulo', 'Classrooms')

@php
    $titulo = 'Listar Classrooms';
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
                <th width="20%">Número</th>
                <th width="7%">Descrição</th>
                <th width="10%">Professor</th>
                <th width="7%"></th>
                <th width="7%"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($classrooms as $key => $classroom)
                <form method="POST" action="">
                    <tr>
                        <td>{{ $classroom->id }}</td>
                        <td>{{ $classroom->number }}</td>
                        <td>{{ $classroom->description ? $classroom->description: '-' }}</td>
                        <td>{{ $classroom->number}}</td>
                        <td><a href="{{ route('app.classroom.edit', [ 'id' => $classroom['id'] ]) }}">Editar</a></td>
                        <td><a href="{{ route('app.classroom.delete', [ 'id' => $classroom['id'] ]) }}">Deletar</a></td>
                        
                        
                    </tr>
                </form>

            @endforeach
        </tbody>
    </table>

    <div class="row g-3 needs-validation justify-content-center">
        <span class="col-md-6 justify-content-center">
        {{ $classrooms->links('pagination::bootstrap-4', [
  'size' => 'sm', 
  'show_prev_next' => true,
  'active' => 'primary',
  'align' => 'center'
]) }}
        </span>
    </div>

</div>

@endsection