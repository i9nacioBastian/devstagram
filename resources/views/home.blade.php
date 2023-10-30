@extends('layouts.app')

@section('titulo')
    Página principal
@endsection

@section('contenido')
    {{-- llamada de componente --}}
    {{-- <x-listar-post>
        <x-slot:titulo>
            <header>Esto es un header</header>
        </x-slot:titulo>
        <h1>Mostrando componente</h1>
    </x-listar-post> --}}

    <x-listar-post :posts="$posts" />
@endsection
