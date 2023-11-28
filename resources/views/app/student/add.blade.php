@extends('app.layouts.basico')

@section('titulo', 'Aluno')

@php
    $titulo = 'Cadastrar Aluno ';
    //$classe_candidato = 'active';
    $link1 = ['nome' => 'Listar', 'rota' => 'app.student.list'];
    $link2 = ['nome' => 'Procurar', 'rota' => 'app.student.list'];
@endphp
    
@section('conteudo')
        <div class="informacao-pagina" style="margin-top: 7%">
            <div class="row g-3 needs-validation justify-content-center mt-5" style="width: 75%; margin-left: 10%;">
                <form class="row g-3" method="post" action="{{route('app.student.add')}}" >
                    @csrf
                    <div class="col-md-12">
                        <label for="validationCustom01"  class="form-label">Nome completo</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" id="validationCustom01" required>
                        {{ $errors->has('name') ? $errors->first('name') : ''}}
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom05"  class="form-label">Registro Academico</label>
                        <input type="text" name="ra" value="{{ old('ra') }}" class="form-control" id="validationCustom05">
                        {{ $errors->has('ra') ? $errors->first('ra') : ''}}
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom05"  class="form-label">CPF</label>
                        <input type="text" name="cpf" value="{{ old('cpf') }}" class="form-control cpf-mask" placeholder="Ex.: 000.000.000-00" title="Digite um CPF no formato: xxx.xxx.xxx-xx" id="validationCustom05">
                        {{ $errors->has('cpf') ? $errors->first('cpf') : ''}}
                    </div>

                    <div class="col-md-12">
                        <label for="validationCustom05"  class="form-label">E-mail</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="validationCustom05">
                        {{ $errors->has('email') ? $errors->first('email') : ''}}
                    </div>

                    <div class="col-md-6">
                        <label for="validationCustom05"  class="form-label">Endereço</label>
                        <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="Endereço"  id="validationCustom05">
                    </div>


                    <div class="col-md-4">
                        <label for="validationCustom05"  class="form-label">Número</label>
                        <input type="text" name="address_number" value="{{ old('address_number') }}" class="form-control" id="validationCustom05">
                        {{ $errors->has('address_number') ? $errors->first('address_number') : ''}}
                    </div>
                    
                    <div class="col-md-3">
                        <label for="validationCustom05"  class="form-label">Bairro</label>
                        <input type="text" name="neighborhood" value="{{ old('neighborhood') }}" class="form-control" id="validationCustom05">
                        {{ $errors->has('neighborhood') ? $errors->first('neighborhood') : ''}}
                    </div>
                    
                    {{-- <div class="col-md-3">
                        <label for="validationCustom05"  class="form-label">Cidade</label>
                        <input type="text" name="city_id" value="{{ old('city_id') }}" class="form-control" id="validationCustom05">
                    </div> --}}


                    <div class="col-md-6 mt-3">
                        <label class="call_form">Selecione a Cidade</label>
                        <select id="city" name="city_id" class="nice-select">
                
                            @foreach ($cities as $city)
                                <option value={{ $city->id }}>{{ $city->description }}</option>
                            @endforeach
                        </select>
                      </div>

                    {{-- <div class="col-md-3">
                        <label for="validationCustom05"  class="form-label">Curso</label>
                        <input type="text" name="course_id" value="{{ old('course_id') }}" class="form-control" id="validationCustom05" >
                    </div> --}}

                    <div class="container">
                        <div class="col-md-4 d-flex justify-content-center" style="margin-left: 32%">
                          <button class="mt-3 btn btn-primary" name="btnCadastrar" type="submit">Cadastrar Aluno</button>
                        </div>
                      </div>
                </form>
            </div>
        </div>
    </div>
@endsection