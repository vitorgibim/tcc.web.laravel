@extends('app.layouts.basico')

@section('titulo', 'Aluno')

@php
    $titulo = 'Editar Aluno';
    // $classe_candidato = 'active';
    // $link1 = ['nome' => 'Cadastrar', 'rota' => 'app.candidato.cadastrar'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app.candidato'];
@endphp
    
@section('conteudo')
<div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <form class="row g-3" action="{{ route('app.student.update')}}" method="POST">
      @csrf
      @method('PUT')
      <div class="col-md-2 input-box">
        <span class="details">Id</span>
        <input type="text" class="form-control" name="id" value="{{$student->id }}" placeholder="" readonly>
      </div>
      <div class="col-md-12 input-box">
        <span class="details">Nome</span>
        <input type="text" class="form-control" name='name' value="{{ $student->name; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Registro Academico</span>
        <input type="text" class="form-control" name='ra' value="{{ $student->ra; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">CPF</span>
        <input type="text" class="form-control" name='cpf' value="{{ $student->cpf; }}" placeholder="" >
      </div>
      <div class="col-md-12 input-box">
        <span class="details">Email</span>
        <input type="e-mail" class="form-control" name='email' value="{{ $student->email; }}" placeholder="" >
      </div>
      <div class="col-md-6 input-box">
        <span class="details">Endereço</span>
        <input type="text" class="form-control" name='address' value="{{ $student->address; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Número do Endereço</span>
        <input type="text" class="form-control" name='address_number' value="{{ $student->address_number; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Bairro</span>
        <input type="text" class="form-control" name='neighborhood' value="{{ $student->neighborhood; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Cidade</span>
        <input type="text" class="form-control" name='city_id' value="{{ $student->city_id; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Curso</span>
        <input type="text" class="form-control" name='uf' value="{{ $student->course_id; }}" placeholder="" >
      </div>
    
      <div class="col-12 mt-3 justify-content-center">
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary col-md-2">Salvar</button>
          <a class="btn btn-primary col-md-2" role="button" href="{{ route('app.student.list')}}" aria-disabled="true">Voltar</a>
        </div>
      </div>
  </form>


</div>

@endsection