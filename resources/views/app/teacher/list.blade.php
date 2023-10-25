@extends('app.layouts.basico')

@section('titulo', 'Professores')

@php
    $titulo = 'Listar Professores';
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
                <th width="7%">Cpf</th>
                <th width="7%">Email</th>
                <th width="20%">Endereço</th>
                <th width="7%">Cidade</th>
                <th width="7%"></th>
                <th width="7%"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($teachers as $key => $teacher)
                <form method="POST" action="">
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->name }}</td>
                        <td>{{ $teacher->cpf }}</td>
                        <td>{{ $teacher->email }}</td>
                        <td>{{ $teacher->address." - nº ". $teacher->address_number." - ". $teacher->neighborhood}}</td>
                        <td>{{ $cities[$key]->description }}</td>
                        <td><a href="{{ route('app.teacher.edit', [ 'id' => $teacher['id'] ]) }}">Editar</a></td>
                        <td><a href="{{ route('app.teacher.delete', [ 'id' => $teacher['id'] ]) }}">Deletar</a></td>
                        
                        
                    </tr>
                </form>

            @endforeach
        </tbody>
    </table>

    <div class="row g-3 needs-validation justify-content-center">
        <span class="col-md-6 justify-content-center">
        {{ $teachers->links('pagination::bootstrap-4', [
  'size' => 'sm', 
  'show_prev_next' => true,
  'active' => 'primary',
  'align' => 'center'
]) }}
        </span>
    </div>

</div>

@endsection