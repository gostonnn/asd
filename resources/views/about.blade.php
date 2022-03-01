@extends("layouts.app")

@section("title", "Rólunk")

@section("content")
    <h1>Dinamikus Rólunk oldal</h1>

    <x-message type="Hiba" message="Hiba üzenet" :page="$page"/>

    <br>
    <x-alert>
        <x-slot name="title">
            Komponens Rólunk oldal
        </x-slot>
        Adatok rólunk    
    </x-alert>

@endsection