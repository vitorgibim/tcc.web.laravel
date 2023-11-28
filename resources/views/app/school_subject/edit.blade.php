@extends('app.layouts.basico')

@section('titulo', 'Disciplina')

@php
    $titulo = 'Editar Disciplina';
    // $classe_candidato = 'active';
    // $link1 = ['nome' => 'Cadastrar', 'rota' => 'app.candidato.cadastrar'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app.candidato'];
@endphp
    
@section('conteudo')
<div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <form class="row g-3" action="{{ route('app.school_subject.update')}}" method="POST">
      @csrf
      @method('PUT')
      <div class="col-md-2 input-box">
        <span class="details">Id</span>
        <input type="text" class="form-control" name="id" value="{{$school_subject->id }}" placeholder="" readonly>
      </div>
      <div class="col-md-12 input-box">
        <span class="details">Nome</span>
        <input type="text" class="form-control" name='name' value="{{ $school_subject->name; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Carga Horária</span>
        <input type="text" class="form-control" name='workload' value="{{ $school_subject->workload; }}" placeholder="" >
      </div>
    
      <div class="col-12 mt-3 justify-content-center">
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary col-md-2">Salvar</button>
          <a class="btn btn-primary col-md-2" role="button" href="{{ route('app.school_subject.list')}}" aria-disabled="true">Voltar</a>
        </div>
      </div>
  </form>


</div>

@endsection