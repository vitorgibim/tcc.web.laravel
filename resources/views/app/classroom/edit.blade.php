@extends('app.layouts.basico')

@section('titulo', 'Classroom')

@php
    $titulo = 'Editar Classroom';
    // $classe_candidato = 'active';
    // $link1 = ['nome' => 'Cadastrar', 'rota' => 'app.candidato.cadastrar'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app.candidato'];
@endphp
    
@section('conteudo')
<div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <form class="row g-3" action="{{ route('app.classroom.update')}}" method="POST">
      @csrf
      @method('PUT')
      <div class="col-md-2 input-box">
        <span class="details">Id</span>
        <input type="text" class="form-control" name="id" value="{{$classroom->id }}" placeholder="" readonly>
      </div>
      <div class="col-md-12 input-box">
        <span class="details">UUID</span>
        <input type="text" class="form-control" name='UUID' value="{{ $classroom->UUID; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Descrição</span>
        <input type="text" class="form-control" name='description' value="{{ $classroom->description; }}" placeholder="" >
      </div>

      <div class="col-md-6 mt-3">
        <label class="call_form">Selecione o Professor</label>
        <select id="teacher" name="teacher_id" class="nice-select">
            <option value={{ $classroom->teacher->id }} >{{ $classroom->teacher->name }}</option>
            @foreach ($teachers as $teacher)
                <option value={{ $teacher->id }}>{{ $teacher->name }}</option>
            @endforeach
        </select>
    </div>
    
      <div class="col-12 mt-3 justify-content-center">
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary col-md-2">Salvar</button>
          <a class="btn btn-primary col-md-2" role="button" href="{{ route('app.classroom.list')}}" aria-disabled="true">Voltar</a>
        </div>
      </div>
  </form>


</div>

@endsection