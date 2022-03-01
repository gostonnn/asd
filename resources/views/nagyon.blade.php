@extends("layouts.app")

@section("title", "Nagyon")

@section("content")

    <h1>Nagyon Nézet</h1>

    <x-message type="nézz is" message="ne csak láss" :page="$page"/>

    <br>
    <x-alert>
        <x-slot name="title">
            Szemteszt
        </x-slot>
        nagyon nagyon nézek

        <br>

        <h1>teszt</h1>
        <h2>teszt</h2>
        <h3>teszt</h3>
        <h4>teszt</h4>
        <h5>teszt</h5>

    </x-alert>

@endsection