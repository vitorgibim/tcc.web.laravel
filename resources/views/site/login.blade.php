@extends('site.layouts.basico')

@section('titulo', 'Login')

@section('conteudo')
        <div style="width : 30% " class="informacao-pagina container center-block">
            <form action= {{route('site.login')}} method="post">
                @csrf
                <input name="usuario"  style="margin-bottom: 2px; "value="{{old('usuario')}}"type="text" placeholder="Usuário" class="borda-preta">
                {{ $errors->has('usuario') ? $errors->first('usuario') : ''}}
                <input name="senha" type="password" placeholder="Senha" class="borda-preta">
                {{ $errors->has('senha') ? $errors->first('senha') : ''}}
                <button type="submit"  style="width: 75%; margin-top: 10px; border: 2px solid ; border-radius: 10px;" class="borda-psreta">Acessar</button>
            </form>
            {{isset($erro) && $erro != '' ? $erro : ''}}
        </div>  
    </div>
@endsection