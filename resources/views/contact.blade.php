@extends("layouts.app")

@section("title", "Kapcsolat")

@section("content")
    <h1>Dinamikus Kapcsolat oldal</h1>

    <x-message type="connecting" message="reconnected" :page="$page"/>

    <br>
    <x-alert>
        <x-slot name="title">
            Komponens oldal a kontakthoz
        </x-slot>
        Vegye fel velünk a kapcsolatot
    </x-alert>

@endsection