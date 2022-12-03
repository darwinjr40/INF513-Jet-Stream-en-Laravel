@extends('layouts.plantilla')

@section('title')
    Persona
@endsection

@section('action')
    <a href="{{ route('persona.index') }}" class="hover:underline ">Persona</a>
@endsection

@section('content')
@livewire('persona.lw-create')
@endsection