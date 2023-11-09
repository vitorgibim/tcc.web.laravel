@extends('app.layouts.basico')

@section('titulo', 'Classroom')

@php
    $titulo = 'Cadastrar Classroom ';
    //$classe_candidato = 'active';
    // $link1 = ['nome' => 'Listar', 'rota' => 'app..list'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app..list'];
@endphp
    
@section('conteudo')
        <div class="informacao-pagina" style="margin-top: 7%">
            <div class="row g-3 needs-validation justify-content-center mt-5" style="width: 75%; margin-left: 10%;">
                <form class="row g-3" method="post" action="{{route('app.classroom.add')}}" >
                    @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01"  class="form-label">UUID</label>
                        <input type="text" name="UUID" value="{{ old('UUID') }}" class="form-control" id="validationCustom01" required>
                        {{ $errors->has('UUID') ? $errors->first('UUID') : ''}}
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05"  class="form-label">Descrição</label>
                        <input type="text" name="description" value="{{ old('description') }}" class="form-control " placeholder="Alguma observação"  id="validationCustom05">
                        {{ $errors->has('description') ? $errors->first('description') : ''}}
                    </div>

                    <div class="col-md-6">
                        <label class="call_form">Selecione o Professor</label>
                        <select id="teacher" name="teacher_id" class="nice-select">
                            <option data-display="Select" selected disabled>Professor</option>
                            @foreach ($teachers as $teacher)
                                <option value={{ $teacher->id }}>{{ $teacher->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="container">
                        <div class="col-md-4 d-flex justify-content-center" style="margin-left: 32%">
                          <button class="mt-3 btn btn-primary" name="btnCadastrar" type="submit">Cadastrar Classroom</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection