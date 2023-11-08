@extends('app.layouts.basico')

@section('titulo', 'Course')

@php
    $titulo = 'Cadastrar Course ';
    //$classe_candidato = 'active';
    // $link1 = ['nome' => 'Listar', 'rota' => 'app..list'];
    // $link2 = ['nome' => 'Procurar', 'rota' => 'app..list'];
@endphp
    
@section('conteudo')
        <div class="informacao-pagina" style="margin-top: 7%">
            <div class="row g-3 needs-validation justify-content-center mt-5" style="width: 75%; margin-left: 10%;">
                <form class="row g-3" method="post" action="{{route('app.course.add')}}" >
                    @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01"  class="form-label">Nome</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="validationCustom01" required>
                        {{ $errors->has('name') ? $errors->first('name') : ''}}
                    </div>
                    <div class="col-md-6">
                        <label for="validationCustom05"  class="form-label">Descrição</label>
                        <input type="text" name="description" value="{{ old('description') }}" class="form-control " placeholder="Alguma observação"  id="validationCustom05">
                        {{ $errors->has('description') ? $errors->first('description') : ''}}
                    </div>

                    <div class="container">
                        <div class="col-md-4 d-flex justify-content-center" style="margin-left: 32%">
                          <button class="mt-3 btn btn-primary" name="btnCadastrar" type="submit">Cadastrar Course</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection