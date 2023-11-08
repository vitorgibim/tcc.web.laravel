@extends('app.layouts.basico')

@section('titulo', 'Courses')

@php
    $titulo = 'Listar Courses';
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
                <th width="20%">Descrição</th>
                <th width="7%"></th>
                <th width="7%"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($courses as $key => $course)
                <form method="POST" action="">
                    <tr>
                        <td>{{ $course->id }}</td>
                        <td>{{ $course->name }}</td>
                        <td>{{ $course->description ? $course->description: '-' }}</td>
                        <td><a href="{{ route('app.course.edit', [ 'id' => $course['id'] ]) }}">Editar</a></td>
                        <td><a href="{{ route('app.course.delete', [ 'id' => $course['id'] ]) }}">Deletar</a></td>
                        
                        
                    </tr>
                </form>

            @endforeach
        </tbody>
    </table>

    <div class="row g-3 needs-validation justify-content-center">
        <span class="col-md-6 justify-content-center">
        {{ $courses->links('pagination::bootstrap-4', [
  'size' => 'sm', 
  'show_prev_next' => true,
  'active' => 'primary',
  'align' => 'center'
]) }}
        </span>
    </div>

</div>

@endsection