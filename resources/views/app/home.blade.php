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
    @endphp
    {{-- @livewire('school-call', ['classe_home' => $classe_home]) --}}
    {{-- <livewire:school-call-livewire /> --}}
    {{-- <livewire:chamada /> --}}
@endsection