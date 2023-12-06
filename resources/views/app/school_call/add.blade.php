@extends('app.layouts.basico')

@section('titulo', 'Chamada Escolar')

@php
    $titulo = 'Cadastrar Chamada Escolar ';
    //$classe_candidato = 'active';
    // $link1 = ['nome' => 'Listar', 'rota' => 'app..list'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app..list'];
@endphp
    
@section('conteudo')
    {{-- @livewire('school-call-livewire') --}}
    @livewire('school-call-create')

        {{-- <div class="informacao-pagina" style="margin-top: 7%">
            <div class="row g-3 needs-validation justify-content-center mt-5" style="width: 75%; margin-left: 10%;">
                <form class="row g-3" method="post" action="{{route('app.school_call.add')}}" >
                    @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01"  class="form-label">Data</label>
                        <input type="text" name="date" value="{{ old('date') }}" class="form-control" id="validationCustom01" placeholder="YYYY-mm-dd" required>
                        {{ $errors->has('date') ? $errors->first('date') : ''}}
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05"  class="form-label">Status</label>
                        <input type="text" name="status" value="{{ old('status') }}" class="form-control " placeholder="pending"  id="validationCustom05">
                        {{ $errors->has('status') ? $errors->first('status') : ''}}
                    </div>

                    <div class="col-md-6">
                        <label class="call_form">Selecione o Professor</label>
                        <select id="teacher" name="teacher_id" class="nice-select">
                            @foreach ($teachers as $teacher)
                                <option value={{ $teacher->id }}>{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="call_form">Selecione a Disciplina</label>
                        <select id="school_subject" name="school_subject_id" class="nice-select">
                            @foreach ($school_subjects as $school_subject)
                                <option value={{ $school_subject->id }}>{{ $school_subject->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="call_form">Selecione a Sala</label>
                        <select id="classroom" name="classroom_id" class="nice-select">
                            @foreach ($classrooms as $classroom)
                                <option value={{ $classroom->id }}>{{ $classroom->number }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="container">
                        <div class="col-md-4 d-flex justify-content-center" style="margin-left: 32%">
                          <button class="mt-3 btn btn-primary" name="btnCadastrar" type="submit">Cadastrar Chamada Escolar</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div> --}}
@endsection