@extends('app.layouts.basico')

@section('titulo', 'Beacons')

@php
    $titulo = 'Listar Beacons';
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
                <th width="20%">UUID</th>
                <th width="7%">Descrição</th>
                <th width="10%">Professor</th>
                <th width="7%"></th>
                <th width="7%"></th>
            </tr>
        </thead>

        <tbody>
            @foreach ($beacons as $key => $beacon)
                <form method="POST" action="">
                    <tr>
                        <td>{{ $beacon->id }}</td>
                        <td>{{ $beacon->UUID }}</td>
                        <td>{{ $beacon->description ? $beacon->description: '-' }}</td>
                        <td>{{ $beacon->teacher->name }}</td>
                        <td><a href="{{ route('app.beacon.edit', [ 'id' => $beacon['id'] ]) }}">Editar</a></td>
                        <td><a href="{{ route('app.beacon.delete', [ 'id' => $beacon['id'] ]) }}">Deletar</a></td>
                        
                        
                    </tr>
                </form>

            @endforeach
        </tbody>
    </table>

    <div class="row g-3 needs-validation justify-content-center">
        <span class="col-md-6 justify-content-center">
        {{ $beacons->links('pagination::bootstrap-4', [
  'size' => 'sm', 
  'show_prev_next' => true,
  'active' => 'primary',
  'align' => 'center'
]) }}
        </span>
    </div>

</div>

@endsection