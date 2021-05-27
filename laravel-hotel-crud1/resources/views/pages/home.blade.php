@extends('layouts.main_layout')
@section('content')
    <div id="home">
        <div class="container">
            <h1>I Nostri dipendenti</h1>

            <div class="list_container">
                <ul class="flex_wrap">
                    @foreach ($employees as $employee)
                        <li>
                            <div class="card flex space_bet">
                                <a href="{{ route('employee', $employee->id) }}">
                                    <h3>{{ $i++ }}. {{ $employee->firstname }} {{ $employee->lastname }}</h3>
                                </a>
                                <div class="options flex">
                                    <a class="mod" href="">
                                        <h3>
                                            <i class="fas fa-user-edit"></i>
                                        </h3>
                                    </a>
                                    <a class="del" href="{{ route('destroy', $employee->id) }}">
                                        <h3>
                                            <i class="fas fa-user-times"></i>
                                        </h3>
                                    </a>
                                </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>

            {{-- <div class="container flex_center new">
                <a href="{{ route('createOspite') }}">
                    Inserisci nuovo ospite
                </a>
            </div> --}}
        </div>
    </div>
@endsection
