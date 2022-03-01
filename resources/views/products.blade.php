@extends("layouts.app")

@section("title", "Termékek")

@section("content")
    <h1>Dinamikus Termékek oldal</h1>

    <x-message type="Siker" message="Siker üzenet" :page="$page"/>
    <br>
    <x-alert>
        <x-slot name="title">
            Komponens Termékek oldal
        </x-slot>
        Adatok a termékekről    
    </x-alert>

@endsection
