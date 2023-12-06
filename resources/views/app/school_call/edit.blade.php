@extends('app.layouts.basico')

@section('titulo', 'Chamada Escolar')

@php
    $titulo = 'Editar Chamada Escolar';
    // $classe_candidato = 'active';
    // $link1 = ['nome' => 'Cadastrar', 'rota' => 'app.candidato.cadastrar'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app.candidato'];
@endphp
    
@section('conteudo')
@livewire('school-call-edit',['id' => $id])


{{-- <div style="width: 95%; margin-left: 2%; margin-top: 7%; margin-right: 2%">
    <form class="row g-3" action="{{ route('app.school_call.update')}}" method="POST">
      @csrf
      @method('PUT')
      <div class="col-md-2 input-box">
        <span class="details">Id</span>
        <input type="text" class="form-control" name="id" value="{{$school_call->id }}" placeholder="" readonly>
      </div>
      <div class="col-md-12 input-box">
        <span class="details">Data</span>
        <input type="text" class="form-control" name='date' value="{{ $school_call->date; }}" placeholder="" >
      </div>
      <div class="col-md-4 input-box">
        <span class="details">Status</span>
        <input type="text" class="form-control" name='status' value="{{ $school_call->status; }}" placeholder="" >
      </div>

      <div class="col-md-6 mt-3">
        <label class="call_form">Selecione o Stauts</label>
        <select id="student" name="student_id" class="nice-select">
                <option value="pending">Pending</option>
                <option value="finished">Finished</option>
        </select>

      <div class="col-md-6 mt-3">
        <label class="call_form">Selecione o Professor</label>
        <select id="teacher" name="teacher_id" class="nice-select">
            <option value={{ $school_call->teacher->id }} >{{ $school_call->teacher->name }}</option>
            @foreach ($teachers as $teacher)
                <option value={{ $teacher->id }}>{{ $teacher->name }}</option>
            @endforeach
        </select>
      </div>      <div class="col-md-6 mt-3">
        <label class="call_form">Selecione a Sala</label>
        <select id="classroom" name="classroom_id" class="nice-select">
            <option value={{ $school_call->classroom->id }} >{{ $school_call->classroom->number }}</option>
            @foreach ($classrooms as $classroom)
                <option value={{ $classroom->id }}>{{ $classroom->number }}</option>
            @endforeach
        </select>
      </div>      <div class="col-md-6 mt-3">
        <label class="call_form">Selecione a Disciplina</label>
        <select id="school_subject" name="school_subject_id" class="nice-select">
            <option value={{ $school_call->schoolSubject->id }} >{{ $school_call->schoolSubject->name }}</option>
            @foreach ($school_subjects as $school_subject)
                <option value={{ $school_subject->id }}>{{ $school_subject->name }}</option>
            @endforeach
        </select>
      </div>  

      <div class="col-12 mt-3 justify-content-center">
        <div class="col-md-6">
          <button type="submit" class="btn btn-primary col-md-2">Salvar</button>
          <a class="btn btn-primary col-md-2" role="button" href="{{ route('app.school_call.list')}}" aria-disabled="true">Voltar</a>
        </div>
      </div>
  </form>


</div> --}}

@endsection