@extends('layouts.main_layout')
@section('content')
    <div id="ospite">
        <div class="container">
            <h1>{{ $employee->firstname }} {{ $employee->lastname }}</h1>
            <h3>Identificativo: {{ $employee->id }}</h3>
            <h3>Ruolo: {{ $employee->role }}</h3>
            <h3>Ral: {{ $employee->ral }}</h3>
        </div>
    </div>
@endsection
