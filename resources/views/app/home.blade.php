@extends('app.layouts.basico')

@section('titulo', 'Home')
@php
    $classe_home = 'active';
@endphp
@section('conteudo')
    <br><br><br><br>
    @php
        // $school_subjects = App\Models\SchoolSubject::all();
        // $teachers = App\Models\Teacher::all();
        $data = [
            'id' => "003e99f6-6cb9-2cc9-069c-c26d27105c38",
            'cpf' => "185364356"

];
    @endphp
    {{-- @livewire('school-call-student',['data'=> $data]) --}}

    {{-- @livewire('school-call', ['classe_home' => $classe_home]) --}}
    {{-- <livewire:school-call-livewire /> --}}
    {{-- <livewire:chamada /> --}}
@endsection