@extends('app.layouts.basico')

@section('titulo', 'Professor')

@php
    $titulo = 'Editar Professor';
    // $classe_candidato = 'active';
    // $link1 = ['nome' => 'Cadastrar', 'rota' => 'app.candidato.cadastrar'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app.candidato'];
@endphp
    
@section('conteudo')
<div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <form class="row g-3" action="{{ route('app.teacher.update')}}" method="POST">
      @csrf
      @method('PUT')
      <div class="col-md-2 input-box">
        <span class="details">Id</span>
        <input type="text" class="form-control" name="id" value="{{$teacher->id }}" placeholder="" readonly>
      </div>
      <div class="col-md-12 input-box">
        <span class="details">Nome</span>
        <input type="text" class="form-control" name='name' value="{{ $teacher->name; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">CPF</span>
        <input type="text" class="form-control" name='cpf' value="{{ $teacher->cpf; }}" placeholder="" >
      </div>
      <div class="col-md-12 input-box">
        <span class="details">Email</span>
        <input type="e-mail" class="form-control" name='email' value="{{ $teacher->email; }}" placeholder="" >
      </div>
      <div class="col-md-6 input-box">
        <span class="details">Endereço</span>
        <input type="text" class="form-control" name='address' value="{{ $teacher->address; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Número do Endereço</span>
        <input type="text" class="form-control" name='address_number' value="{{ $teacher->address_number; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Bairro</span>
        <input type="text" class="form-control" name='neighborhood' value="{{ $teacher->neighborhood; }}" placeholder="" >
      </div> 

      <div class="col-md-6 mt-3">
        <label class="call_form">Selecione a Cidade</label>
        <select id="city" name="city_id" class="nice-select">
            <option value={{ $teacher->city->id }} >{{ $teacher->city->description }}</option>
            @foreach ($cities as $city)
                <option value={{ $city->id }}>{{ $city->description }}</option>
            @endforeach
        </select>
      </div>

      {{-- <div class="col-md-6 mt-3">
        <label class="call_form">Selecione a Disciplina</label>
        <select id="schoolSubject" name="school_subject_id" class="nice-select">
            <option value={{ $teacher->schoolSubjects[0]->id ?? '0'}} >{{ $teacher->schoolSubjects[0]->name ?? 'Nenhuma disciplina selecionada'}}</option>
            @foreach ($schoolSubjects as $schoolSubject)
                <option value={{ $schoolSubject->id }}>{{ $schoolSubject->name }}</option>
            @endforeach
        </select>
      </div> --}}

      {{-- <div class="col-md-4 input-box">
        <span class="details">Curso</span>
        <input type="text" class="form-control" name='uf' value="{{ $teacher->course_id; }}" placeholder="" >
      </div> --}}
    
      <div class="col-12 mt-3 justify-content-center">
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary col-md-2">Salvar</button>
          <a class="btn btn-primary col-md-2" role="button" href="{{ route('app.teacher.list')}}" aria-disabled="true">Voltar</a>
        </div>
      </div>
  </form>


</div>

@endsection