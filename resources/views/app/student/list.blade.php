@extends('app.layouts.basico')

@section('titulo', 'Alunos')

@php
    $titulo = 'Listar Alunos';
    //$classe_candidato = 'active';
    $link1 = ['nome' => 'Cadastrar', 'rota' => 'app.student.list'];
    $link2 = ['nome' => 'Procurar', 'rota' => 'app.student.list'];
@endphp
    
@section('conteudo')
<div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="7%">ID</th>
                <th width="7%">Nome</th>
                <th width="7%">R.A.</th>
                <th width="7%">Cpf</th>
                <th width="7%">Email</th>
                <th width="20%">Endereço</th>
                <th width="7%">Cidade</th>
                <th width="7%">Curso</th>
                <th width="7%"></th>
                <th width="7%"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($students as $key => $student)
                <form method="POST" action="">
                    <tr>
                        <td>{{ $student->id }}</td>
                        <td>{{ $student->name }}</td>
                        <td>{{ $student->ra }}</td>
                        <td>{{ $student->cpf }}</td>
                        <td>{{ $student->email }}</td>
                        <td>{{ $student->address." - nº ". $student->address_number." - ". $student->neighborhood}}</td>
                        <td>{{ $cities[$key]->description }}</td>
                        <td>{{ $student->course_id }}</td>
                        <td><a href="{{ route('app.student.edit', [ 'id' => $student['id'] ]) }}">Editar</a></td>
                        <td><a href="{{ route('app.student.delete', [ 'id' => $student['id'] ]) }}">Deletar</a></td>
                        
                        
                    </tr>
                </form>

            @endforeach
        </tbody>
    </table>

    <div class="row g-3 needs-validation justify-content-center">
        <span class="col-md-6 justify-content-center">
        {{ $students->links('pagination::bootstrap-4', [
  'size' => 'sm', 
  'show_prev_next' => true,
  'active' => 'primary',
  'align' => 'center'
]) }}
        </span>
    </div>

</div>

@endsection